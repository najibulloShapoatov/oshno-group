<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDomainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('domains', function (Blueprint $table) {
            $table->id();
            $table->string("title");
            $table->string("disk_space")->nullable();
            $table->float("registration_price", 9, 2)->default(0.00);
            $table->float("renewal_price", 9, 2)->default(0.00);
            $table->float("transfer_price", 9, 2)->default(0.00);
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
        Schema::dropIfExists('domains');
    }
}
