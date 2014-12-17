<?php

/*
|--------------------------------------------------------------------------|
| Club Controller                                                          |
|--------------------------------------------------------------------------|
*/

class ClubController extends \BaseController {

/*
|---------------------------------------|
| Support for Index Route               |
|                                       |
| GET /club --> index()                 |
|---------------------------------------|
*/
	public function index() {

		$clubs = Club::where('id','>',1)
			->orderBy('club_name')
			->get();
		
		return View::make('club_index')->with('clubs',$clubs);

	}

/*
|---------------------------------------|
| Create a New Club                     |
|                                       |
| GET /club/create --> create()         |
|---------------------------------------|
*/
	public function create() {

		return View::make('club_create');

	}

/*
|---------------------------------------|
| Store Club Data                       |
|                                       |
| POST /club --> store()                |
|---------------------------------------|
*/
	public function store() {

		$club = new Club;

		$club->club_name     = Input::get('club_name');
		$club->display_order = 1;
		$club->club_locality = Input::get('club_locality');
		$club->club_address1 = Input::get('club_address1');
		$club->club_address2 = Input::get('club_address2');
		$club->club_city     = Input::get('club_city');
		$club->club_state    = Input::get('club_state');
		$club->club_zip      = Input::get('club_zip');
		$club->club_website  = Input::get('club_website');

		$club->save();
		return Redirect::action('ClubController@index')->with('flash_message','The club added has been saved.');

	}

/*
|---------------------------------------|
| Display Particular Club Data          |
|                                       |
| GET /club/{id} --> show()             |
|---------------------------------------|
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
|---------------------------------------|
| Display for Edit Particular Club Data |
|                                       |
| GET /club/{id}/edit --> edit(id)      |
|---------------------------------------|
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
|---------------------------------------|
| Update Particular Club Data           |
|                                       |
| PUT /club/{id} --> update(id)         |
|---------------------------------------|
*/
	public function update($id) {

		try {
			$club = Club::findOrFail($id);
		}
		catch(Exception $e) {
			return Redirect::to('/club')->with('flash_message', 'Club not found');
		}

		$club->club_name     = Input::get('club_name');
		$club->display_order = 1;
		$club->club_locality = Input::get('club_locality');
		$club->club_address1 = Input::get('club_address1');
		$club->club_address2 = Input::get('club_address2');
		$club->club_city     = Input::get('club_city');
		$club->club_state    = Input::get('club_state');
		$club->club_zip      = Input::get('club_zip');
		$club->club_website  = Input::get('club_website');

		$club->save();

		return Redirect::action('ClubController@index')->with('flash_message','The club you updated has been saved.');

	}

/*
|---------------------------------------|
| Delete Data for a Particular Club     |
|                                       |
| DELETE /club/{id} --> destroy(id)     |
|---------------------------------------|
*/
	public function destroy($id) {

		try {
			$club = Club::findOrFail($id);
		}
		catch(Exception $e) {
			return Redirect::to('/club')->with('flash_message', 'The club you selected was not found');
		}

		DB::table('skaters')
			->where('club_id',$id)
			->update(array('club_id' => 1));

		Club::destroy($id);

		return Redirect::action('ClubController@index')->with('flash_message','The club you selected has been deleted.');

	}
}


