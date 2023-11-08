<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('local_postcodes', function (Blueprint $table) {
            $table->id();
            $table->string('postcode');
            $table->string('parliamentary_constituency');
            $table->string('nuts');
            $table->string('pfa');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('local_postcodes');
    }
};
