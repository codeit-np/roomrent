<?php

use App\Http\Controllers\RoomController;
use App\Models\Room;
use App\Models\RoomImage;
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
    $rooms = Room::orderby('id','desc')->get();
    return view('frontend.pages.index',compact('rooms'));
});

Route::get('/roomdetails/{id}',function($id){
    $room = Room::find($id);
    $images = RoomImage::where('room_id',$id)->get();
    return view('frontend.pages.roomdetail',compact('images','room'));
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Admin
Route::resource('rooms',RoomController::class);