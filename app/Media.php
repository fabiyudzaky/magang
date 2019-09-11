<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Klien;

class Media extends Model
{
    //
    public function kliens()
    {
        return $this->belongsTo('App\Klien', 'klien_id');
    }
}