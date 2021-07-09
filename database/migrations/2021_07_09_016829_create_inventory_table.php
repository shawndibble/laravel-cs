<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInventoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventory', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('product_id')->constrained()->cascadeOnDelete();
            $table->integer('quantity')->default(0);
            $table->string('color')->nullable();
            $table->string('size')->nullable();
            $table->integer('weight')->default(0)->nullable();
            $table->integer('price_cents')->default(0)->nullable();
            $table->integer('sale_price_cents')->default(0);
            $table->integer('cost_cents')->default(0)->nullable();
            $table->string('sku')->nullable();
            $table->integer('length')->default(0)->nullable();
            $table->integer('width')->default(0)->nullable();
            $table->integer('height')->default(0)->nullable();
            $table->text('note')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inventory');
    }
}
