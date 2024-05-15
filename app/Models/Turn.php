<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Turn
 *
 * @property $id
 * @property $start_time
 * @property $end_time
 * @property $created_at
 * @property $updated_at
 *
 * @property Attendance[] $attendances
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Turn extends Model
{
    
    static $rules = [
		'start_time' => 'required',
		'end_time' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['start_time','end_time'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function attendances()
    {
        return $this->hasMany('App\Models\Attendance', 'turns_id', 'id');
    }
    

}
