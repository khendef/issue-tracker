<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['comment', 'issue_id', 'employee_id'];

    public function issue()
    {
        return $this->belongsTo(Issue::class);
    }

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}
