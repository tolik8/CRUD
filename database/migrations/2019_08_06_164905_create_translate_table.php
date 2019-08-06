<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTranslateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $table = 'translate';
        
        Schema::create($table, function (Blueprint $table) {
            $table->string('table', 32)->comment('Table name');
            $table->string('col', 32)->comment('Column name');
            $table->string('lang', 2)->comment('Language');
            $table->string('translate', 50)->comment('Translate');
            $table->unique(['table', 'col', 'lang']);
        });
        
        DB::statement("ALTER TABLE {$table} comment 'Dictionary of products'"); 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('translate');
    }
}
