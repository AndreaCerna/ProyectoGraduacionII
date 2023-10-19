<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Vehiculo
 *
 * @property $id
 * @property $placa
 * @property $marca
 * @property $color
 * @property $tarjeta_circulacion
 * @property $propietario
 *  @property $tipo_placas_id
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Vehiculo extends Model
{

    static $rules = [
		'placa' => 'required',
		'marca' => 'required',
		'color' => 'required',
		'tarjeta_circulacion' => 'required',
		'propietario' => 'required',
        'tipo_placas_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['placa','marca','color','tarjeta_circulacion','propietario','tipo_placas_id'];


    public function TipoPlaca()
    {
        return $this->hasOne('App\Models\TipoPlaca', 'id', 'tipo_placas_id');
    }
}
