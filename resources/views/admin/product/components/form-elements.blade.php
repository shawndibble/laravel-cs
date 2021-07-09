<div class="form-group row align-items-center" :class="{'has-danger': errors.has('product_name'), 'has-success': fields.product_name && fields.product_name.valid }">
    <label for="product_name" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.product.columns.product_name') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.product_name" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('product_name'), 'form-control-success': fields.product_name && fields.product_name.valid}" id="product_name" name="product_name" placeholder="{{ trans('admin.product.columns.product_name') }}">
        <div v-if="errors.has('product_name')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('product_name') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('brand'), 'has-success': fields.brand && fields.brand.valid }">
    <label for="brand" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.product.columns.brand') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.brand" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('brand'), 'form-control-success': fields.brand && fields.brand.valid}" id="brand" name="brand" placeholder="{{ trans('admin.product.columns.brand') }}">
        <div v-if="errors.has('brand')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('brand') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('description'), 'has-success': fields.description && fields.description.valid }">
    <label for="description" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.product.columns.description') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <div>
            <wysiwyg v-model="form.description" v-validate="''" id="description" name="description" :config="mediaWysiwygConfig"></wysiwyg>
        </div>
        <div v-if="errors.has('description')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('description') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('note'), 'has-success': fields.note && fields.note.valid }">
    <label for="note" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.product.columns.note') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <div>
            <textarea class="form-control" v-model="form.note" v-validate="''" id="note" name="note"></textarea>
        </div>
        <div v-if="errors.has('note')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('note') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('product_type'), 'has-success': fields.product_type && fields.product_type.valid }">
    <label for="product_type" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.product.columns.product_type') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.product_type" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('product_type'), 'form-control-success': fields.product_type && fields.product_type.valid}" id="product_type" name="product_type" placeholder="{{ trans('admin.product.columns.product_type') }}">
        <div v-if="errors.has('product_type')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('product_type') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('shipping_price'), 'has-success': fields.shipping_price && fields.shipping_price.valid }">
    <label for="shipping_price" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.product.columns.shipping_price') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.shipping_price" v-validate="'required|integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('shipping_price'), 'form-control-success': fields.shipping_price && fields.shipping_price.valid}" id="shipping_price" name="shipping_price" placeholder="{{ trans('admin.product.columns.shipping_price') }}">
        <div v-if="errors.has('shipping_price')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('shipping_price') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('style'), 'has-success': fields.style && fields.style.valid }">
    <label for="style" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.product.columns.style') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.style" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('style'), 'form-control-success': fields.style && fields.style.valid}" id="style" name="style" placeholder="{{ trans('admin.product.columns.style') }}">
        <div v-if="errors.has('style')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('style') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('url'), 'has-success': fields.url && fields.url.valid }">
    <label for="url" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.product.columns.url') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.url" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('url'), 'form-control-success': fields.url && fields.url.valid}" id="url" name="url" placeholder="{{ trans('admin.product.columns.url') }}">
        <div v-if="errors.has('url')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('url') }}</div>
    </div>
</div>


