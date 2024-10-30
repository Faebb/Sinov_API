<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invitation extends Model
{
    use HasFactory;

    /**
     * El nombre de la tabla asociada con el modelo.
     *
     * @var string
     */
    protected $table = 'invitations';

    /**
     * La clave primaria asociada con la tabla.
     *
     * @var string
     */
    protected $primaryKey = 'id_invitation';

    /**
     * Los atributos que se pueden asignar masivamente.
     *
     * @var array
     */
    protected $fillable = [
        'id_enterprise',
        'email',
        'id_role',
        'status',
    ];

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
