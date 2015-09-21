<?php

class Roster extends Eloquent {
	public $timestamps = false;
	protected $table = 'roster';

	public static function getPlayers()
	{
		$players = Roster::select(DB::raw('name, lastname, image, number, tb, birthday, YEAR(current_date)-YEAR(birthday) as age, birthplace, position_id, roster.foreign, reserve'))
			->where('active', '=', 1)->get();

		return $players;
	}

	public function position()
	{
		return $this->belongsTo('Position');
	}

}