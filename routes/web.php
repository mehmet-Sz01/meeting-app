<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\DefaultController;
use App\Http\Controllers\MeetingController;




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


Route::get('nedmin',[DefaultController::class, 'index'])->name('nedmin.Index');

Route::get('/meetings/create', [MeetingController::class, 'create'])->name('meetings.create');
Route::post('/meetings/store', [MeetingController::class, 'store'])->name('meetings.store');
Route::get('/meetings/show-code', [MeetingController::class, 'showMeetingCode'])->name('meetings.show-code');
Route::post('/meetings/show-calendar', [MeetingController::class, 'showCalendar'])->name('meetings.show-calendar');
Route::post('/meetings/choose-best-time', [MeetingController::class, 'chooseBestTime'])->name('meetings.choose-best-time');
