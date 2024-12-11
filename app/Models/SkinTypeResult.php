<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SkinTypeResult extends Model
{
    use HasFactory;

    protected $table = 'skin_type_result'; 

    protected $fillable = [
        'skin_type', // the calculated skin type based on the total score
        'test_result', // the total score
        'user_id', // the ID of the user who took the test
    ];

    // If you have any relationships with other models (e.g., User), define them here
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
