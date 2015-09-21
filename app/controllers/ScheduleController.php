<?php

class ScheduleController extends BaseController {

	public function index()
	{
		return View::make('cms.schedule.index')
			->with('games', Schedule::paginate(15));
	}

	public function create()
	{
		return View::make('cms.schedule.form')
			->with('action', '/admin/schedule/save')
			->with('game', new Schedule)
			->with('teams', Team::all())
			->with('seasons', Season::all())
			->with('themes', Theme::all());

	}

	public function save()
	{
		$game = new Schedule;

		$game->game = Input::get('game');
		$game->date = Input::get('date');
		$game->gametype = Input::get('gametype');
		$game->localteam_id = Input::get('localteam_id');
		$game->visitorteam_id = Input::get('visitorteam_id');
		$game->season_id = Input::get('season_id');
		$game->theme_id = Input::get('theme_id');
		
		$game->save();


		return Redirect::to('/admin/schedule');

	}

	public function show($id)
	{
		return View::make('cms.schedule.show')
			->with('game', Schedule::find($id));
	}

	public function edit($id)
	{
		return View::make('cms.schedule.form')
			->with('action', '/admin/schedule/update')
			->with('game', Schedule::find($id))
			->with('teams', Team::all())
			->with('seasons', Season::all())
			->with('themes', Theme::all());
	}

	public function update()
	{
		$game = Schedule::find(Input::get('id'));

		$game->game = Input::get('game');
		$game->date = Input::get('date');
		$game->gametype = Input::get('gametype');
		$game->localteam_id = Input::get('localteam_id');
		$game->visitorteam_id = Input::get('visitorteam_id');
		$game->season_id = Input::get('season_id');
		$game->theme_id = Input::get('theme_id');
		
		$game->save();


		return Redirect::to('/admin/schedule/show/'.$game->id);
	}

	public function delete($id)
	{
		$game = Schedule::find($id);

		$game->active = 0;
		$game->save();

		return Redirect::to('/admin/schedule');
	}
}