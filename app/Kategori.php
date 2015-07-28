<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model {

    protected $fillable = [ 'nama_kategori' ];

    protected $primaryKey = 'id_kategori';

    protected $tabel ='kategori';

//    public function doc()
//    {
//        return $this->hasMany('App\Doc');
//    }
}

