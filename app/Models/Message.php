<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Message extends Model
{
    use HasFactory;

    protected $fillable = [
        'body'
    ];

    protected $appends = [
        'selfOwned'
    ];

    public function getSelfOwnedAttribute()
    {
        return $this->user_id === auth()->user()->id;
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
