<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class testimonials extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'title',
        'text'
    ];

    public function photo(){
        return $this->morphMany(Photos::class, "photoable");
    }
}
