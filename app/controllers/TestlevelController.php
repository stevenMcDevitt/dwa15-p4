<?php

/*
|--------------------------------------------------------------------------|
| Test Level Controller                                                    |
|--------------------------------------------------------------------------|
*/

class TestlevelController extends \BaseController {

/*
|---------------------------------------|
| Support for Index Route               |
|                                       |
| GET /testlevel --> index()            |
|---------------------------------------|
*/
	public function index() {

		$testlevels = Testlevel::where('id','<>',0)
			->orderBy('id')
			->get();
		
		return View::make('testlevel_index')->with('testlevels',$testlevels);

	}

/*
|---------------------------------------|
| Display Particular Test Level Data    |
|                                       |
| GET /testlevel/{id} --> show()        |
|---------------------------------------|
*/
	public function show($id) {

		try {
			$testlevel = Testlevel::findOrFail($id);
		}
		catch(Exception $e) {
			return Redirect::to('/testlevel')->with('flash_message', 'The test level you were seeking was not found');
		}

		return View::make('testlevel_show')->with('testlevel', $testlevel);

	}

}


