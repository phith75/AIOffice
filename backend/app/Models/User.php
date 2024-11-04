<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
        'department',
    ];

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }

    public function messages()
    {
        return $this->hasMany(Message::class);
    }

    public function schedules()
    {
        return $this->hasMany(Schedule::class);
    }

    public function settings()
    {
        return $this->hasOne(Setting::class);
    }

    public function projects()
    {
        return $this->hasMany(Project::class);
    }

    public function interactions()
    {
        return $this->hasMany(Interaction::class);
    }
}
