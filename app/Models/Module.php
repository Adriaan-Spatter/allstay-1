<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    use HasFactory;
    protected $guarded = ['id']; 

    public function parent()
    {
        return $this->belongsTo(Curriculum::class);
    }

    public function lessons()
    {
        return $this->hasMany(Lesson::class);
    }
    public function allLessons()
    {
        return $this->lessons();
    }
    
    public function outcomes()
    {
        return $this->hasMany(Outcome::class);
    }
    public function allOutcomes()
    {
        return $this->outcomes();
    }
}
