<?php

namespace App\Models;

use App\Models\Chat;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ChatGroup extends Model
{
    use HasFactory;

    protected $fillable = [
        'chat_group_name',
    ];

    public function chats()
    {
        return $this->hasMany(Chat::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
