<?php

return [
    'admin-user' => [
        'title' => 'Users',

        'actions' => [
            'index' => 'Users',
            'create' => 'New User',
            'edit' => 'Edit :name',
            'edit_profile' => 'Edit Profile',
            'edit_password' => 'Edit Password',
        ],

        'columns' => [
            'id' => 'ID',
            'last_login_at' => 'Last login',
            'activated' => 'Activated',
            'email' => 'Email',
            'first_name' => 'First name',
            'forbidden' => 'Forbidden',
            'language' => 'Language',
            'last_name' => 'Last name',
            'password' => 'Password',
            'password_repeat' => 'Password Confirmation',
                
            //Belongs to many relations
            'roles' => 'Roles',
                
        ],
    ],

    'product' => [
        'title' => 'Products',

        'actions' => [
            'index' => 'Products',
            'create' => 'New Product',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'admin_id' => 'Admin',
            'brand' => 'Brand',
            'description' => 'Description',
            'note' => 'Note',
            'product_name' => 'Product name',
            'product_type' => 'Product type',
            'shipping_price' => 'Shipping price',
            'style' => 'Style',
            'url' => 'Url',
            
        ],
    ],

    'inventory' => [
        'title' => 'Inventory',

        'actions' => [
            'index' => 'Inventory',
            'create' => 'New Inventory',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'color' => 'Color',
            'cost_cents' => 'Cost cents',
            'height' => 'Height',
            'length' => 'Length',
            'note' => 'Note',
            'price_cents' => 'Price cents',
            'product_id' => 'Product',
            'quantity' => 'Quantity',
            'sale_price_cents' => 'Sale price cents',
            'size' => 'Size',
            'sku' => 'Sku',
            'weight' => 'Weight',
            'width' => 'Width',
            
        ],
    ],

    // Do not delete me :) I'm used for auto-generation
];