<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string("type");
            $table->string("title");
            $table->boolean("is_active")->default(true);
            $table->float("price", 9, 2)->default(0.00);
            $table->string("image")->nullable();
            $table->string("speed")->nullable();
            $table->string("traffic")->nullable();
            $table->string("is_connect_free")->nullable();
            $table->text("description")->nullable();
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
        Schema::dropIfExists('products');
    }
}
