<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Cpostale
 *
 * @property $id
 * @property $ciudad
 * @property $estado
 * @property $created_at
 * @property $updated_at
 *
 * @property Cliente[] $clientes
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Cpostale extends Model
{
    
    static $rules = [
		'ciudad' => 'required',
		'estado' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['ciudad','estado'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function clientes()
    {
        return $this->hasMany('App\Models\Cliente', 'cpostales_id', 'id');
    }
    

}
