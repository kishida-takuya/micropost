<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Micropost extends Model
{
    protected $fillable = ['content'];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    //この投稿をお気に入りにしたユーザ
    public function getFavs()
    {
        return $this->belongsToMany(User::class, 'favorite', 'microposts_id', 'user_id')->withTimestamps();
    }
}
