<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id('id_user');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            
            $table->longText('alamat1');
            $table->longText('alamat2');
            $table->integer('provinces_id');
            $table->integer('regencies_id');
            $table->integer('zip_id');
            $table->string('country');
            $table->string('no_hp');
            $table->string('nama_toko');
            $table->integer('id_kategori');
            $table->integer('status_toko');
            
            $table->softDeletes();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
