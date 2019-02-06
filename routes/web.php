<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

/*Route::get('/home', 'HomeController@index')->name('home');*/


Route::get('/', function () {
    return view('welcome');
});

Route::get('/about-us', function () {
    return view('content.about-us');
});

Route::get('/sign-in', function () {
    return view('content.sign-in');
});

Route::get('/cart', function () {
    return view('content.cart');
});

/*Route::get('/cart', 'CartController@index');*/

/*Route::get('/checkout', function () {
    return view('content.checkout');
});*/



Route::get('/editor', 'EditorController@index', function () {
    return view('content.editor');
});
Route::post('/editor',  ['as' => 'editor.post', 'uses' => 'EditorController@editorPost']);


Route::get('/imprint', function () {
    return view('content.imprint');
});

Route::get('/conditions', function () {
    return view('content.conditions');
});

Route::get('/customer-service', function () {
    return view('content.customer-service');
});

/*Route::get('/user', function () {
    return view('content.user');
});*/

/*Route::get('/user',  ['as' => 'users.user', 'uses' => 'UserController@index']);
Route::get('/user/{user}',  ['as' => 'users.edit', 'uses' => 'UserController@edit']);*/

Route::middleware('auth')->group(function() {

    Route::get('/user', ['as' => 'users.edit', 'uses' => 'UserController@edit']);

    Route::patch('/user/update', ['as' => 'users.update', 'uses' => 'UserController@update']);

    Route::get('/checkout', ['as' => 'content.checkout', 'uses' => 'UserController@editAdress']);

    Route::patch('/checkout/update', ['as' => 'content.updateAdress', 'uses' => 'UserController@updateAdress']);

});


/*Route::patch('/user/{user}/update',  ['as' => 'users.update', 'uses' => 'UserController@update']);*/

