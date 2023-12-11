<?php


use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MeetingController;
use App\Http\Controllers\LoginController;




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


Route::get('dashboard',[DashboardController::class, 'index'])->name('dashboard.Index');

Route::get('/meetings/create', [MeetingController::class, 'create'])->name('meetings.create');
Route::get('/meetings/meetingCalender', [MeetingController::class, 'meetingCalender'])->name('meetings.meetingCalender');
Route::post('/meetings/store', [MeetingController::class, 'store'])->name('meetings.store');
Route::get('/meetings/show-code', [MeetingController::class, 'showMeetingCode'])->name('meetings.show-code');
Route::post('/meetings/show-calendar', [MeetingController::class, 'showCalendar'])->name('meetings.show-calendar');
Route::post('/meetings/choose-best-time', [MeetingController::class, 'chooseBestTime'])->name('meetings.choose-best-time');
Route::get('/meetings', [MeetingController::class, 'showMeetings'])->name('meetings.show');


//google takvime göre ayarla
Route::get('/login/google', [LoginController::class, 'redirectToGoogle'])->name('meetings.google-calender');
Route::get('/login/google/callback', [LoginController::class, 'handleGoogleCallback']);
