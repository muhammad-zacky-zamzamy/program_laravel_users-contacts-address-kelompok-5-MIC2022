<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class createUsersTable extends Migration
{
    public function up()
    {
        // Membuat skema tabel 'users'
        Schema::create('users', function (Blueprint $table) {
            $table->id(); // Kolom ID otomatis
            $table->string('username')->unique(); // Kolom untuk nama pengguna yang unik
            $table->string('password'); // Kolom untuk kata sandi
            $table->string('name'); // Kolom untuk nama pengguna
            $table->timestamps(); // Kolom untuk waktu pembuatan dan pembaruan
        });
    }

    public function down()
    {
        // Menghapus skema tabel 'users'
        Schema::dropIfExists('users');
    }
}
