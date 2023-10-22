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
        Schema::create('site_versions', function (Blueprint $table) {
            $table->id();
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
        Schema::dropIfExists('site_versions');
    }
};




// public function up()
// {
//     Schema::create('site_version', function (Blueprint $table) {
//         $table->id();

//         $table->string('site_id');
//         $table->string('version_id');
//         $table->string('created_date');

//         $table->timestamps();
//     });
// }
