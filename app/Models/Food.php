<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Food
 *
 * @property $id
 * @property $created_at
 * @property $updated_at
 *
 * @property Dishingredient[] $dishingredients
 * @property Orderdish[] $orderdishes
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Food extends Model
{
    
    static $rules = [
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function dishingredients()
    {
        return $this->hasMany('App\Models\Dishingredient', 'food_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function orderdishes()
    {
        return $this->hasMany('App\Models\Orderdish', 'food_id', 'id');
    }
    

}
