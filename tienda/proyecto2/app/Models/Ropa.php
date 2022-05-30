<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Ropa
 *
 * @property $id
 * @property $categorias_id
 * @property $marca
 * @property $descripcion
 * @property $precio
 * @property $created_at
 * @property $updated_at
 *
 * @property Categoria $categoria
 * @property Dcompra[] $dcompras
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Ropa extends Model
{
    
    static $rules = [
		'categorias_id' => 'required',
		'marca' => 'required',
		'descripcion' => 'required',
		'precio' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['categorias_id','marca','descripcion','precio'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function categoria()
    {
        return $this->hasOne('App\Models\Categoria', 'id', 'categorias_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function dcompras()
    {
        return $this->hasMany('App\Models\Dcompra', 'ropas_id', 'id');
    }
    

}
