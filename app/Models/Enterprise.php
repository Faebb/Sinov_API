<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enterprise extends Model
{
    use HasFactory;
    /** 
     * El nombre de la tabla asociada con el modelo. 
     * 
     * @var string 
     */
    protected $table = 'enterprises';

    /** 
     * La clave primaria asociada con la tabla. 
     * 
     * @var string 
     */
    protected $primaryKey = 'id_enterprise';

    /** 
     * Los atributos que se pueden asignar masivamente. 
     * 
     * @var array 
     */
    protected $fillable = [
        'name',
        'address',
        'created_by',
    ];

    /** 
     * La relación con el modelo User (Usuario que creó la empresa). 
     */
    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by', 'id_user');
    }

    /** 
     * Relación Uno a Muchos con el modelo User (Usuarios que pertenecen a la empresa). 
     */
    public function users()
    {
        return $this->hasMany(User::class, 'id_enterprise', 'id_enterprise');
    }
}
