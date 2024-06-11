<?php
namespace App\Helpers;
use App\Models\User;
use Carbon\Carbon;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class Setting{
    public static function getUserImage($user_id)
    {
       $image = User::select('image')->where('id', $user_id)->first();
       if (!is_null($image)) {
           $imageUrl = url('storage/user_uploaded_images/'.$image->image);
           return $imageUrl;
       }
       else {
           $defaultimageUrl = url('style/media/avatars/blank.png');
           return $defaultimageUrl;
       }
    }

    public static function getUserRoleName($user_id)
    {
        $user = User::find($user_id);
        $role_name = $user->getRoleNames();

        if(Count($role_name) != 0){
            return $role_name[0];
        }
        else{
            return ;
        }
    }

    public static function lowertoupper($string)
    {
      $str = $string;
      $str1 = strtoupper($str); 
      $str2 = ucfirst($str1); 
      return $str2;
    }

    public static function getDate($date){
        $date_format = Carbon::parse($date);
        $date = $date_format->day.', '.$date_format->format('F').', '.$date_format->year;

        return $date;
    }
    
    public static function getDayDate($date){
        $date_format = Carbon::parse($date);
        $date_components = [
            'day' => ($date_format->day),
            'month' => $date_format->format('F'),
            'year' => $date_format->year,
        ];

        return $date_components;
    }
}