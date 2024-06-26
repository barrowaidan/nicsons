<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comments extends Model
{
    use HasFactory;

    public function commentable(){
        return $this->morphTo();
    }

    public function replys(){
        return $this->hasMany(replys::class, "comment_id");
    }

}
