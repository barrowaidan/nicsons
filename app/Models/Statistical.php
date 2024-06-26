<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Statistical extends Model
{
    use HasFactory;

    protected $fillable = [
        'number',
        'text'
    ];
    
    public function photo(){
        return $this->morphMany(Photos::class, "photoable");
    }
}
