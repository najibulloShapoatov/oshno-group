<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSlideShowsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slide_shows', function (Blueprint $table) {
            $table->id();
            $table->string("title");
            $table->text("subtitle")->nullable();
            $table->string("image")->nullable();
            $table->string("image_lg")->nullable();
            $table->string("image_sm")->nullable();
            $table->string("link")->nullable();
            $table->string("location")->nullable();
            $table->boolean("is_active")->default(true);
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
        Schema::dropIfExists('slide_shows');
    }
}
