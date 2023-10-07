<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Multa
 *
 * @property $id
 * @property $serie
 * @property $lugar
 * @property $fecha
 * @property $articulo
 * @property $monto_multa
 * @property $Conductor
 * @property $licencia_conducir
 * @property $created_at
 * @property $updated_at
 * @property $elementos_id
 * @property $vehiculos_id
 * @property $usuarios_id
 *
 * @property Elemento $elemento
 * @property Usuario $usuario
 * @property Vehiculo $vehiculo
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Multa extends Model
{

    static $rules = [
		'serie' => 'required',
		'lugar' => 'required',
		'fecha' => 'required',
		'articulo' => 'required',
		'monto_multa' => 'required',
		'Conductor' => 'required',
		'licencia_conducir' => 'required',
		'elementos_id' => 'required',
		'vehiculos_id' => 'required',
		'usuarios_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['serie','lugar','fecha','articulo','monto_multa','Conductor','licencia_conducir','elementos_id','vehiculos_id','usuarios_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function elemento()
    {
        return $this->hasOne('App\Models\Elemento', 'id', 'elementos_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function usuario()
    {
        return $this->hasOne('App\Models\Usuario', 'id', 'usuarios_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function vehiculo()
    {
        return $this->hasOne('App\Models\Vehiculo', 'id', 'vehiculos_id');
    }


}
