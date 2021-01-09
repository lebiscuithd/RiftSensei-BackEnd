<?php

namespace App\Models;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ad extends Model
{
    use HasFactory;

    protected $fillable = [
    'user_id',
    'coaching_date',
    'description',
    'pending',
    'finished',
    'ad_rating',
    'duration',
    'hourly_rate',
    'rated',
    'student_id',
    'student_rank',
    'comments',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
