<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EmployeeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return 'Test Route';
});

//Routing with Parameters
Route::get('test/{id}', function ($id) {
    return 'Test:' . $id;
});

Route::get('posts/{post}/comments/{comment}', function ($postID,
$commentID) {

return 'Post:' . $postID . '<br>Comment:' . $commentID;
});

Route::get('member/{name?}', function ($name = null) {
    return 'Hello' . $name;
});

//Regular Expression
Route::get('category/{name}', function ($name) {
    return $name;
})->where('name', '[A-Za-z]+');

Route::get('group/{id}', function ($id) {
    return $id;
})->where('id','[0-9]+');

Route::get('product/{id}/{name}', function ($id, $name) {
    return 'Product ID:'.$id.'<br>Product name:'.$name;
})->where(['id' => '[0-9]+', 'name' => '[a-z]+']);

//Named Routes
Route::get('guest/showroom/data/{name?}',function
($name=null){
    return'Hello'.$name;
})->name('guestprofile');

//Route post,put,delete
Route::post('user/profile',function(){
    return'POST';
});

Route::put('user/profile',function(){
    return'PUT';
});

Route::delete('user/profile',function(){
    return'DELETE';
});

//Profile
Route::get('profile', [HomeController::class, 'showProfile']);

//Profile
Route::get('employees', [EmployeeController::class, 'get_all']);
