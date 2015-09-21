<?php

class Zone extends Eloquent {
	public $timestamps = false;
	protected $table = 'stadium_zones';

	public function stadium()
	{
		return $this->belongsTo('Stadium', 'stadium_id');
	}

	public static function findByStadium($stadium_id)
	{
		$zones = Zone::where('stadium_id', '=', $stadium_id)->get();

		return $zones;
	}
}