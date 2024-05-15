<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Reservation
 *
 * @property $id
 * @property $date_time
 * @property $client_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Client $client
 * @property ReservationTable[] $reservationTables
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Reservation extends Model
{
    
    static $rules = [
		'date_time' => 'required',
		'client_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['date_time','client_id'];


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
    public function reservationTables()
    {
        return $this->hasMany('App\Models\ReservationTable', 'reservation_id', 'id');
    }
    

}
