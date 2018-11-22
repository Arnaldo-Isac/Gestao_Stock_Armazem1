<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FtTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
    $table->unsignedInteger('category_id');
    $table->unsignedInteger('provider_id');
    $table->unsignedInteger('brand_id');

    $table->foreign('category_id')->references('id')->on('categories');
    $table->foreign('provider_id')->references('id')->on('providers');
    $table->foreign('brand_id')->references('id')->on('brands');
});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
