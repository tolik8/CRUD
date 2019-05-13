<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        $table = 'products';

        Schema::create('products', static function (Blueprint $table) {
            $table->increments('id')->comment('id');
            $table->unsignedBigInteger('code')->unique()->comment('Code');
            $table->string('name', 50)->comment('Name');
            $table->date('d_begin')->comment('Date begin');
            $table->date('d_end')->comment('Date end');
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
        });

        DB::statement("ALTER TABLE {$table} comment 'Dictionary of products'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
}
