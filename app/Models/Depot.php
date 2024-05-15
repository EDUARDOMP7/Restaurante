<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Depot
 *
 * @property $id
 * @property $ingredient_id
 * @property $available_quantity
 * @property $created_at
 * @property $updated_at
 *
 * @property Ingredient $ingredient
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Depot extends Model
{
    
    static $rules = [
		'ingredient_id' => 'required',
		'available_quantity' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['ingredient_id','available_quantity'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function ingredient()
    {
        return $this->hasOne('App\Models\Ingredient', 'id', 'ingredient_id');
    }
    

}
