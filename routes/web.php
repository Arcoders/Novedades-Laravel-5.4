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

use App\Course;

$courses = collect([
        new Course(['title' => 'OOP', 'premium' => true]),
        new Course(['title' => 'Primeros pasos con Laravel', 'premium' => false]),
        new Course(['title' => 'Git', 'premium' => true]),
        new Course(['title' => 'Laravel 5.4', 'premium' => false]),
]);

Route::get('/', function () {
    return view('welcome');
});

Route::get('courses', function () use ($courses) {

/*
    $premium = $courses->filter(function ($course) {
        return $course->premium;
    });

    $free = $courses->reject(function ($course) {
        return $course->premium;
    });
*/

/*
    $premium = $courses->filter->premium;
    $free = $courses->reject->premium;

*/

/*
    $courses->map->archive();
*/

/*
    $premium = $courses->filter->isPremium();
    $free = $courses->reject->isPremium();
*/

/*
    list($premium, $free) = $courses->partition(function ($course) {
        return $course->premium;
    });
*/

/*
    list($premium, $free) = $courses->partition->premium;
*/

    list($premium, $free) = $courses->partition->isPremium();


    dd($courses->toArray(), $premium->toArray(), $free->toArray());

});
