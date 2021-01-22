<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    public function user(){
        // $profile = Profile::where('user_id', $this->id)->fist();
        return $this->belongsTo('App\Models\User');
    }
}
