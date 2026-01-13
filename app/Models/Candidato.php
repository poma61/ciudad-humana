<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Candidato extends Model
{
    use HasFactory, HasUuids, SoftDeletes;

    protected $fillable = [
        'n',
        'genero',
        'ca',
        'name',
        'slug',
        'summary',
        'bio',
        'photo',
    ];

    public function uniqueIds(): array
    {
        return ['uuid'];
    }

    protected static function booted()
    {
        static::saving(function ($candidato) {
            if ($candidato->isDirty('name')) {
                // Esto hace toda la magia (minusculas, guiones, sin ñ, sin acentos)
                $candidato->slug = Str::slug($candidato->name);
            }
        });
    }
} // class
