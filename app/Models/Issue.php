<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\PrefixedIds\Models\Concerns\HasPrefixedId;

class Issue extends Model
{

    use HasPrefixedId;

    public function getPrefixedIdConfiguration(): array
    {
        return [
            'prefix' => 'Issue_',
            'attribute' => 'code',
        ];
    }
        protected $fillable = [
        'parent_id',
        'project_id',
        'employee_id',
        'title',
        'description',
        'status',
        'priority',
        'start_date',
        'finish_date',
    ];

    public function scopeOpen($query)
    {
        return $query->where('status', 'in progress');
    }
    
    public function scopeHighPriority($query)
    {
        return $query->where('priority', 'high');
    }
    public function parent()
    {
        return $this->belongsTo(Issue::class, 'parent_id');
    }

    public function subIssues()
    {
        return $this->hasMany(Issue::class, 'parent_id');
    }

    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }


    public function label()
    {
        return $this->belongsTo(Label::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }


}
