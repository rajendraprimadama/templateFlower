<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMasterProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('master_product', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('product_name',100);
            $table->string('product_category',50);
            $table->string('status',10)->default('ACTIVE')->comment('ACTIVE, INACTIVE');
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
        Schema::dropIfExists('master_product');
    }
}
