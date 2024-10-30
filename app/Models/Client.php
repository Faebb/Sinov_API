<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    /**
     * El nombre de la tabla asociada con el modelo.
     *
     * @var string
     */
    protected $table = 'clients';

    /**
     * La clave primaria asociada con la tabla.
     *
     * @var string
     */
    protected $primaryKey = 'id_client';

    /**
     * Los atributos que se pueden asignar masivamente.
     *
     * @var array
     */
    protected $fillable = [
        'id_enterprise',
        'name',
        'email',
        'phone',
        'status',
    ];

    /**
     * Relación con el modelo Enterprise.
     */
    public function enterprise()
    {
        return $this->belongsTo(Enterprise::class, 'id_enterprise', 'id_enterprise');
    }
}
