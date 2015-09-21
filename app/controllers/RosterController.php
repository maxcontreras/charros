<?php

class RosterController extends BaseController {
	
	public function index()
	{
		return View::make('cms.roster.index')
			->with('players', Roster::paginate(10));
	}

	public function create()
	{
		return View::make('cms.roster.form')
			->with('action', '/admin/roster/save')
			->with('player', new Roster)
			->with('positions', Position::all());
	}

	public function save()
	{
		$player = new Roster;

		$player->name = Input::get('name');
		$player->lastname = Input::get('lastname');
		$player->position_id = Input::get('position_id');
		$player->tb = Input::get('tb');
		$player->birthday = Input::get('birthday');
		$player->birthplace = Input::get('birthplace');
		$player->reserve = Input::get('reserve');
		$player->foreign = Input::get('foreign');

		$player->save();

		return Redirect::to('/admin/roster');
	}

	public function show($id)
	{
		return View::make('cms.roster.show')
			->with('player', Roster::find($id));
	}

	public function edit($id)
	{
		return View::make('cms.roster.form')
			->with('action', '/admin/roster/update')
			->with('player', Roster::find($id))
			->with('positions', Position::all());
	}

	public function update()
	{
		$player = Roster::find(Input::get('id'));

		$player->name = Input::get('name');
		$player->lastname = Input::get('lastname');
		$player->position_id = Input::get('position_id');
		$player->tb = Input::get('tb');
		$player->birthday = Input::get('birthday');
		$player->birthplace = Input::get('birthplace');
		$player->reserve = Input::get('reserve');
		$player->foreign = Input::get('foreign');

		$player->save();

		return Redirect::to('/admin/roster/show/'.$player->id);
	}

	public function delete($id)
	{
		$player = Roster::find($id);

		$player->active = 0;

		$player->save();

		return Redirect::to('admin/roster');
	}
}