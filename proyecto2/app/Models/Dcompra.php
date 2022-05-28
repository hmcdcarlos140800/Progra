<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Dcompra
 *
 * @property $id
 * @property $ropas_id
 * @property $compras_id
 * @property $cantidad
 * @property $created_at
 * @property $updated_at
 *
 * @property Compra $compra
 * @property Ropa $ropa
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Dcompra extends Model
{
    
    static $rules = [
		'ropas_id' => 'required',
		'compras_id' => 'required',
		'cantidad' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['ropas_id','compras_id','cantidad'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function compra()
    {
        return $this->hasOne('App\Models\Compra', 'id', 'compras_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function ropa()
    {
        return $this->hasOne('App\Models\Ropa', 'id', 'ropas_id');
    }
    

}
