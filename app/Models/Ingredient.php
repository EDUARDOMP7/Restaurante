<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Ingredient
 *
 * @property $id
 * @property $name
 * @property $stock_quantity
 * @property $created_at
 * @property $updated_at
 *
 * @property Depot[] $depots
 * @property Dishingredient[] $dishingredients
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Ingredient extends Model
{
    
    static $rules = [
		'name' => 'required',
		'stock_quantity' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','stock_quantity'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function depots()
    {
        return $this->hasMany('App\Models\Depot', 'ingredient_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function dishingredients()
    {
        return $this->hasMany('App\Models\Dishingredient', 'ingredients_id', 'id');
    }
    

}
