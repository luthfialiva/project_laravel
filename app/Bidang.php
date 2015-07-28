<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Bidang extends Model {

    protected $fillable = [ 'nama_bidang' ];

    protected $primaryKey = 'id_bidang';

//    public function doc()
//    {
//        return $this->hasMany('App\Doc');
//    }
}
