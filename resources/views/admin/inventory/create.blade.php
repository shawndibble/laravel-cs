@extends('brackets/admin-ui::admin.layout.default')

@section('title', trans('admin.inventory.actions.create'))

@section('body')

    <div class="container-xl">

                <div class="card">

        <inventory-form
            :action="'{{ url('admin/inventories') }}'"
            v-cloak
            inline-template>

            <form class="form-horizontal form-create" method="post" @submit.prevent="onSubmit" :action="action" novalidate>

                <div class="card-header">
                    <i class="fa fa-plus"></i> {{ trans('admin.inventory.actions.create') }}
                </div>

                <div class="card-body">
                    <div class="form-group row align-items-center" :class="{'has-danger': errors.has('product_id'), 'has-success': fields.roles && fields.roles.valid }">
                        <label for="product_name" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.product.columns.product_name') }}</label>
                        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
                            <multiselect v-model="form.product_name" placeholder="{{ trans('admin.product.columns.product_name') }}" label="product_name" track-by="id" :options="{{ $products->toJson() }}" :multiple="false" open-direction="bottom"></multiselect>
                            <div v-if="errors.has('product_id')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('product_name') }}</div>
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
