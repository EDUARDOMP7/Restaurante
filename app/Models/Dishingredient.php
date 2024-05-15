<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Dishingredient
 *
 * @property $id
 * @property $food_id
 * @property $ingredients_id
 * @property $required_quantity
 * @property $created_at
 * @property $updated_at
 *
 * @property Food $food
 * @property Ingredient $ingredient
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Dishingredient extends Model
{
    
    static $rules = [
		'food_id' => 'required',
		'ingredients_id' => 'required',
		'required_quantity' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['food_id','ingredients_id','required_quantity'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function food()
    {
        return $this->hasOne('App\Models\Food', 'id', 'food_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function ingredient()
    {
        return $this->hasOne('App\Models\Ingredient', 'id', 'ingredients_id');
    }
    

}
