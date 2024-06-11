<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class titles extends Model
{
    use HasFactory;
    protected $fillable = ["title"];

    public function Users(){
        return $this->hasMany(User::class, 'title_id');
    }
}
