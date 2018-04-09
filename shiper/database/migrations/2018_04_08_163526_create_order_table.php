<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tracking_code');
            $table->string('recipient_name');
            $table->string('address');
            $table->string('phone');
            $table->date('delivery_time')->nullable();
            $table->text('note')->nullable();
            $table->string('package_name');
            $table->integer('deposit');
            $table->integer('cod');
            $table->string('total')->nullable();
            $table->string('image_order');
            $table->string('ship_team')->nullable();
            $table->string('collector')->nullable();
            $table->tinyInteger('shipper')->nullable();
            $table->tinyInteger('status');
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
        Schema::dropIfExists('order');
    }
}
