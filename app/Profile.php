<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{


	// protected $fillable = [
 //        'name'
 //        'location',
 //        'bio',
 //        'twitter_username',
 //        'github_username',
 //        'user_profile_bg',
 //        'avatar',
 //        'avatar_status',
 //    ];


    public function user()
    {
        return $this->belongsTo('App\User');
    }

}
