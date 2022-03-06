<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    protected $fillable = [
        'project_name',
        'language',
        'project_id',
        'lead_id'
    ];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    public function lead()
    {
        return $this->belongsTo(Lead::class);
    }

}
