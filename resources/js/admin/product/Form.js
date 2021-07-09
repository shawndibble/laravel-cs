import AppForm from '../app-components/Form/AppForm';

Vue.component('product-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                admin_id:  '' ,
                brand:  '' ,
                description:  '' ,
                note:  '' ,
                product_name:  '' ,
                product_type:  '' ,
                shipping_price:  '' ,
                style:  '' ,
                url:  '' ,
                
            }
        }
    }

});