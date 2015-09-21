<?php 

class StadiumsController extends BaseController {
	
	public function index()
	{
		return View::make('cms.stadiums.index')
			->with('zones', Stadium::zonesByStadium(1));
	}

	public function editZonePrice($zoneprice_id)
	{
		return View::make('cms.stadiums.form')
			->with('zone', Zone::findByStadium($stadium_id))
			->with('action', '/admin/stadium/update-zoneprice'); 
	}

	public function deleteZonePrice($zone_id)
	{

	}	
}