<?php

class Stadium extends Eloquent {
	public $timestamps = false;
	protected $table = "stadiums";

	public static function zonesByStadium($stadium_id)
	{
		$zones = Stadium::where('stadiums.id', '=', $stadium_id)
			->join('stadium_zones', 'stadium_zones.stadium_id', '=', 'stadiums.id')
			->join('stadiumzone_price', 'stadiumzone_price.zone_id', '=', 'stadium_zones.id')
			->select(DB::raw('stadium_zones.stadium_id, stadiums.name as stadium, stadiumzone_price.zone_id, stadium_zones.name as zone, stadiumzone_price.id as price_id, stadiumzone_price.price, stadiumzone_price.gametype'))->get();

		return $zones; 
	}

}