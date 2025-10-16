<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class EmployeeProject extends Pivot
{
    protected $table = 'employee_project';

    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}
