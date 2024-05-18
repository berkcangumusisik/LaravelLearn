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
        Schema::create('listings', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedTinyInteger("beds");
            $table->unsignedTinyInteger("baths");
            $table->unsignedSmallInteger("area");
            $table->tinyText("city");
            $table->tinyText("code");
            $table->tinyText("street");
            $table->tinyText("street_nr");
            $table->unsignedInteger("price");

            // $table -> propertyType("name") ile veritabanındaki sütun oluşturmayı sağlar.
            // unsignedTinyInteger() ile 0 - 255 arasındaki sayıları gireriz.
            // unsignedSmallInteger() ile 0 - 65535 arasındaki sayıları gireriz.
            // unsignedMediumInteger() ile 0 - 16777215 arasındaki sayıları gireriz.
            // unsignedInteger() ile 0 - 4294967295 arasındaki sayıları gireriz.
            // unsignedBigInteger() ile 0 - 18446744073709551615 arasındaki sayıları gireriz.
            // tinyText() ile 255 karaktere kadar metin girebiliriz.
            // text() ile 65535 karaktere kadar metin girebiliriz.
            // mediumText() ile 16777215 karaktere kadar metin girebiliriz.
            // longText() ile 4294967295 karaktere kadar metin girebiliriz.

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropColumns("listings", [
            "beds", "baths", "area", "city", "code", "street", "street_nr", "price"
        ]);
    }
};
