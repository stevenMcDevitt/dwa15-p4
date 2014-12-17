<?php

/*
|--------------------------------------------------------------------------|
| Team Controller                                                          |
|--------------------------------------------------------------------------|
*/

class TeamController extends \BaseController {

/*
|---------------------------------------|
| Support for Index Route               |
|                                       |
| GET /team --> index()                 |
|---------------------------------------|
*/
	public function index() {

		$teams = Team::with('complevel')
			->where('id','>',1)
			->orderBy('team_name')
			->get();
		
		return View::make('team_index')->with('teams',$teams);

	}

/*
|---------------------------------------|
| Create a New Team                     |
|                                       |
| GET /team/create --> create()         |
|---------------------------------------|
*/
	public function create() {

		try {
			$complevels = Complevel::getComplevels();
		}
		catch(Exception $e) {
			return Redirect::to('/team')->with('flash_message', 'System data problem');
		}

		return View::make('team_create')
					->with('complevels',$complevels);

	}

/*
|---------------------------------------|
| Store Team Data                       |
|                                       |
| POST /team --> store()                |
|---------------------------------------|
*/
	public function store() {

		$team = new Team;

		$team->team_name            = Input::get('team_name');
		$team->display_order        = 1;
		$team->complevel_id         = Input::get('complevel_id');
		$team->program_notes        = Input::get('program_notes');
		$team->competition_schedule = Input::get('competition_schedule');

		$team->save();

		return Redirect::action('TeamController@index')->with('flash_message','The team added has been saved.');

	}

/*
|---------------------------------------|
| Display Particular Team Data          |
|                                       |
| GET /team/{id} --> show()             |
|---------------------------------------|
*/
	public function show($id) {

		try {
			$team    = Team::findOrFail($id);
			$skaters = Skater::getTeamSkaters($id);
		}
		catch(Exception $e) {
			return Redirect::to('/team')->with('flash_message', 'The team you were seeking was not found');
		}

		return View::make('team_show')
			->with('team', $team)
			->with('skaters', $skaters);

	}

/*
|---------------------------------------|
| Display for Edit Particular Team Data |
|                                       |
| GET /team/{id}/edit --> edit(id)      |
|---------------------------------------|
*/
	public function edit($id) {

		try {
			$team       = Team::findOrFail($id);
			$complevels = Complevel::getComplevels();
		}
		catch(Exception $e) {
			return Redirect::to('/team')->with('flash_message', 'The team you were seeking was not found');
		}

		return View::make('team_edit')
					->with('team', $team)
					->with('complevels',$complevels);

	}

/*
|---------------------------------------|
| Update Particular Team Data           |
|                                       |
| PUT /team/{id} --> update(id)         |
|---------------------------------------|
*/
	public function update($id) {

		try {
			$team = Team::findOrFail($id);
		}
		catch(Exception $e) {
			return Redirect::to('/team')->with('flash_message', 'Team not found');
		}

		$team->team_name            = Input::get('team_name');
		$team->display_order        = 1;
		$team->complevel_id         = Input::get('complevel_id');
		$team->program_notes        = Input::get('program_notes');
		$team->competition_schedule = Input::get('competition_schedule');

		$team->save();

		return Redirect::action('TeamController@index')->with('flash_message','The team you updated has been saved.');

	}

/*
|---------------------------------------|
| Delete Data for a Particular Team     |
|                                       |
| DELETE /team/{id} --> destroy(id)     |
|---------------------------------------|
*/
	public function destroy($id) {

		try {
			$team = Team::findOrFail($id);
		}
		catch(Exception $e) {
			return Redirect::to('/team')->with('flash_message', 'The team you selected was not found');
		}

		DB::table('skaters')
			->where('team_id',$id)
			->update(array('team_id' => 1));

		Team::destroy($id);

		return Redirect::action('TeamController@index')->with('flash_message','The team you selected has been deleted.');

	}
}

