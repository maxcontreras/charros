<?php

class HomeController extends BaseController {

	public function index()
	{
		$themeArray = Theme::getTheme();
		if(empty($themeArray)){
			$theme = 0;
		} else {
			$theme = $themeArray[0]->theme_id;
		}

		return View::make('layout.index')
			->with('theme', $theme);		#Load theme information based 

	}

	public function roster()
	{
		$themeArray = Theme::getTheme();
		if(empty($themeArray)){
			$theme = 0;
		} else {
			$theme = $themeArray[0]->theme_id;
		}

		return View::make('site.roster')
			->with('theme', $theme);
	}

	public function teamHistory()
	{
		$themeArray = Theme::getTheme();
		if(empty($themeArray)){
			$theme = 0;
		} else {
			$theme = $themeArray[0]->theme_id;
		}

		return View::make('site.history')
			->with('theme', $theme);
	}

	public function mascots()
	{
		$themeArray = Theme::getTheme();
		if(empty($themeArray)){
			$theme = 0;
		} else {
			$theme = $themeArray[0]->theme_id;
		}

		return View::make('site.mascots')
			->with('theme', $theme);
	}

	public function stadium()
	{
		$themeArray = Theme::getTheme();
		if(empty($themeArray)){
			$theme = 0;
		} else {
			$theme = $themeArray[0]->theme_id;
		}

		return View::make('site.stadium')
			->with('theme', $theme);
	}

	public function aboutUs()
	{
		$themeArray = Theme::getTheme();
		if(empty($themeArray)){
			$theme = 0;
		} else {
			$theme = $themeArray[0]->theme_id;
		}

		return View::make('site.about-us')
			->with('theme', $theme);
	}

	public function organizationChart()
	{
		$themeArray = Theme::getTheme();
		if(empty($themeArray)){
			$theme = 0;
		} else {
			$theme = $themeArray[0]->theme_id;
		}

		return View::make('site.organization-chart')
			->with('theme', $theme);
	}

	public function contact()
	{
		$themeArray = Theme::getTheme();
		if(empty($themeArray)){
			$theme = 0;
		} else {
			$theme = $themeArray[0]->theme_id;
		}

		return View::make('site.contact')
			->with('theme', $theme);
	}

	public function seasonSchedule()
	{
		$themeArray = Theme::getTheme();
		if(empty($themeArray)){
			$theme = 0;
		} else {
			$theme = $themeArray[0]->theme_id;
		}

		/*$games = Schedule::all();

		foreach($games as $game):
			echo '  { "date": '.$game->date.', "type": "regular", "title": '.$game->visitorTeam->name.' @ '.$game->localTeam->name.', "description": "Inicio de temporada 2015", "url": "" },';
	    endforeach;	
		*/
		
		return View::make('site.season-schedule')
			->with('theme', $theme);
	}

	public function playoffsSchedule()
	{
		$themeArray = Theme::getTheme();
		if(empty($themeArray)){
			$theme = 0;
		} else {
			$theme = $themeArray[0]->theme_id;
		}

		return View::make('site.season-schedule')
			->with('theme', $theme);
	}

	public function seasonTickets()
	{
		$themeArray = Theme::getTheme();
		if(empty($themeArray)){
			$theme = 0;
		} else {
			$theme = $themeArray[0]->theme_id;
		}

		return View::make('site.tickets')
			->with('theme', $theme);
	}

	public function firstRoundStatistics()
	{
		$themeArray = Theme::getTheme();
		if(empty($themeArray)){
			$theme = 0;
		} else {
			$theme = $themeArray[0]->theme_id;
		}

		return View::make('site.statistics')
			->with('theme', $theme);
	}

	public function secondRoundStatistics()
	{
		$themeArray = Theme::getTheme();
		if(empty($themeArray)){
			$theme = 0;
		} else {
			$theme = $themeArray[0]->theme_id;
		}

		return View::make('site.statistics')
			->with('theme', $theme);
	}

	public function playoffsStatistics()
	{
		$themeArray = Theme::getTheme();
		if(empty($themeArray)){
			$theme = 0;
		} else {
			$theme = $themeArray[0]->theme_id;
		}

		return View::make('site.statistics')
			->with('theme', $theme);
	}

	public function personalStatistics()
	{
		$themeArray = Theme::getTheme();
		if(empty($themeArray)){
			$theme = 0;
		} else {
			$theme = $themeArray[0]->theme_id;
		}

		return View::make('site.statistics')
			->with('theme', $theme);
	}

	public function news()
	{
		$themeArray = Theme::getTheme();
		if(empty($themeArray)){
			$theme = 0;
		} else {
			$theme = $themeArray[0]->theme_id;
		}

		return View::make('site.news')
			->with('theme', $theme);
	}

	public function opinion()
	{
		$themeArray = Theme::getTheme();
		if(empty($themeArray)){
			$theme = 0;
		} else {
			$theme = $themeArray[0]->theme_id;
		}

		return View::make('site.opinion')
			->with('theme', $theme);
	}

	public function boletin()
	{
		$themeArray = Theme::getTheme();
		if(empty($themeArray)){
			$theme = 0;
		} else {
			$theme = $themeArray[0]->theme_id;
		}
		
		return View::make('site.boletin')
			->with('theme', $theme);
	}
}
