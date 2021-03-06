<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCertificationItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('certification_items', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title_ar');
            $table->string('title_en')->nullable();
            $table->longText('content_ar');
            $table->longText('content_en')->nullable();
            $table->string('photo');
            $table->boolean('is_active')->default(1);
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
        Schema::dropIfExists('certification_items');
    }
}
