<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Subject;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\ActivityController;


Route::get('/', function () {
    return view('home');
});


Route::get('/', function () {
    return view(view: 'nav.home');
})->name('welcome');


Route::get('/dashboard/{id?}', function ($id = null) {
    $user = $id ? User::find($id) : Auth::user(); 

    if (!$user) {
        abort(404); 
    }

    if ($user->role === 'admin') {
        $users = User::where('role', '!=', 'admin')->get();
        $subjects = Subject::where('sender_id', $user->id)
            ->orWhere('receiver_id', $user->id)
            ->get();
    } else {
        $users = User::where('id', $user->id)->get();
        $subjects = Subject::where('receiver_id', $user->id)
            ->orWhere('sender_id', $user->id)
            ->get();
    }

    return view('dashboard', compact('users', 'subjects'));
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::prefix('pages')->group(function () {
    
        Route::get('/', function () { return view('nav.home'); })->name('home');
        Route::get('/home', function () { return view('nav.home'); })->name('home');
        Route::get('/about', function () { return view('nav.about'); })->name('about');
        Route::get('/try', function () { return view('nav.try'); })->name('try');
        Route::get('/education', function () { return view('nav.education'); })->name('education');
        Route::get('/skills', function () { return view('nav.skills'); })->name('skills');
        Route::get('/projects', function () { return view('nav.projects'); })->name('projects');
        Route::get('/contact', function () { return view('nav.contact'); })->name('contact');
        Route::get('/blog', function () { return view('nav.blog'); })->name('blog');
        Route::get('/news', function () { return view('nav.news'); })->name('news');
        Route::get('/index', function () { return view('activities.index'); })->name('index');
});

Route::resource('subjects', SubjectController::class);



Route::get('/nav.news', function () {
    return view('nav.news');
});


//CLUBS AND ORGANIZATION

Route::get('/projects', function () {
    return view('nav.projects');
})->name('projects');

Route::get('/home', function () {
    return view('nav.home');
})->name('home');

Route::get('/blog', function () {
    return view('nav.blog'); // This is optional, for ID 3
})->name('blog');







