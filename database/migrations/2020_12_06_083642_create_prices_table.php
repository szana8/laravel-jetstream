<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prices', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constrained('products');
            $table->enum('model', ['standard', 'package'])->default('standard');
            $table->float('unit_amount');
            $table->string('currency')->default('USD');
            $table->string('interval');
            $table->string('billing_scheme');
            $table->string('api_id')->unique();
            $table->boolean('active')->default(false);
            $table->boolean('livemode')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prices');
    }
}
