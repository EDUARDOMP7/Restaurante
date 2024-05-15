<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Order
 *
 * @property $id
 * @property $date_time
 * @property $precio
 * @property $client_id
 * @property $table_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Client $client
 * @property Orderdish[] $orderdishes
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Order extends Model
{
    
    static $rules = [
		'date_time' => 'required',
		'precio' => 'required',
		'client_id' => 'required',
		'table_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['date_time','precio','client_id','table_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function client()
    {
        return $this->hasOne('App\Models\Client', 'id', 'client_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function orderdishes()
    {
        return $this->hasMany('App\Models\Orderdish', 'order_id', 'id');
    }
    

}
