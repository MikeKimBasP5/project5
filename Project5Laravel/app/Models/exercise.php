<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class exercise extends Model
{
    use HasFactory;


    public function User()
    {
        return $this->Hasmany(User::class);
    }
    public function performance()
    {
        return $this->hasMany(performance::class);
    }
}
