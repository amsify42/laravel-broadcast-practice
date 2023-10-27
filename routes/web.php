<?php

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
    return view('login');
})->name('login');

Route::post('/', function () {
    $name  = Request::input('name');
    $email = Request::input('email');

    $user = \App\Models\User::where('email', $email)->first();
    if(!$user) {
        $user           = new \App\Models\User;
        $user->name     = $name;
        $user->email    = $email;
        $user->password = Hash::make('12345');
        $user->save();
    }
    Auth::login($user);
    return redirect('/chatroom');
});

Route::get('/logout', function() {
    Auth::logout();
    return redirect('/');
});

Route::get('/chatroom', function () {
    return view('chatroom')->with('messages', \App\Models\ChatRoom::all());
})->middleware('auth');

Route::post('/chatroom/message', function () {
    $message = Request::input('message');
    $chatRoom = new \App\Models\ChatRoom;
    $chatRoom->user_id = Auth::user()->id;
    $chatRoom->message = $message;
    $chatRoom->save();
    $chatRoom->load('user');
    event(new \App\Events\ChatRoomUpdated($chatRoom));
    return response()->json(['status' => 'success']);
})->middleware('auth');

// Route::get('/fire', function() {
//     $order = \App\Models\Order::find(1);
//     $order->status = 'done';
//     $order->save();
//     event(new \App\Events\OrderShipmentStatusUpdated($order));
//     //\App\Events\OrderShipmentStatusUpdated::dispatch(\App\Models\Order::find(1));
// });

// Route::get('/close', function () {
//     //return view('welcome');
//     return view('close');
// });