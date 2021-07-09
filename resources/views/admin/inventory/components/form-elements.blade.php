<div class="form-group row align-items-center" :class="{'has-danger': errors.has('sku'), 'has-success': fields.sku && fields.sku.valid }">
    <label for="sku" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.inventory.columns.sku') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.sku" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('sku'), 'form-control-success': fields.sku && fields.sku.valid}" id="sku" name="sku" placeholder="{{ trans('admin.inventory.columns.sku') }}">
        <div v-if="errors.has('sku')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('sku') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('quantity'), 'has-success': fields.quantity && fields.quantity.valid }">
    <label for="quantity" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.inventory.columns.quantity') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.quantity" v-validate="'required|integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('quantity'), 'form-control-success': fields.quantity && fields.quantity.valid}" id="quantity" name="quantity" placeholder="{{ trans('admin.inventory.columns.quantity') }}">
        <div v-if="errors.has('quantity')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('quantity') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('size'), 'has-success': fields.size && fields.size.valid }">
    <label for="size" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.inventory.columns.size') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.size" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('size'), 'form-control-success': fields.size && fields.size.valid}" id="size" name="size" placeholder="{{ trans('admin.inventory.columns.size') }}">
        <div v-if="errors.has('size')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('size') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('color'), 'has-success': fields.color && fields.color.valid }">
    <label for="color" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.inventory.columns.color') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.color" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('color'), 'form-control-success': fields.color && fields.color.valid}" id="color" name="color" placeholder="{{ trans('admin.inventory.columns.color') }}">
        <div v-if="errors.has('color')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('color') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('cost_cents'), 'has-success': fields.cost_cents && fields.cost_cents.valid }">
    <label for="cost_cents" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.inventory.columns.cost_cents') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.cost_cents" v-validate="'integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('cost_cents'), 'form-control-success': fields.cost_cents && fields.cost_cents.valid}" id="cost_cents" name="cost_cents" placeholder="{{ trans('admin.inventory.columns.cost_cents') }}">
        <div v-if="errors.has('cost_cents')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('cost_cents') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('price_cents'), 'has-success': fields.price_cents && fields.price_cents.valid }">
    <label for="price_cents" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.inventory.columns.price_cents') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.price_cents" v-validate="'integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('price_cents'), 'form-control-success': fields.price_cents && fields.price_cents.valid}" id="price_cents" name="price_cents" placeholder="{{ trans('admin.inventory.columns.price_cents') }}">
        <div v-if="errors.has('price_cents')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('price_cents') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('sale_price_cents'), 'has-success': fields.sale_price_cents && fields.sale_price_cents.valid }">
    <label for="sale_price_cents" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.inventory.columns.sale_price_cents') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.sale_price_cents" v-validate="'required|integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('sale_price_cents'), 'form-control-success': fields.sale_price_cents && fields.sale_price_cents.valid}" id="sale_price_cents" name="sale_price_cents" placeholder="{{ trans('admin.inventory.columns.sale_price_cents') }}">
        <div v-if="errors.has('sale_price_cents')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('sale_price_cents') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('note'), 'has-success': fields.note && fields.note.valid }">
    <label for="note" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.inventory.columns.note') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <div>
            <textarea class="form-control" v-model="form.note" v-validate="''" id="note" name="note"></textarea>
        </div>
        <div v-if="errors.has('note')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('note') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('weight'), 'has-success': fields.weight && fields.weight.valid }">
    <label for="weight" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.inventory.columns.weight') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.weight" v-validate="'integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('weight'), 'form-control-success': fields.weight && fields.weight.valid}" id="weight" name="weight" placeholder="{{ trans('admin.inventory.columns.weight') }}">
        <div v-if="errors.has('weight')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('weight') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('width'), 'has-success': fields.width && fields.width.valid }">
    <label for="width" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.inventory.columns.width') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.width" v-validate="'integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('width'), 'form-control-success': fields.width && fields.width.valid}" id="width" name="width" placeholder="{{ trans('admin.inventory.columns.width') }}">
        <div v-if="errors.has('width')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('width') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('height'), 'has-success': fields.height && fields.height.valid }">
    <label for="height" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.inventory.columns.height') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.height" v-validate="'integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('height'), 'form-control-success': fields.height && fields.height.valid}" id="height" name="height" placeholder="{{ trans('admin.inventory.columns.height') }}">
        <div v-if="errors.has('height')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('height') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('length'), 'has-success': fields.length && fields.length.valid }">
    <label for="length" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.inventory.columns.length') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.length" v-validate="'integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('length'), 'form-control-success': fields.length && fields.length.valid}" id="length" name="length" placeholder="{{ trans('admin.inventory.columns.length') }}">
        <div v-if="errors.has('length')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('length') }}</div>
    </div>
</div>


