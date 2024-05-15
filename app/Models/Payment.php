<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Payment
 *
 * @property $id
 * @property $client_id
 * @property $total_amount
 * @property $payment_method
 * @property $created_at
 * @property $updated_at
 *
 * @property Client $client
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Payment extends Model
{
    
    static $rules = [
		'client_id' => 'required',
		'total_amount' => 'required',
		'payment_method' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['client_id','total_amount','payment_method'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function client()
    {
        return $this->hasOne('App\Models\Client', 'id', 'client_id');
    }
    

}
