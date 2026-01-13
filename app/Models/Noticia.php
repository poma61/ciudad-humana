<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Noticia extends Model
{
    use HasUuids;
    use SoftDeletes;

    protected $guarded = [];

    public function uniqueIds(): array
    {
        return ['uuid'];
    }

    /**
     * Esto le dice a Laravel: "Para buscar noticias en la URL,
     */
    public function getRouteKeyName(): string
    {
        return 'uuid';
    }
} // class
