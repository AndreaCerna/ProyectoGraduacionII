<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Elemento
 *
 * @property $id
 * @property $nombre_elemento
 * @property $created_at
 * @property $updated_at
 * @property $cargos_id
 *
 * @property Cargo $cargo
 * @property Multa[] $multas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Elemento extends Model
{
    
    static $rules = [
		'nombre_elemento' => 'required',
		'cargos_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    
    

}
