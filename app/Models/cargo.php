<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Cargo
 *
 * @property $id
 * @property $nombre_cargo
 * @property $created_at
 * @property $updated_at
 *
 * @property Usuario[] $usuarios
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Cargo extends Model
{
    
    static $rules = [
		'nombre_cargo' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre_cargo'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function usuarios()
    {
        return $this->hasMany('App\Models\Usuario', 'cargos_id', 'id');
    }
    

}