Route::middleware('admin')->group(function(){

    Route::get('/admin', function () {
        return view('admin');
    });


    Route::group(
        [
            'prefix' => 'bodyparts',
        ], function () {

        Route::get('/', 'BodypartsController@index')
            ->name('bodyparts.bodypart.index');

        Route::get('/create','BodypartsController@create')
            ->name('bodyparts.bodypart.create');

        Route::get('/show/{bodypart}','BodypartsController@show')
            ->name('bodyparts.bodypart.show')
            ->where('id', '[0-9]+');

        Route::get('/{bodypart}/edit','BodypartsController@edit')
            ->name('bodyparts.bodypart.edit')
            ->where('id', '[0-9]+');

        Route::post('/', 'BodypartsController@store')
            ->name('bodyparts.bodypart.store');

        Route::put('bodypart/{bodypart}', 'BodypartsController@update')
            ->name('bodyparts.bodypart.update')
            ->where('id', '[0-9]+');

        Route::delete('/bodypart/{bodypart}','BodypartsController@destroy')
            ->name('bodyparts.bodypart.destroy')
            ->where('id', '[0-9]+');

    });

    Route::group(
        [
            'prefix' => 'bricks',
        ], function () {

        Route::get('/', 'BricksController@index')
            ->name('bricks.brick.index');

        Route::get('/create','BricksController@create')
            ->name('bricks.brick.create');

        Route::get('/show/{brick}','BricksController@show')
            ->name('bricks.brick.show')
            ->where('id', '[0-9]+');

        Route::get('/{brick}/edit','BricksController@edit')
            ->name('bricks.brick.edit')
            ->where('id', '[0-9]+');

        Route::post('/', 'BricksController@store')
            ->name('bricks.brick.store');

        Route::put('brick/{brick}', 'BricksController@update')
            ->name('bricks.brick.update')
            ->where('id', '[0-9]+');

        Route::delete('/brick/{brick}','BricksController@destroy')
            ->name('bricks.brick.destroy')
            ->where('id', '[0-9]+');

    });

    Route::group(
        [
            'prefix' => 'orders',
        ], function () {

        Route::get('/', 'OrdersController@index')
            ->name('orders.order.index');

        Route::get('/create','OrdersController@create')
            ->name('orders.order.create');

        Route::get('/show/{order}','OrdersController@show')
            ->name('orders.order.show')
            ->where('id', '[0-9]+');

        Route::get('/{order}/edit','OrdersController@edit')
            ->name('orders.order.edit')
            ->where('id', '[0-9]+');

        Route::post('/', 'OrdersController@store')
            ->name('orders.order.store');

        Route::put('order/{order}', 'OrdersController@update')
            ->name('orders.order.update')
            ->where('id', '[0-9]+');

        Route::delete('/order/{order}','OrdersController@destroy')
            ->name('orders.order.destroy')
            ->where('id', '[0-9]+');

    });

    Route::group(
        [
            'prefix' => 'eyes',
        ], function () {

        Route::get('/', 'EyesController@index')
            ->name('eyes.eye.index');

        Route::get('/create','EyesController@create')
            ->name('eyes.eye.create');

        Route::get('/show/{eye}','EyesController@show')
            ->name('eyes.eye.show')
            ->where('id', '[0-9]+');

        Route::get('/{eye}/edit','EyesController@edit')
            ->name('eyes.eye.edit')
            ->where('id', '[0-9]+');

        Route::post('/', 'EyesController@store')
            ->name('eyes.eye.store');

        Route::put('eye/{eye}', 'EyesController@update')
            ->name('eyes.eye.update')
            ->where('id', '[0-9]+');

        Route::delete('/eye/{eye}','EyesController@destroy')
            ->name('eyes.eye.destroy')
            ->where('id', '[0-9]+');

    });

    Route::group(
        [
            'prefix' => 'ears',
        ], function () {

        Route::get('/', 'EarsController@index')
            ->name('ears.ear.index');

        Route::get('/create','EarsController@create')
            ->name('ears.ear.create');

        Route::get('/show/{ear}','EarsController@show')
            ->name('ears.ear.show')
            ->where('id', '[0-9]+');

        Route::get('/{ear}/edit','EarsController@edit')
            ->name('ears.ear.edit')
            ->where('id', '[0-9]+');

        Route::post('/', 'EarsController@store')
            ->name('ears.ear.store');

        Route::put('ear/{ear}', 'EarsController@update')
            ->name('ears.ear.update')
            ->where('id', '[0-9]+');

        Route::delete('/ear/{ear}','EarsController@destroy')
            ->name('ears.ear.destroy')
            ->where('id', '[0-9]+');

    });

    Route::group(
        [
            'prefix' => 'noses',
        ], function () {

        Route::get('/', 'NosesController@index')
            ->name('noses.nose.index');

        Route::get('/create','NosesController@create')
            ->name('noses.nose.create');

        Route::get('/show/{nose}','NosesController@show')
            ->name('noses.nose.show')
            ->where('id', '[0-9]+');

        Route::get('/{nose}/edit','NosesController@edit')
            ->name('noses.nose.edit')
            ->where('id', '[0-9]+');

        Route::post('/', 'NosesController@store')
            ->name('noses.nose.store');

        Route::put('nose/{nose}', 'NosesController@update')
            ->name('noses.nose.update')
            ->where('id', '[0-9]+');

        Route::delete('/nose/{nose}','NosesController@destroy')
            ->name('noses.nose.destroy')
            ->where('id', '[0-9]+');

    });

    Route::group(
        [
            'prefix' => 'mouths',
        ], function () {

        Route::get('/', 'MouthsController@index')
            ->name('mouths.mouth.index');

        Route::get('/create','MouthsController@create')
            ->name('mouths.mouth.create');

        Route::get('/show/{mouth}','MouthsController@show')
            ->name('mouths.mouth.show')
            ->where('id', '[0-9]+');

        Route::get('/{mouth}/edit','MouthsController@edit')
            ->name('mouths.mouth.edit')
            ->where('id', '[0-9]+');

        Route::post('/', 'MouthsController@store')
            ->name('mouths.mouth.store');

        Route::put('mouth/{mouth}', 'MouthsController@update')
            ->name('mouths.mouth.update')
            ->where('id', '[0-9]+');

        Route::delete('/mouth/{mouth}','MouthsController@destroy')
            ->name('mouths.mouth.destroy')
            ->where('id', '[0-9]+');

    });

    Route::group(
        [
            'prefix' => 'tails',
        ], function () {

        Route::get('/', 'TailsController@index')
            ->name('tails.tail.index');

        Route::get('/create','TailsController@create')
            ->name('tails.tail.create');

        Route::get('/show/{tail}','TailsController@show')
            ->name('tails.tail.show')
            ->where('id', '[0-9]+');

        Route::get('/{tail}/edit','TailsController@edit')
            ->name('tails.tail.edit')
            ->where('id', '[0-9]+');

        Route::post('/', 'TailsController@store')
            ->name('tails.tail.store');

        Route::put('tail/{tail}', 'TailsController@update')
            ->name('tails.tail.update')
            ->where('id', '[0-9]+');

        Route::delete('/tail/{tail}','TailsController@destroy')
            ->name('tails.tail.destroy')
            ->where('id', '[0-9]+');

    });

    Route::group(
        [
            'prefix' => 'shoes',
        ], function () {

        Route::get('/', 'ShoesController@index')
            ->name('shoes.shoe.index');

        Route::get('/create','ShoesController@create')
            ->name('shoes.shoe.create');

        Route::get('/show/{shoe}','ShoesController@show')
            ->name('shoes.shoe.show')
            ->where('id', '[0-9]+');

        Route::get('/{shoe}/edit','ShoesController@edit')
            ->name('shoes.shoe.edit')
            ->where('id', '[0-9]+');

        Route::post('/', 'ShoesController@store')
            ->name('shoes.shoe.store');

        Route::put('shoe/{shoe}', 'ShoesController@update')
            ->name('shoes.shoe.update')
            ->where('id', '[0-9]+');

        Route::delete('/shoe/{shoe}','ShoesController@destroy')
            ->name('shoes.shoe.destroy')
            ->where('id', '[0-9]+');

    });




});

