<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'language',
        'voice',
        'notification_preference',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
