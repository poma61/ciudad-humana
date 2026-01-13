<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('candidatos', function (Blueprint $table) {
            $table->engine = 'InnoDB ROW_FORMAT=DYNAMIC';
            $table->id();
            $table->uuid()->unique();
            $table->tinyInteger('n');
            $table->string('ca');
            $table->string('genero');
            $table->string('name');
            $table->string('slug');
            $table->longText('summary');
            $table->longText('bio');
            $table->string('photo');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('candidatos');
    }
};
