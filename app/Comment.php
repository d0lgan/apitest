<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function to_user()
    {
        return $this->belongsTo(User::class, 'to_user_id', 'id');
    }

    public function likes() {
        return $this->hasMany(Like::class);
    }
}
