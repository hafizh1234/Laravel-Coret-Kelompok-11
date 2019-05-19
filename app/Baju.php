<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Baju extends Model
{
    protected $table='shirts';

    public $primaryKey='id';

    public function pemesanan(){
        return $this->hasMany('App\Pemesanan');  }
}
