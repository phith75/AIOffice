<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Interaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'action',
        'input',
        'output',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
