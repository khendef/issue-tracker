<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
        'name',
        'email'
    ];

    public function issues()
    {
        return $this->hasMany(Issue::class);
    }

    public function projects()
    {
        return $this->belongsToMany(Project::class)
                    ->using(EmployeeProject::class) 
                    ->withPivot('role_id');      
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
