<?php

/*
|--------------------------------------------------------------------------|
| Application Routes                                                       |
|--------------------------------------------------------------------------|
*/
/*
|--------------------------------------|
| Index Route                          |
|--------------------------------------|
*/

Route::get('/', function() {
    
    return View::make('index');

});

/*
|--------------------------------------|
| Skater Routs                         |
|--------------------------------------|
*/


/*
|--------------------------------------|
| Team Routes                          |
|--------------------------------------|
*/


/*
|--------------------------------------|
| Club Routes                          |
|--------------------------------------|
*/

Route::get('/clubs', 'ClubController@index');

/*
|--------------------------------------------------------------------------
| Development and Debugging Routes
|--------------------------------------------------------------------------
*/

Route::get('/classes', function() {

    echo Pre::render(get_declared_classes(),'');
});

Route::get('/dbtest', function() {

    echo 'DB Test'.'<br><br>';
    echo 'Environment: '.App::environment().'<br>';

    $results = DB::select('SHOW DATABASES;');

    echo Pre::render($results);

});

Route::get('/debug', function() {

    echo '<pre>';

    echo '<h1>environment.php</h1>';
    $path   = base_path().'/environment.php';

    try {
        $contents = 'Contents: '.File::getRequire($path);
        $exists = 'Yes';
    }
    catch (Exception $e) {
        $exists = 'No. Defaulting to `production`';
        $contents = '';
    }

    echo "Checking for: ".$path.'<br>';
    echo 'Exists: '.$exists.'<br>';
    echo $contents;
    echo '<br>';

    echo '<h1>Environment</h1>';
    echo App::environment().'</h1>';

    echo '<h1>Debugging?</h1>';
    if(Config::get('app.debug')) echo "Yes"; else echo "No";

    echo '<h1>Database Config</h1>';
    print_r(Config::get('database.connections.mysql'));

    echo '<h1>Test Database Connection</h1>';
    try {
        $results = DB::select('SHOW DATABASES;');
        echo '<strong style="background-color:green; padding:5px;">Connection confirmed</strong>';
        echo "<br><br>Your Databases:<br><br>";
        print_r($results);
    } 
    catch (Exception $e) {
        echo '<strong style="background-color:crimson; padding:5px;">Caught exception: ', $e->getMessage(), "</strong>\n";
    }

    print_r(Input::all());

    echo '</pre>';

});


