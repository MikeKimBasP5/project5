<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class exercise extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<string>
     */
    protected $fillable = ['titleEN','titleNL','instructionEN','instructionNL','media'];


    public function User()
    {
        return $this->Hasmany(User::class);
    }
    public function performance()
    {
        return $this->hasMany(performance::class);
    }
}
