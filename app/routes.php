<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
/*
Route::get('/', function()
{
	return View::make('hello');
});
*/

Route::get('/', function()
{
	return 'Laravel Dokku Hello World';
});

Route::get('dbtest', function()
{
	$testData = DB::table('test')->get();
	return 'The following was found in the "test" table: <br>'.join('<br>', array_map(function($item){
		return $item->data;
	},$testData));
});

Route::get('env', function(){
	$environment = App::environment();
	return print_r($environment,1);
});