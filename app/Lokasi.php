<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lokasi extends Model
{
    protected $table = 'lokasi';
    protected $fillable = ['id','nama_lokasi'];

    public function buku()
    {
    	return $this->hasMany(Buku::class);
    }
}
