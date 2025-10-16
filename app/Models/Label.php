<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Label extends Model
{
    protected $fillable = [
        'title',
    ];

    public function issues()
    {
        return $this->hasMany(Issue::class);
    }
}
