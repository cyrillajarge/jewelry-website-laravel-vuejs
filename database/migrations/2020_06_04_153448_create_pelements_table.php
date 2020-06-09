<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePelementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pelements', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('page_id');
            $table->string('name')->unique();
            $table->string('title')->unique();
            $table->text('content');
            $table->enum('nimages',['none','single','multiple']);
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
        Schema::dropIfExists('pelements');
    }
}
