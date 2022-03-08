<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'language',
    ];

    public function project()
    {
        return $this->hasOne(Project::class);
    }

    public function lead()
    {
        return $this->hasOne(Lead::class);
    }

    public function programmers(){
        return $this->belongsToMany('App\Models\Programmer');
    }




}
