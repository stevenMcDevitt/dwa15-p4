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

		$skaters = Skater::where('id','<>',0)
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

		return View::make('skater_create');

	}

/*
|--------------------------------------|
| Store Skater Data                    |
|--------------------------------------|
*/
	public function store() {

		$skater = new Skater;
		$skater->last_name = Input::get('last_name');
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
			$skater = Skater::findOrFail($id);
		}
		catch(Exception $e) {
			return Redirect::to('/skater')->with('flash_message', 'The skater you were seeking was not found');
		}

		return View::make('skater_edit')->with('skater', $skater);

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

		$skater->last_name = Input::get('last_name');
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


