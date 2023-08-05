<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Servicio
 *
 * @property $id
 * @property $Movil_id
 * @property $User_id
 * @property $Horario1
 * @property $Horario2
 * @property $Latitud
 * @property $Longitud
 * @property $Estado
 *
 * @property Movil $movil
 * @property Registro[] $registros
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Servicio extends Model
{
    
    static $rules = [
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Movil_id','User_id','Horario1','Horario2','Latitud','Longitud','Estado'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function movil()
    {
        return $this->hasOne('App\Models\Movil', 'id', 'Movil_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function registros()
    {
        return $this->hasMany('App\Models\Registro', 'Servicios_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'User_id');
    }
    

}
