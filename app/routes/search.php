<?php

Route::get('results', function(){
    $name = Input::get('name');
    $users = HireMe\Entities\User::where('full_name', 'LIKE', '%' . $name . '%')->take(20)->get();
    return Response::json($users);
});

Route::get('search', function(){
    return View::make('search');
});