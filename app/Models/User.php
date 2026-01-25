<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\HasMany;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * CAMPOS ASIGNABLES
     *
     * fillable define qué campos pueden ser asignados masivamente.
     * Es importante para la seguridad, ya que evita que se asignen
     * campos sensibles desde una petición HTTP.
     *
     * Ejemplos de uso:
     * - User::create([...]);
     * - $user->update([...]);
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
    ];

    /**
     * Check if the user is an administrator.
     */
    public function isAdmin(): bool
    {
        return $this->role === 'admin';
    }

    /**
     * CAMPOS OCULTOS
     *
     * hidden define qué campos se ocultan cuando el modelo se convierte
     * a array o JSON (por ejemplo, al devolver datos en una API).
     *
     * En este caso se oculta la contraseña y el token de "recuérdame".
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * CONVERSIÓN DE TIPOS (CASTS)
     *
     * casts define cómo se deben convertir automáticamente ciertos campos
     * cuando se leen o escriben en el modelo.
     *
     * - email_verified_at: Se trata como instancia de DateTime.
     * - password: Usa el cast "hashed", que hace hash automáticamente
     *   al asignar una nueva contraseña.
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    /**
     * Get the products in the user's cart (N:M relationship).
     * El segundo parámetro 'product_user' es el nombre de la tabla pivot.
     * withPivot('quantity') expone el campo adicional 'quantity' de la tabla pivot.
     * withTimestamps() expone los timestamps de la tabla pivot.
     */
    public function products()
    {
        return $this->belongsToMany(Product::class, 'product_user')
            ->withPivot('quantity')
            ->withTimestamps();
    }
}