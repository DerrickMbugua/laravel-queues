<?php

use App\Jobs\SendEmail;
use App\Mail\SendEmailTest;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('send-email', function () {
    $data['email'] = "derrickmbugua50@gmail.com";
   SendEmail::dispatch($data)->delay(now()->addSeconds(5));
  //  dispatch(new SendEmail($data))->onQueue('processing');
});
