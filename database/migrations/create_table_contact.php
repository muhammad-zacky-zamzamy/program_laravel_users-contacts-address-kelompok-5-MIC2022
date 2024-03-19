<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class createContactsTable extends Migration
{
    public function up()
    {
        // Membuat skema tabel 'contacts'
        Schema::create('contacts', function (Blueprint $table) {
            $table->id(); // Kolom ID otomatis
            $table->string('first_name'); // Kolom untuk nama depan
            $table->string('last_name'); // Kolom untuk nama belakang
            $table->string('email')->unique(); // Kolom untuk alamat email yang unik
            $table->string('phone')->unique(); // Kolom untuk nomor telepon yang unik
            $table->timestamps(); // Kolom untuk waktu pembuatan dan pembaruan
        });
    }

    public function down()
    {
        // Menghapus skema tabel 'contacts'
        Schema::dropIfExists('contacts');
    }
}
