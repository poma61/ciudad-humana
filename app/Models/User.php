<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Filament\Panel;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
use Filament\Models\Contracts\FilamentUser;


class User extends Authenticatable implements FilamentUser
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, HasRoles, HasUuids, Notifiable, SoftDeletes;

    /**
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    /**
     * IMPORTANTE:
     * Esto le dice a Laravel: "No pongas el UUID en el ID.
     * Genera el UUID automáticamente y guárdalo en la columna 'uuid'".
     */
    public function uniqueIds(): array
    {
        return ['uuid'];
    }

    /**
     * Esto le dice a Laravel: "Para buscar noticias en la URL,
     * usa la columna 'uuid' en vez del ID".
     */
    public function getRouteKeyName(): string
    {
        return 'uuid';
    }

    // Para filament
    public function canAccessPanel(Panel $panel): bool
    {
        // OPCIÓN A: Permitir solo si el email es específico (Recomendado)
        return $this->email === 'admin@gmail.com';

        // OPCIÓN B: Permitir si el usuario tiene verificado el email
        // return $this->hasVerifiedEmail() && str_ends_with($this->email, '@tudominio.com');

        // OPCIÓN C: Permitir a TODOS (Solo úsalo si ya tienes otra capa de seguridad)
        // return true;
    }
} // class
