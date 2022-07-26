<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    protected $guarded = ['id']; 

    public function users()
    {
        return $this->hasMany(User::class);
    }
    public function allUsers()
    {
        return $this->users();
    }
}