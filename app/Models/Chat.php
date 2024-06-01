<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    use HasFactory;

    protected $fillable = [
        'chat_group_id',
        'sender_id',
        'receiver_id',
        'message',
    ];

    public function chatGroup()
    {
        return $this->belongsTo(ChatGroup::class);
    }

    public function userSender()
    {
        return $this->belongsTo(User::class, 'sender_id');
    }

    public function userReceiver()
    {
        return $this->belongsTo(User::class, 'receiver_id');
    }
}
