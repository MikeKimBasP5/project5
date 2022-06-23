<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class performance extends Model
{
    use HasFactory;
    public function exercise()
    {
        return $this->belongsTo(exercise::class);
    }
    public function user()
    {
        return $this->belongsTo(user::class);
    }
}
