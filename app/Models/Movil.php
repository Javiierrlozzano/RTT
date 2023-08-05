<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Movil
 *
 * @property $id
 * @property $Placa
 * @property $Estado
 * @property $Modelo
 * @property $Sn
 * @property $Color
 * @property $Marca
 *
 * @property Servicio[] $servicios
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Movil extends Model
{
    
    static $rules = [
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Placa','Estado','Modelo','Sn','Color','Marca'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function servicios()
    {
        return $this->hasMany('App\Models\Servicio', 'Movil_id', 'id');
    }
    

}
