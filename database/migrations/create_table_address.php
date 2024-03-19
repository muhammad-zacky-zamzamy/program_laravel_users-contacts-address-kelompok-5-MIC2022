<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class createAddressesTable extends Migration
{
    public function up()
    {
        // Membuat skema tabel 'addresses'
        Schema::create('addresses', function (Blueprint $table) {
            $table->id(); // Kolom ID otomatis
            $table->unsignedBigInteger('contact_id'); // Kolom ID kontak yang terkait
            $table->foreign('contact_id')->references('id')->on('contacts')->onDelete('cascade'); // Kunci asing ke tabel 'contacts'
            $table->string('street'); // Kolom untuk alamat jalan
            $table->string('city'); // Kolom untuk kota
            $table->string('province'); // Kolom untuk provinsi
            $table->string('country'); // Kolom untuk negara
            $table->string('postal_code'); // Kolom untuk kode pos
            $table->timestamps(); // Kolom untuk waktu pembuatan dan pembaruan
        });
    }

    public function down()
    {
        // Menghapus skema tabel 'addresses'
        Schema::dropIfExists('addresses');
    }
}
