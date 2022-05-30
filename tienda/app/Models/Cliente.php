<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Cliente
 *
 * @property $id
 * @property $cpostales_id
 * @property $nombre
 * @property $apellido
 * @property $calle
 * @property $colonia
 * @property $correo
 * @property $created_at
 * @property $updated_at
 *
 * @property Compra[] $compras
 * @property Cpostale $cpostale
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Cliente extends Model
{
    
    static $rules = [
		'cpostales_id' => 'required',
		'nombre' => 'required',
		'apellido' => 'required',
		'calle' => 'required',
		'colonia' => 'required',
		'correo' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['cpostales_id','nombre','apellido','calle','colonia','correo'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function compras()
    {
        return $this->hasMany('App\Models\Compra', 'clientes_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function cpostale()
    {
        return $this->hasOne('App\Models\Cpostale', 'id', 'cpostales_id');
    }
    

}
