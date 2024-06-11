<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class events extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'text',
    ]; 

    public function photo(){
        return $this->morphMany(Photos::class, "photoable");
    }
    
    public function comments(){
        return $this->morphMany(comments::class, "commentable");
    }
}
