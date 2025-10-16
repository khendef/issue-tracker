<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'name',
        'description',
        'start_date',
        'finish_date',
        'due_date'
    ];

    public function issues()
    {
        return $this->hasMany(Issue::class);
    }

    public function employees()
    {
        return $this->belongsToMany(Employee::class)
                    ->using(EmployeeProject::class) 
                    ->withPivot('role_id') ;        
    }
}
