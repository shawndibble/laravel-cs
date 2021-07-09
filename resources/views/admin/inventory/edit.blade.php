@extends('brackets/admin-ui::admin.layout.default')

@section('title', trans('admin.inventory.actions.edit', ['name' => $inventory->sku]))

@section('body')

    <div class="container-xl">
        <div class="card">

            <inventory-form
                :action="'{{ $inventory->resource_url }}'"
                :data="{{ $inventory->toJson() }}"
                v-cloak
                inline-template>

                <form class="form-horizontal form-edit" method="post" @submit.prevent="onSubmit" :action="action" novalidate>


                    <div class="card-header">
                        <i class="fa fa-pencil"></i> {{ trans('admin.inventory.actions.edit', ['name' => $inventory->sku]) }}
                    </div>

                    <div class="card-body">
                        <div class="form-group row align-items-center">
                            <label for="product_name" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.product.columns.product_name') }}</label>
                            <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
                                {{ $inventory->product->product_name }}
                            </div>
                        </div>
                        @include('admin.inventory.components.form-elements')
                    </div>


                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary" :disabled="submiting">
                            <i class="fa" :class="submiting ? 'fa-spinner' : 'fa-download'"></i>
                            {{ trans('brackets/admin-ui::admin.btn.save') }}
                        </button>
                    </div>

                </form>

        </inventory-form>

        </div>

</div>

@endsection
