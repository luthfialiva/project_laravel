<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model {

	protected $fillable = ['subject_id','subject_name', 'subject_type', 'name', 'user_id'];
    
	protected $table = 'activities';
	
	public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function subject()
    {
        return $this->morphTo();
    }

}
