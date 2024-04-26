<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feed extends Model
{
    public $timestamps = false;

    use HasFactory;

    protected $fillable = [
        'user_id',
        'feed',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    
}
