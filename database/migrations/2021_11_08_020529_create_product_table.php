<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->id();
            $table->String('produk');
            $table->String('harga');
            $table->String('jumlah');
            $table->timestamps();
        });

        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->String('nama');
            $table->String('deskripsi');
            $table->timestamps();
        });

        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->String('name');
            $table->String('email');
            $table->String('password');
            $table->String('remember_tokan');
            $table->timestamps();
        });

        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->String('email');
            $table->String('name');
            $table->String('address');
            $table->String('phone');
            $table->timestamps();
        });

        Schema::create('password', function (Blueprint $table) {
            $table->id();
            $table->String('email');
            $table->String('token');
            $table->timestamps();
        });

        Schema::create('migrate', function (Blueprint $table) {
            $table->id();
            $table->String('migrations');
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
        Schema::dropIfExists('product');
    }
}
