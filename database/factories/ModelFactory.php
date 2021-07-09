<?php

/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(Brackets\AdminAuth\Models\AdminUser::class, function (Faker\Generator $faker) {
    return [
        'activated' => true,
        'created_at' => $faker->dateTime,
        'deleted_at' => null,
        'email' => $faker->email,
        'first_name' => $faker->firstName,
        'forbidden' => $faker->boolean(),
        'language' => 'en',
        'last_login_at' => $faker->dateTime,
        'last_name' => $faker->lastName,
        'password' => bcrypt($faker->password),
        'remember_token' => null,
        'updated_at' => $faker->dateTime,
        
    ];
});/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Product::class, static function (Faker\Generator $faker) {
    return [
        'admin_id' => $faker->sentence,
        'brand' => $faker->sentence,
        'created_at' => $faker->dateTime,
        'description' => $faker->text(),
        'note' => $faker->text(),
        'product_name' => $faker->sentence,
        'product_type' => $faker->sentence,
        'shipping_price' => $faker->randomNumber(5),
        'style' => $faker->sentence,
        'updated_at' => $faker->dateTime,
        'url' => $faker->sentence,
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Inventory::class, static function (Faker\Generator $faker) {
    return [
        'color' => $faker->sentence,
        'cost_cents' => $faker->randomNumber(5),
        'created_at' => $faker->dateTime,
        'height' => $faker->randomNumber(5),
        'length' => $faker->randomNumber(5),
        'note' => $faker->text(),
        'price_cents' => $faker->randomNumber(5),
        'product_id' => $faker->sentence,
        'quantity' => $faker->randomNumber(5),
        'sale_price_cents' => $faker->randomNumber(5),
        'size' => $faker->sentence,
        'sku' => $faker->sentence,
        'updated_at' => $faker->dateTime,
        'weight' => $faker->randomNumber(5),
        'width' => $faker->randomNumber(5),
        
        
    ];
});
