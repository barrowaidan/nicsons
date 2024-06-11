<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SocialMedia extends Model
{
    use HasFactory;

    protected $fillable = [
        'socialmediable_type',
        'socialmediable_id',
        'name',
        'link'
    ];

    public function socialmediable(){
        return $this->morphTo();
    }
}
