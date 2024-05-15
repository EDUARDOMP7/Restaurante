<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Attendance
 *
 * @property $id
 * @property $employee_id
 * @property $turns_id
 * @property $date
 * @property $created_at
 * @property $updated_at
 *
 * @property Employee $employee
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Attendance extends Model
{
    
    static $rules = [
		'employee_id' => 'required',
		'turns_id' => 'required',
		'date' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['employee_id','turns_id','date'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function employee()
    {
        return $this->hasOne('App\Models\Employee', 'id', 'employee_id');
    }
    

}
