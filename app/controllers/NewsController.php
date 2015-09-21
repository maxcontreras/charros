<?php

class NewsController extends BaseController {

	public function index(){
		return View::make('cms.news.index')
			->with('news', Report::paginate(10));
	}

	public function create()
	{
		return View::make('cms.news.form')
			->with('action', '/admin/news/save')
			->with('new', new Report);
	}

	public function save()
	{
		$new = new Report;

		$new->title = Input::get('title');
		$new->description = Input::get('description');
		$new->date = date('Y-m-d');
		$new->place = Input::get('place');
		$new->content = Input::get('content');
		$new->active = 1;

		$new->save();

		return Redirect::to('admin/news');
	}

	public function show($id)
	{
		return View::make('cms.news.show')
			->with('new', Report::find($id));
	}

	public function edit($id)
	{
		return View::make('cms.news.form')
			->with('action', '/admin/news/update')
			->with('new', Report::find($id));
	}

	public function update()
	{
		$new = Report::find(Input::get('id'));

		$new->title = Input::get('title');
		$new->description = Input::get('description');
		$new->date = date('Y-m-d');
		$new->place = Input::get('place');
		$new->content = Input::get('content');
		$new->active = 1;

		$new->save();

		return Redirect::to('admin/news/show/'.$new->id);
	}

	public function delete($id)
	{
		$new = Report::find($id);

		$new->active = 0;

		$new->save();

		return Redirect::to('admin/news');
	}

	public function opinions()
	{
		return View::make('cms.opinions.index')
			->with('opinions', Report::paginate(10));
	}

	public function createOpinion()
	{
		return View::make('cms.opinions.form')
			->with('action', '/admin/opinions/save')
			->with('opinion', new Report);
	}

	public function saveOpinion()
	{
		$opinion = new Report;

		$opinion->title = Input::get('title');
		$opinion->description = Input::get('description');
		$opinion->date = date('Y-m-d');
		$opinion->place = Input::get('place');
		$opinion->content = Input::get('content');
		$opinion->autor = Input::get('autor');
		$opinion->active = 1;

		$opinion->save();

		return Redirect::to('admin/opinions');
	}

	public function showOpinion($id)
	{
		return View::make('cms.opinions.show')
			->with('opinion', Report::find($id));
	}

	public function editOpinion($id)
	{
		return View::make('cms.opinions.form')
			->with('action', '/admin/opinions/update')
			->with('opinion', Report::find($id));
	}

	public function updateOpinion()
	{
		$opinion = Report::find(Input::get('id'));

		$opinion->title = Input::get('title');
		$opinion->description = Input::get('description');
		$opinion->date = date('Y-m-d');
		$opinion->place = Input::get('place');
		$opinion->content = Input::get('content');
		$opinion->autor = Input::get('autor');
		$opinion->active = 1;

		$opinion->save();

		return Redirect::to('admin/opinions/show/'.$opinion->id);
	}

	public function deleteOpinion($id)
	{
		$opinion = Report::find($id);

		$opinion->active = 0;

		$opinion->save();

		return Redirect::to('admin/opinions');
	}
	
}