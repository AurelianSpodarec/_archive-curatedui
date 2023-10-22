<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('sites', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('site_category_type_id')->nullable();
            $table->foreignId('site_category_industry_id')->nullable();
            $table->foreignId('site_brand_color_id')->nullable();

            $table->string('logo')->nullable();
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('thumbnail')->nullable();

            $table->boolean('is_visible')->default(false);
            $table->timestamp('published_at')->nullable();
            // $table->foreignId('site_version_id')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('sites');
    }
};