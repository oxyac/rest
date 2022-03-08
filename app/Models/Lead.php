<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'level',
        'phone',
        'email'
    ];

    public function department(){
        return $this->belongsTo(Department::class);
    }
}
