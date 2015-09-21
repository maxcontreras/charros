<?php

class Theme extends Eloquent {
	public $timestamps = false;

	public static function getTheme()
	{
		$theme = DB::table('theme_web')->whereRaw('DAYOFWEEK(current_date) = dayofweek')->get();

		return $theme;
	}
}