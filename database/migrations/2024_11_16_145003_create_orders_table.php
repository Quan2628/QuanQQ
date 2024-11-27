<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->date('date_order');
            $table->integer('quantity');
            $table->decimal('total_price', 10, 2);
            $table->string('status')->nullable();
            // $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
        });
        DB::statement('ALTER TABLE orders ADD CONSTRAINT ck_total_price check (total_price>=0)');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::statement('ALTER TABLE orders DROP CONSTRAINT ck_total_price');
        Schema::dropIfExists('orders');
    }
};
