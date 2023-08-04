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
        Schema::create('designs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug');
            $table->decimal('design_sale_price', 12, 2);
            $table->decimal('design_regular_price', 12, 2)->nullable();
            $table->string('meta_title')->nullable();
            $table->string('meta_description', 2024)->nullable();
            $table->string('meta_tags')->nullable();
            $table->float('rank_score')->default(0)->nullable();
            $table->unsignedBigInteger('views')->default(0)->nullable();
            $table->unsignedBigInteger('share')->default(0)->nullable();
            $table->boolean('is_published')->default(true)->nullable();
            $table->boolean('is_featured')->default(false)->nullable();
            $table->boolean('is_own')->default(false)->nullable();

            $table->float('design_top')->nullable();
            $table->float('design_left')->nullable();
            $table->float('design_width')->nullable();
            $table->float('design_height')->nullable();
            $table->float('design_opacity_color')->default('black')->nullable();
            $table->float('design_opacity')->nullable();
            $table->float('design_rotate_angel')->nullable();
            
            $table->foreignId('product_id')->constrained();
            $table->foreignId('user_id')->constrained();
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
        Schema::dropIfExists('designs');
    }
};
