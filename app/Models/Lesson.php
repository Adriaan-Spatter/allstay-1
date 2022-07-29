<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;
    protected $guarded = ['id']; 

    public function parent()
    {
        return $this->belongsTo(Module::class);
    }
    
    public function questions()
    {
        return $this->hasMany(Question::class);
    }
    public function allQuestions()
    {
        return $this->questions();
    }
}
