<?php

class JsonController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Web Services Controller
	|--------------------------------------------------------------------------
	|
	| In this controller you will find the all functions related with the connections  
	| to external systems p.e N15's webservices or iOS and Android connections
	| In order to see the routes:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function index()
	{
		return View::make('site.index');
	}

	public function getNews()
	{
		$news = Report::all();

		return json_encode($news);
	}

	public function paginateNews()
	{
		$rawNews = Report::all();
		
		$news = $rawNews->get();

		/*return json_encode($news);*/
		echo '<pre>';
		print_r($news);
		echo '</pre>';	
	}

	public function getOpinions()
	{
		$opinions = Report::opinions();

		echo json_encode($opinions);
	}

	public function getRoster()
	{
		$roster = Roster::getPlayers();

		/*foreach($roster as $player):
			$player->position = $player->position->name;
			$player->imagepath = "http://charros.vanillasys.com/public/images/roster/".$player->image;
		endforeach;*/
		foreach($roster as $player):
			$array[] = array('fullname' => $player->name." ".$player->lastname, 'tb'=>$player->tb, 'position' => $player->position->name, 'image'=>'http://charros.vanillasys.com/public/images/roster/'.$player->image, 'birthdate' => $player->birthday, 'age' => $player->age, 'birthplace' => $player->birthplace, 'status'=> $player->reserve == 1 ? 'Reserva' : 'Activo');
		endforeach;

		return json_encode($roster);
	}

	/*public function getRoster()
	{
		$positions = Position::all();
		$roster = Roster::getPlayers();

		foreach($positions as $position):
			foreach($roster as $player):
				if($position->id == $player->position_id){
					$array[$position->name][] = array('fullname' => $player->name." ".$player->lastname, 'tb'=>$player->tb, 'image'=>'http://charros.vanillasys.com/public/images/roster/'.$player->image, 'birthdate' => $player->birthday, 'age' => $player->age, 'birthplace' => $player->birthplace, 'status'=> $player->reserve == 1 ? 'Reserva' : 'Activo');
				}
			endforeach;			
		endforeach;	

		return json_encode($array);
 
	}*/

	public function getSchedule()
	{
		$games = Schedule::all();

		foreach($games as $game):
			$game->local_team = $game->localTeam->name;
			$game->visitor_team = $game->visitorTeam->name;
		endforeach;

		json_encode($games);

		echo $games;
	}

	public function getStadiumZonePrice()
	{
		$zones = Stadium::zonesByStadium(1);

		echo json_encode($zones);
	}

	public function service()
	{
		$themeArray = Theme::getTheme();
		if(empty($themeArray)){
			$theme = 0;
		} else {
			$theme = $themeArray[0]->theme_id;
		}

		return View::make('service')	
			->with('theme', $theme);
	}

}
