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
        Schema::create('site_pages', function (Blueprint $table) {
            $table->id();
            $table->foreignId('site_id');
            $table->foreignId('site_category_page_id')->nullable();

            $table->string('name')->nullable();
            $table->string('slug')->unique();

            // $table->foreignId('site_version_id');
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
        Schema::dropIfExists('site_pages');
    }
};
// $table->foreignId('parent_id')->nullable()->references('id')->on('website_pages');
 