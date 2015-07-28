<?php namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Doc extends Model {
    
    use RecordsActivity;

    protected $fillable = [
        'id',
        'id_doc',
        'nama_doc',
        'id_user',
        'id_kategori',
        'id_bidang',
        'start_date',
        'untill_date',
        'warn_date',
        'remarks',
        'ket'
    ];

    // protected $primaryKey = 'id_doc';

    protected $table = 'docs';

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function kategori()
    {
        return $this->belongsTo('App\Kategori');
    }

    public function bidang()
    {
        return $this->belongsTo('App\Bidang');
    }
    
    public function activity()
    {
        return $this->hasMany('App\Activity')->with(['user', 'subject'])->latest();
    }
}
