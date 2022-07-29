<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curriculum extends Model
{
    use HasFactory;
    protected $guarded = ['id']; 

    public function modules()
    {
        return $this->hasMany(Module::class);
    }
    public function allModules()
    {
        return $this->modules();
    }
}
