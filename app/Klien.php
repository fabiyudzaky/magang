<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Website;
use App\Media;

class Klien extends Model
{
    //
    public function websites()
    {
        return $this->hasMany('App\Website');
    }

    public function medias()
    {
        return $this->hasMany('App\Website');
    }
}