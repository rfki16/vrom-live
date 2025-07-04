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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();

            // Name
            $table->string('name')->nullable();

            // Start and End Date
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();

            // Address
            $table->text('address')->nullable();
            $table->string('city')->nullable();
            $table->string('zip')->nullable();

            // Status (Pending, Success, Failed)
            $table->string('status')->default('pending');

            // Payment Method
            $table->string('payment_method')->default('midtrans');
            $table->string('payment_status')->default('pending');
            $table->string('payment_url')->nullable();

            // Total Price
            $table->integer('price')->default(0);


            $table->foreignId('item_id')->constrained();
            $table->foreignId('user_id')->constrained();

            $table->softDeletes();
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
        Schema::dropIfExists('bookings');
    }
};
