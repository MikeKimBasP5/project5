<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class performance extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<string>
     */
    protected $fillable = ['user_id','date','startTime','finishTime','reps','exercise_id'];

    public function exercise()
    {
        return $this->belongsTo(exercise::class);
    }
    public function user()
    {
        return $this->belongsTo(user::class);
    }
}
