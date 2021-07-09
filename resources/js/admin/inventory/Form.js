import AppForm from '../app-components/Form/AppForm';

Vue.component('inventory-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                color:  '' ,
                cost_cents:  '' ,
                height:  '' ,
                length:  '' ,
                note:  '' ,
                price_cents:  '' ,
                product_id:  '' ,
                quantity:  '' ,
                sale_price_cents:  '' ,
                size:  '' ,
                sku:  '' ,
                weight:  '' ,
                width:  '' ,
                
            }
        }
    }

});