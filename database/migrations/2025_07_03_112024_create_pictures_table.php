<?php

use App\PictureProperties;
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
        Schema::create('pictures', function (Blueprint $table) {
            $table->id()->autoIncrement()->comment('Unique identifier for the picture');
            $table->string(PictureProperties::TAG->value)->comment('Tag for the picture, e.g. "cake", torte", "cupcakes"');
            $table->string(PictureProperties::URL->value)->comment('URL of the picture on the server');
            $table->string(PictureProperties::ALT->value)->comment('URL of the picture on the server');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pictures');
    }
};
