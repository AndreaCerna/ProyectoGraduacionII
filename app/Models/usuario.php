<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Usuario
 *
 * @property $id
 * @property $nombre_usuario
 * @property $email_usuario
 * @property $created_at
 * @property $updated_at
 * @property $cargos_id
 *
 * @property Cargo $cargo
 * @property Multa[] $multas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Usuario extends Model
{
    
    static $rules = [
		'nombre_usuario' => 'required',
		'email_usuario' => 'required',
		'cargos_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre_usuario','email_usuario','cargos_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function cargo()
    {
        return $this->hasOne('App\Models\Cargo', 'id', 'cargos_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function multas()
    {
        return $this->hasMany('App\Models\Multa', 'usuarios_id', 'id');
    }
    

}
