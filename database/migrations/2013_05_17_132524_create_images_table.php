<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('images', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('image')->nullable();
            $table->enum('object',['DESIGN','MODEL','USER','BRAND','CUSTOMER','EXPORTER','FRAMEWORK','WORKSHOPE','SERIAL_CLOTHES','PRODUCT','HAULAGE_COMPANY','EXTERNAL_MODEL','RAW_MATERIAL'])->nullable();
            $table->integer('object_id')->nullable();


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
        Schema::dropIfExists('images');
    }
}