/*
Route::group(
    [
        'prefix' => 'bodyparts',
    ], function () {

    Route::get('/', 'BodypartsController@index')
        ->name('bodyparts.bodypart.index');

    Route::get('/create','BodypartsController@create')
        ->name('bodyparts.bodypart.create');

    Route::get('/show/{bodypart}','BodypartsController@show')
        ->name('bodyparts.bodypart.show')
        ->where('id', '[0-9]+');

    Route::get('/{bodypart}/edit','BodypartsController@edit')
        ->name('bodyparts.bodypart.edit')
        ->where('id', '[0-9]+');

    Route::post('/', 'BodypartsController@store')
        ->name('bodyparts.bodypart.store');

    Route::put('bodypart/{bodypart}', 'BodypartsController@update')
        ->name('bodyparts.bodypart.update')
        ->where('id', '[0-9]+');

    Route::delete('/bodypart/{bodypart}','BodypartsController@destroy')
        ->name('bodyparts.bodypart.destroy')
        ->where('id', '[0-9]+');

});

Route::group(
    [
        'prefix' => 'bricks',
    ], function () {

    Route::get('/', 'BricksController@index')
        ->name('bricks.brick.index');

    Route::get('/create','BricksController@create')
        ->name('bricks.brick.create');

    Route::get('/show/{brick}','BricksController@show')
        ->name('bricks.brick.show')
        ->where('id', '[0-9]+');

    Route::get('/{brick}/edit','BricksController@edit')
        ->name('bricks.brick.edit')
        ->where('id', '[0-9]+');

    Route::post('/', 'BricksController@store')
        ->name('bricks.brick.store');

    Route::put('brick/{brick}', 'BricksController@update')
        ->name('bricks.brick.update')
        ->where('id', '[0-9]+');

    Route::delete('/brick/{brick}','BricksController@destroy')
        ->name('bricks.brick.destroy')
        ->where('id', '[0-9]+');

});

Route::group(
    [
        'prefix' => 'orders',
    ], function () {

    Route::get('/', 'OrdersController@index')
        ->name('orders.order.index');

    Route::get('/create','OrdersController@create')
        ->name('orders.order.create');

    Route::get('/show/{order}','OrdersController@show')
        ->name('orders.order.show')
        ->where('id', '[0-9]+');

    Route::get('/{order}/edit','OrdersController@edit')
        ->name('orders.order.edit')
        ->where('id', '[0-9]+');

    Route::post('/', 'OrdersController@store')
        ->name('orders.order.store');

    Route::put('order/{order}', 'OrdersController@update')
        ->name('orders.order.update')
        ->where('id', '[0-9]+');

    Route::delete('/order/{order}','OrdersController@destroy')
        ->name('orders.order.destroy')
        ->where('id', '[0-9]+');

});

Route::group(
    [
        'prefix' => 'eyes',
    ], function () {

    Route::get('/', 'EyesController@index')
        ->name('eyes.eye.index');

    Route::get('/create','EyesController@create')
        ->name('eyes.eye.create');

    Route::get('/show/{eye}','EyesController@show')
        ->name('eyes.eye.show')
        ->where('id', '[0-9]+');

    Route::get('/{eye}/edit','EyesController@edit')
        ->name('eyes.eye.edit')
        ->where('id', '[0-9]+');

    Route::post('/', 'EyesController@store')
        ->name('eyes.eye.store');

    Route::put('eye/{eye}', 'EyesController@update')
        ->name('eyes.eye.update')
        ->where('id', '[0-9]+');

    Route::delete('/eye/{eye}','EyesController@destroy')
        ->name('eyes.eye.destroy')
        ->where('id', '[0-9]+');

});

Route::group(
    [
        'prefix' => 'ears',
    ], function () {

    Route::get('/', 'EarsController@index')
        ->name('ears.ear.index');

    Route::get('/create','EarsController@create')
        ->name('ears.ear.create');

    Route::get('/show/{ear}','EarsController@show')
        ->name('ears.ear.show')
        ->where('id', '[0-9]+');

    Route::get('/{ear}/edit','EarsController@edit')
        ->name('ears.ear.edit')
        ->where('id', '[0-9]+');

    Route::post('/', 'EarsController@store')
        ->name('ears.ear.store');

    Route::put('ear/{ear}', 'EarsController@update')
        ->name('ears.ear.update')
        ->where('id', '[0-9]+');

    Route::delete('/ear/{ear}','EarsController@destroy')
        ->name('ears.ear.destroy')
        ->where('id', '[0-9]+');

});

Route::group(
    [
        'prefix' => 'noses',
    ], function () {

    Route::get('/', 'NosesController@index')
        ->name('noses.nose.index');

    Route::get('/create','NosesController@create')
        ->name('noses.nose.create');

    Route::get('/show/{nose}','NosesController@show')
        ->name('noses.nose.show')
        ->where('id', '[0-9]+');

    Route::get('/{nose}/edit','NosesController@edit')
        ->name('noses.nose.edit')
        ->where('id', '[0-9]+');

    Route::post('/', 'NosesController@store')
        ->name('noses.nose.store');

    Route::put('nose/{nose}', 'NosesController@update')
        ->name('noses.nose.update')
        ->where('id', '[0-9]+');

    Route::delete('/nose/{nose}','NosesController@destroy')
        ->name('noses.nose.destroy')
        ->where('id', '[0-9]+');

});

Route::group(
    [
        'prefix' => 'mouths',
    ], function () {

    Route::get('/', 'MouthsController@index')
        ->name('mouths.mouth.index');

    Route::get('/create','MouthsController@create')
        ->name('mouths.mouth.create');

    Route::get('/show/{mouth}','MouthsController@show')
        ->name('mouths.mouth.show')
        ->where('id', '[0-9]+');

    Route::get('/{mouth}/edit','MouthsController@edit')
        ->name('mouths.mouth.edit')
        ->where('id', '[0-9]+');

    Route::post('/', 'MouthsController@store')
        ->name('mouths.mouth.store');

    Route::put('mouth/{mouth}', 'MouthsController@update')
        ->name('mouths.mouth.update')
        ->where('id', '[0-9]+');

    Route::delete('/mouth/{mouth}','MouthsController@destroy')
        ->name('mouths.mouth.destroy')
        ->where('id', '[0-9]+');

});

Route::group(
    [
        'prefix' => 'tails',
    ], function () {

    Route::get('/', 'TailsController@index')
        ->name('tails.tail.index');

    Route::get('/create','TailsController@create')
        ->name('tails.tail.create');

    Route::get('/show/{tail}','TailsController@show')
        ->name('tails.tail.show')
        ->where('id', '[0-9]+');

    Route::get('/{tail}/edit','TailsController@edit')
        ->name('tails.tail.edit')
        ->where('id', '[0-9]+');

    Route::post('/', 'TailsController@store')
        ->name('tails.tail.store');

    Route::put('tail/{tail}', 'TailsController@update')
        ->name('tails.tail.update')
        ->where('id', '[0-9]+');

    Route::delete('/tail/{tail}','TailsController@destroy')
        ->name('tails.tail.destroy')
        ->where('id', '[0-9]+');

});

Route::group(
    [
        'prefix' => 'shoes',
    ], function () {

    Route::get('/', 'ShoesController@index')
        ->name('shoes.shoe.index');

    Route::get('/create','ShoesController@create')
        ->name('shoes.shoe.create');

    Route::get('/show/{shoe}','ShoesController@show')
        ->name('shoes.shoe.show')
        ->where('id', '[0-9]+');

    Route::get('/{shoe}/edit','ShoesController@edit')
        ->name('shoes.shoe.edit')
        ->where('id', '[0-9]+');

    Route::post('/', 'ShoesController@store')
        ->name('shoes.shoe.store');

    Route::put('shoe/{shoe}', 'ShoesController@update')
        ->name('shoes.shoe.update')
        ->where('id', '[0-9]+');

    Route::delete('/shoe/{shoe}','ShoesController@destroy')
        ->name('shoes.shoe.destroy')
        ->where('id', '[0-9]+');

});*/


Route::get('/threejs', function () {
    return view('content.threejs');
});



