<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Requests extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'weight',
        'distance',
        'service_id',
        'phone_no',
    ];

    public function Service(){
        return $this->belongsTo(Services::class);
    }
}
