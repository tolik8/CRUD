<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pet_tag', function (Blueprint $table) {

            $table->unsignedBigInteger('pet_id');
            $table->unsignedBigInteger('tag_id');

//            $table->index('pet_id', 'pet_tag_pet_idx');
//            $table->index('tag_id', 'pet_tag_tag_idx');
//
//            $table->foreign('pet_id', 'pet_tag_pet_fk')->on('pets')->references('id');
//            $table->foreign('tag_id', 'pet_tag_tag_fk')->on('tags')->references('id');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pet_tags');
    }
};
