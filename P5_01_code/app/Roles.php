<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class roles extends Model
{
    protected $fillable = ['role'];

    public function user()
    {
        return $this->belongsToMany(User::class);
    }
}
