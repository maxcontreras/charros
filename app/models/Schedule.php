<?php

class Schedule extends Eloquent {
	public $timestamps = false;
	protected $table = 'season_schedule';

	public function localTeam()
	{
		return $this->belongsTo('Team', 'localteam_id');
	}

	public function visitorTeam()
	{
		return $this->belongsTo('Team', 'visitorteam_id');
	}

	public function stadium()
	{
		return $this->belongsTo('Stadium');
	}

	public function season()
	{
		return $this->belongsTo('Season');
	}

	public function theme()
	{
		return $this->belongsTo('Theme');	
	}
}