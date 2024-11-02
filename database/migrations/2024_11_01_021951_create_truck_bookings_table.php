<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTruckBookingsTable extends Migration
{
    public function up()
    {
        Schema::create('truck_bookings', function (Blueprint $table) {
            $table->id();
            $table->string('customer_name'); // Nama pelanggan
            $table->string('truck_type'); // Jenis truk
            $table->date('booking_date'); // Tanggal pemesanan
            $table->time('booking_time'); // Waktu pemesanan
            $table->integer('quantity'); // Jumlah truk
            $table->string('status')->default('pending'); // Status pemesanan
            $table->timestamps(); // Waktu dibuat dan diupdate
        });
    }

    public function down()
    {
        Schema::dropIfExists('truck_bookings');
    }
}
