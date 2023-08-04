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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->decimal('total', 12, 2);
            $table->float('shipping_cost')->nullable();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('vendor_id')->nullalbe()->constrained('users', 'id');
            $table->foreignId('designer_id')->nullalbe()->constrained('users', 'id');
            $table->foreignId('admin_id')->nullalbe()->constrained('users', 'id');
            $table->dateTime('paid_at')->nullable();
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
        Schema::dropIfExists('orders');
    }
};
