<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Employee
 *
 * @property $id
 * @property $name
 * @property $position
 * @property $hire_date
 * @property $created_at
 * @property $updated_at
 *
 * @property Attendance[] $attendances
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Employee extends Model
{
    
    static $rules = [
		'name' => 'required',
		'position' => 'required',
		'hire_date' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','position','hire_date'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function attendances()
    {
        return $this->hasMany('App\Models\Attendance', 'employee_id', 'id');
    }
    

}
