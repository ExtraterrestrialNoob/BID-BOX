<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name', 40)->nullable();
            $table->decimal('price', 28, 8)->default(0);
            $table->unsignedInteger('total_bid')->default(0);
            $table->dateTime('expired_at')->nullable();
            $table->decimal('rating', 5,2)->default(0);
            $table->unsignedInteger('total_rating')->default(0);
            $table->unsignedInteger('review')->default(0);
            $table->text('short_description')->nullable();
            $table->text('long_description')->nullable();
            $table->text('specification')->nullable();
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
        Schema::dropIfExists('products');
    }
}
