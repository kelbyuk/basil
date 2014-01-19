<?php
	//protected $fillable = array('user_id','cat_id','filename','tag','thumbnail');

class Photo extends Eloquent {
	public function cat()
	{
		return $this->belongsTo('Cat');
	}
}