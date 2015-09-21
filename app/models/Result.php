<?php

class Result extends Eloquent {
	public $timestamps = false;
	protected $table = 'game_results';

	public function game()
	{
		return $this->belongsTo('Schedule', 'seasongame_id');
	}

}