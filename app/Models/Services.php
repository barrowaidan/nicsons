<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'text',
        'image',
    ];

    public function photo(){
        return $this->morphMany(Photos::class, "photoable");
    }
    
    public function comments(){
        return $this->morphMany(comments::class, "commentable");
    }
}
