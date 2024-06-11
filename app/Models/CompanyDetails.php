<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyDetails extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'phone_no',
        'email',
        'physical_address',
        'post_address' ,
        'map_location',
        'working_hours',
        'logo',
        'motivation',
        'about_company',
        'mission',
        'vision',
        'core_value',
        'connection',
        'commitment',
        'creativity',
        'slide1',
        'slide2',
        'slide3',
    ];

    public function socialMedia(){
        return $this->morphMany(SocialMedia::class, "socialmediable");
    }
}
