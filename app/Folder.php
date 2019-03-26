<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Folder extends Model
{

    protected $fillable = [
        'title', 'dsc', 'icon','user_id',
    ];

    public function folders()
    {
        return $this->hasMany('App\Folder');
    }
}
