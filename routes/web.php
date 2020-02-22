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

Route::get('/finish-queues', 'FinishQueuesController@index');

Route::get('/dashboard', 'DashboardController@index');

Route::get('/vuln-add', 'VulnController@store');

Route::get('/home', 'HomeController@index');

Route::post('/submit-request', 'EmergencyRequestController@store');

Route::get('/request-queue', 'SubmitController@request');

Route::get('/submit-queue', 'SubmitController@submit');

Route::get('/mysite', 'ProofsController@site');
// Start of challenge one
Route::get('/test', 'ProofsController@test');
  
Route::get('/test-request', 'ProofsController@request');

// Route::get('/test-request', function () {
//     $name = request('name');
//     $city = request('city');
//     $age = request('age');
    
//     return view('test-request', [ 'name' => $name ]);
//     return view('test-request', [ 'city' => $city ]);
//     return view('test-request', [ 'age' => $age ]);
// });

Route::get('/test-request', function () {
    $name = request('name');
    $age = request('age');
    $city = request('city');

    return $name;
    return $age;
    return $city;
  });


// End of challenge one
// Start of Mikes Code
Route::get('/', function () {
    return view('welcome');
});

Route::get('/proofs', 'ProofsController@showall');

Route::get('/proofs/{projectid}', 'ProofsController@showall');

Route::get('/miles', 'TestController@miles');

Route::get('/luis', 'TestController@luis');


Route::get('{post}', function ($post) {
    return view("not-found", [
        'myRequest' => $post
    ]);
});



Route::get('/post/post1', function () {
    $name = "THIS IS POST 1 and I have double quotes";
    $title = "YOU ARE THE NOOB";
    $image = "img/3ixth5.jpg";

    return view("posts", ['name' => $name, 'title' => $title, 'image' => $image]);
});

Route::get('/post/post2', function () {
    $name = 'This is post 2 I have single quotes';
    $title = 'This is post 2 Bruh';
    $image = "3j57a7.jpg";

    return view("posts", ['name' => $name, 'title' => $title, 'image' => $image]);
});


Route::get('/post/{post}', function ($post) {
    return view("not-found", [
        'myRequest' => $post
    ]);
});



// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/proofs/{project}', 'ProofsController@show');

// Route::get('/{project}', function($projects){
    
//     return view("allprojects", [
//         'myProject' => $projects
//         ]);
// });

// Route::get('/proofs/project1', function(){
//     $projid = "billy123";
//     $projname = "Billy";
//     $projdesc = "This is billys bio";

//     return view("allprojects", [
//         'projid' => $projid,
//         'projname' => $projname,
//         'projdesc' => $projdesc
//     ]);
// });

// Route::get('/proofs', 'ProofsController@showall');

// Route::get('/isaiah', 'TestController@isaiah');

// Route::get('/jason', 'TestController@jason');

// Route::get('/miles', 'TestController@miles');

// Route::get('/dom', 'TestController@dom');
// // this is a wild card
// Route::get('/{post}', function($post){
//     // new blade file called "notfound"
//     // gets passed the uri segment though
//     // the $myRequest variable
//     return view("notfound", [
//         'myRequest' => $post
//         ]);
// });

// Route::get('/post/post1', function(){
//     $name = "Miles";
//     $title = "Hello Miles";
//     $image = "two.jpg";

//     return view("posts", [
//         'name' => $name,
//         'title' => $title,
//         'image' => $image
//     ]);
// });

// Route::get('/post/post2', function(){
//     $name = "Jason";
//     $title = "Hello Jason";
//     $image = "one.jpg";

//     return view("posts", [
//         'name' => $name,
//         'title' => $title,
//         'image' => $image
//     ]);
// });

// // this is a wild card
// Route::get('/post/{post}', function($post){
//     // new blade file called "notfound"
//     // gets passed the uri segment though
//     // the $myRequest variable
//     return view("notfound", [
//         'myRequest' => $post
//         ]);
// });
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
