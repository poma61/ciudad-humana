<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('noticias', function (Blueprint $table) {
            $table->engine = 'InnoDB ROW_FORMAT=DYNAMIC';
            $table->id();
            $table->uuid('uuid')->unique();
            $table->string('slug')->unique();
            $table->string('epigrafe', 255);
            $table->string('titular', 400);
            $table->string('image')->nullable();
            $table->string('subtitulo', 400)->nullable();
            $table->text('lead');
            $table->longText('cuerpo');
            $table->boolean('published')->default(true);
            $table->date('date');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('noticias');
    }
};
