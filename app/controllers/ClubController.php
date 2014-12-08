<?php

/*
|--------------------------------------------------------------------------|
| Club Controller                                                          |
|--------------------------------------------------------------------------|
*/

class ClubController extends \BaseController {

/*
|--------------------------------------|
| Support for Index Route              |
|--------------------------------------|
*/
	public function index() {

		$clubs = Club::where('id','<>',0)
			->orderBy('club_name')
			->get();
		
		return View::make('club_index')->with('clubs',$clubs);

	}

/*
|--------------------------------------|
| Create a New Club                    |
|--------------------------------------|
*/
	public function create() {

		return View::make('club_create');

	}

/*
|--------------------------------------|
| Store Club Data                      |
|--------------------------------------|
*/
	public function store() {

		$club = new Club;
		$club->club_name = Input::get('name');
		$club->save();
		return Redirect::action('ClubController@index')->with('flash_message','The club added has been saved.');

	}

/*
|--------------------------------------|
| Display Particular Club Data         |
|--------------------------------------|
*/
	public function show($id) {

		try {
			$club = Club::findOrFail($id);
		}
		catch(Exception $e) {
			return Redirect::to('/club')->with('flash_message', 'The club you were seeking was not found');
		}

		return View::make('club_show')->with('club', $club);

	}

/*
|--------------------------------------|
| Display Particular Club Data         |
|--------------------------------------|
*/
	public function edit($id) {

		try {
			$club = Club::findOrFail($id);
		}
		catch(Exception $e) {
			return Redirect::to('/club')->with('flash_message', 'The club you were seeking was not found');
		}

		return View::make('club_edit')->with('club', $club);

	}

/*
|--------------------------------------|
| Update Particular Club Data          |
|--------------------------------------|
*/
	public function update($id) {

		try {
			$club = Club::findOrFail($id);
		}
		catch(Exception $e) {
			return Redirect::to('/club')->with('flash_message', 'Club not found');
		}

		$club->club_name     = Input::get('club_name');
		$club->club_locality = Input::get('club_locality');
		
		$club->save();

		return Redirect::action('ClubController@index')->with('flash_message','The club you updated has been saved.');

	}

/*
|--------------------------------------|
| Display Particular Club Data         |
|--------------------------------------|
*/
	public function destroy($id) {

		try {
			$club = Club::findOrFail($id);
		}
		catch(Exception $e) {
			return Redirect::to('/club')->with('flash_message', 'The club you selected was not found');
		}

		Club::destroy($id);

		return Redirect::action('ClubController@index')->with('flash_message','The club you selected has been deleted.');

	}
}


