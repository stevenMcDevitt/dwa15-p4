<?php

/*
|--------------------------------------------------------------------------|
| Skater Controller                                                        |
|--------------------------------------------------------------------------|
*/

class SkaterController extends \BaseController {

/*
|--------------------------------------|
| Support for Index Route              |
|--------------------------------------|
*/
	public function index() {

		$skaters = Skater::with('testlevel')
			->where('id','<>',0)
			->orderBy('last_name')
			->get();
		
		return View::make('skater_index')->with('skaters',$skaters);

	}

/*
|--------------------------------------|
| Create a New Skater                  |
|--------------------------------------|
*/
	public function create() {

		try {
			$testlevels = Testlevel::getTestlevels();
			$clubs      = Club::getClubs();
			$teams      = Team::getTeams();
		}
		catch(Exception $e) {
			return Redirect::to('/skater')->with('flash_message', 'System data problem');
		}

		return View::make('skater_create')
					->with('testlevels',$testlevels)
					->with('clubs',$clubs)
					->with('teams',$teams);

	}

/*
|--------------------------------------|
| Store Skater Data                    |
|--------------------------------------|
*/
	public function store() {

		$skater = new Skater;

		$skater->last_name            = Input::get('last_name');
		$skater->first_name           = Input::get('first_name');
		$skater->date_of_birth        = Input::get('date_of_birth');
        $skater->usfsa_id             = Input::get('usfsa_id');

       	$skater->team_id              = Input::get('team_id');
       	$skater->club_id              = Input::get('club_id');
       	$skater->testlevel_id         = Input::get('testlevel_id');

        $skater->synchro_start_year   = Input::get('synchro_start_year');
        $skater->skating_start_year   = Input::get('skating_start_year');

        $skater->email                = Input::get('email');
        $skater->notes                = Input::get('notes');

		$skater->save();
		return Redirect::action('SkaterController@index')->with('flash_message','The skater added has been saved.');

	}

/*
|--------------------------------------|
| Display Particular Skater Data       |
|--------------------------------------|
*/
	public function show($id) {

		try {
			$skater = Skater::findOrFail($id);
		}
		catch(Exception $e) {
			return Redirect::to('/skater')->with('flash_message', 'The skater you were seeking was not found');
		}

		return View::make('skater_show')->with('skater', $skater);

	}

/*
|--------------------------------------|
| Display Particular Skater Data       |
|--------------------------------------|
*/
	public function edit($id) {

		try {
			$skater     = Skater::findOrFail($id);
			$testlevels = Testlevel::getTestlevels();
			$clubs      = Club::getClubs();
			$teams      = Team::getTeams();
		}
		catch(Exception $e) {
			return Redirect::to('/skater')->with('flash_message', 'The skater you were seeking was not found');
		}

		return View::make('skater_edit')
					->with('skater', $skater)
					->with('testlevels',$testlevels)
					->with('clubs',$clubs)
					->with('teams',$teams);

	}

/*
|--------------------------------------|
| Update Particular Skater Data        |
|--------------------------------------|
*/
	public function update($id) {

		try {
			$skater = Skater::findOrFail($id);
		}
		catch(Exception $e) {
			return Redirect::to('/skater')->with('flash_message', 'The skater you selected was not found');
		}

		$skater->last_name            = Input::get('last_name');
		$skater->first_name           = Input::get('first_name');
		$skater->date_of_birth        = Input::get('date_of_birth');
        $skater->usfsa_id             = Input::get('usfsa_id');

       	$skater->team_id              = Input::get('team_id');
       	$skater->club_id              = Input::get('club_id');
       	$skater->testlevel_id         = Input::get('testlevel_id');

        $skater->synchro_start_year   = Input::get('synchro_start_year');
        $skater->skating_start_year   = Input::get('skating_start_year');

        $skater->email                = Input::get('email');
        $skater->notes                = Input::get('notes');

		$skater->save();

		return Redirect::action('SkaterController@index')->with('flash_message','The skater you updated has been saved.');

	}

/*
|--------------------------------------|
| Display Particular Skater Data       |
|--------------------------------------|
*/
	public function destroy($id) {

		try {
			$skater = Skater::findOrFail($id);
		}
		catch(Exception $e) {
			return Redirect::to('/skater')->with('flash_message', 'The skater you selected was not found');
		}

		Skater::destroy($id);

		return Redirect::action('SkaterController@index')->with('flash_message','The skater you selected has been deleted.');

	}
}


