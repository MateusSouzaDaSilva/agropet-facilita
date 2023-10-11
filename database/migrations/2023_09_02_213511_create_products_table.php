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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('prod_name');
            $table->decimal('prod_price', 12, 2);
            $table->string('tags');
            $table->boolean('prod_promocaoativa');
            $table->string('prod_marca')->nullable();
            $table->string('prod_modelo')->nullable();
            $table->text('prod_description');
            $table->string('prod_fabr')->nullable();
            $table->integer('prod_EAN')->nullable();
            $table->text('prod_image');
            $table->text('prod_link');

           

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


