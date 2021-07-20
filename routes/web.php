<?php

use App\Http\Controllers\GithubDeploymentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
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
    return view('home');
});

Route::get('about', function () {
    return view('about');
});

Route::get('gallery', function () {
    return view('gallery');
});

Route::get('contact', function () {
    return view('contact');
});

Route::post('contact/submit', function (Request $request){

    $input = $request->all();

    $data = [
        'name' => $input['name'],
        'email' => $input['email'],
        'mobile' => $input['mobile'],
        'subject' => $input['subject'] ?? 'New message from'.$input['name'],
        'description' => $input['description'],
    ];

    Mail::send('emails.contact-form', $data, static function ($message) use ($data) {
        $message->from($data['email'], $data['name']);
        $message->to('info@truegrowfarms.com');
        $message->replyTo('info@truegrowfarms.com');
        $message->subject($data['subject']);
    });

//    Session::flash('success', 'Deleted');
    return redirect()->back()->with('success', 'Your message has been sent, our customer representative will contact you via email');
});

//Github Deployment
Route::post('github/deploy', [GithubDeploymentController::class, 'deploy']);
