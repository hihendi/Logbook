<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Marketing extends Model
{

    protected $fillable = ['username', 'nama_pelanggan', 'alamat', 'paket_langganan'];
    public function Logbook()
    {
      return $this->hasMany('App/Logbook');

    }

    public function User()
    {
      return $this->belongsTo('App/User');
    }
}
