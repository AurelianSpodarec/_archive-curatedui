<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('site_components', function (Blueprint $table) {
            $table->id();
            $table->foreignId('site_id');
            $table->foreignId('parent_id')->nullable()->references('id')->on('site_components');
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
        Schema::dropIfExists('site_components');
    }
};

// $table->foreignId('component_category_id')->nullable();