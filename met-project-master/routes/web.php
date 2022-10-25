<?php


use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

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

Route::get('sitemap', function () {
    $sitemap = App::make('sitemap');
    $sitemap->add(URL::to('/'), '2020-08-25T20:10:00+02:00', '1.0', 'daily');
    $sitemap->add(URL::to('/all_subject'), '2020-08-26T12:30:00+02:00', '0.9', 'weekly');
    $sitemap->add(URL::to('/class'), '2020-08-26T12:30:00+02:00', '0.9', 'monthly');
    $subjects = \App\Models\Subject::latest()->get();
    foreach ($subjects as $subject) {
        $sitemap->add($subject->slug, $subject->created_at, '.5', 'monthly');
    }
    return $sitemap->render('xml');
});

Route::get('/cu', function () {
    $text = "/storage/uploads/img/dDnYm-2020-10-27.png";
    return ;
    Storage::disk('public')->delete('/uploads/img/dDnYm-2020-10-27.png');

//    $user = new \App\Models\User();
//    $user->password = Hash::make('12345');
//    $user->email = 'admin@admin.com';
//    $user->name = 'mane';
//    $user->save();
//    return $user;
});

Route::prefix('/admin/')->group(function () {
    Route::get('/', function () {
        return view('admin.index');
    });
    Route::get('subjects/pdf', [\App\Http\Controllers\Admin\SubjectsController::class, 'makePdf'])->name('subjects.pdf');
    Route::resource('subjects', 'App\Http\Controllers\Admin\SubjectsController');
});


Route::get('/', 'App\Http\Controllers\IndexController@index')->name('index');

Route::get('/subject/{class}/{book}', 'App\Http\Controllers\IndexController@subject')->name('subject');
Route::get('/all_subject', 'App\Http\Controllers\IndexController@allSubject')->name('all_subject');

Route::get('/class', function () {
    return view('pages.class');
})->name('class');

Route::get('/for-pupil', function () {
    return view('pages.info');
})->name('info');


Route::get('/theme/{class}/{book}/{theme}', 'App\Http\Controllers\IndexController@theme')->name('theme');
