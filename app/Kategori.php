<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table = 'kategori';
    protected $fillable = ['id','jenis_kategori'];

    public function buku()
    {
    	return $this->hasMany(Buku::class);
    }
}
