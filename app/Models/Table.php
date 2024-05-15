<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Table
 *
 * @property $id
 * @property $capacity
 * @property $status
 * @property $created_at
 * @property $updated_at
 *
 * @property ReservationTable[] $reservationTables
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Table extends Model
{
    
    static $rules = [
		'capacity' => 'required',
		'status' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['capacity','status'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function reservationTables()
    {
        return $this->hasMany('App\Models\ReservationTable', 'table_id', 'id');
    }
    

}
