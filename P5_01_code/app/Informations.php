<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Informations extends Model
{
    protected $fillable = ['first_name', 'last_name', 'address', 'zip', 'city', 'telephone_number', 'shadow_email', 'discord', 'image', 'description', 'twitter', 'instagram', 'facebook', 'snapchat', 'twitch', 'youtube', 'mixer', 'website', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getRouteKeyName()
    {
        return 'twitch';
    }
}
