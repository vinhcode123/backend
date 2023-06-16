<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string("products_name");
            $table->string('products_price');
            $table->string('description');
            $table->integer('id_caterory');
            $table->integer('quality');


            $table->timestamps();
        });
        Schema::table('products', function ($table) {
            $table->renameColumn('id_caterory', 'categorys_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
