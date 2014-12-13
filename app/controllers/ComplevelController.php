<?php

/*
|--------------------------------------------------------------------------|
| Competition Level Controller                                             |
|--------------------------------------------------------------------------|
*/

class ComplevelController extends \BaseController {

/*
|---------------------------------------|
| Support for Index Route               |
|                                       |
| GET /complevel --> index()            |
|---------------------------------------|
*/
	public function index() {

		$complevels = Complevel::where('id','<>',1)
			->orderBy('order_level')
			->get();
		
		return View::make('complevel_index')->with('complevels',$complevels);

	}

/*
|---------------------------------------|
| Display Particular Competition Level  |
|                                       |
| GET /complevel/{id} --> show()        |
|---------------------------------------|
*/
	public function show($id) {

		try {
			$complevel = Complevel::findOrFail($id);
		}
		catch(Exception $e) {
			return Redirect::to('/complevel')->with('flash_message', 'The competition level you were seeking was not found');
		}

		return View::make('complevel_show')->with('complevel', $complevel);

	}

}


