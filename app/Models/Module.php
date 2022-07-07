<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    use HasFactory;
    protected $guarded = ['id']; 
    public function lessons()
    {
        return $this->hasMany(Lesson::class);
    }
    public function outcomes()
    {
        return $this->hasMany(Outcome::class);
    }
}
