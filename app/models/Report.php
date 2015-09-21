<?php

class Report extends Eloquent {
	public $timestamps = false;
	protected $table = 'news';

	public static function opinions()
	{
		$opinions = Report::whereRaw('autor IS NOT NULL')->get();

		return $opinions;
	}

}