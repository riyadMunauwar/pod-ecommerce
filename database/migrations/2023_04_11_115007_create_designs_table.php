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
            $table->decimal('sale_price', 12, 2);
            $table->decimal('regular_price', 12, 2)->nullable();
            $table->string('meta_title')->nullable();
            $table->string('meta_description', 2024)->nullable();
            $table->string('meta_tags')->nullable();
            $table->text('feature')->nullable();
            $table->text('description')->nullable();
            $table->float('rank_score')->default(0)->nullable();
            $table->unsignedBigInteger('views')->default(0)->nullable();
            $table->unsignedBigInteger('share')->default(0)->nullable();
            $table->boolean('is_published')->default(true)->nullable();
            $table->boolean('is_featured')->default(false)->nullable();
            $table->boolean('is_own')->default(false)->nullable();
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
