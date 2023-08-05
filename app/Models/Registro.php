<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Registro
 *
 * @property $id
 * @property $Tarifa_Id
 * @property $Servicios_id
 * @property $User_id
 * @property $LatitudD
 * @property $LongitudD
 * @property $LatitudO
 * @property $LongitudO
 * @property $Estado
 * @property $ValorTotal
 * @property $TipoPago
 * @property $created_at
 * @property $updated_at
 *
 * @property Servicio $servicio
 * @property Tarifa $tarifa
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Registro extends Model
{
    
    static $rules = [
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Tarifa_Id','Servicios_id','User_id','LatitudD','LongitudD','LatitudO','LongitudO','Estado','ValorTotal','TipoPago'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function servicio()
    {
        return $this->hasOne('App\Models\Servicio', 'id', 'Servicios_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tarifa()
    {
        return $this->hasOne('App\Models\Tarifa', 'id', 'Tarifa_Id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'User_id');
    }
    

}
