<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tarifa
 *
 * @property $id
 * @property $Horario1
 * @property $ValorMinimo
 * @property $ValorKilometro
 * @property $Ruta
 * @property $Latitud
 * @property $Longitud
 * @property $RadioProximacion
 *
 * @property Registro[] $registros
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Tarifa extends Model
{
    
    static $rules = [
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Horario1','ValorMinimo','ValorKilometro','Ruta','Latitud','Longitud','RadioProximacion'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function registros()
    {
        return $this->hasMany('App\Models\Registro', 'Tarifa_Id', 'id');
    }
    

}
