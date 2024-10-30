<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserEnterpriseRole extends Model
{
    use HasFactory;

    /**
     * El nombre de la tabla asociada con el modelo.
     *
     * @var string
     */
    protected $table = 'users_enterprises_roles';

    /**
     * Los atributos que se pueden asignar masivamente.
     *
     * @var array
     */
    protected $fillable = [
        'id_user',
        'id_enterprise',
        'id_role',
    ];

    /**
     * Desactivar timestamps automáticos si no los usas en tu modelo.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * Relación con el modelo User.
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user', 'id_user');
    }

    /**
     * Relación con el modelo Enterprise.
     */
    public function enterprise()
    {
        return $this->belongsTo(Enterprise::class, 'id_enterprise', 'id_enterprise');
    }

    /**
     * Relación con el modelo Role.
     */
    public function role()
    {
        return $this->belongsTo(Role::class, 'id_role', 'id_role');
    }
}
