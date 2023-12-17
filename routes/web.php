<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\CourseUserController;
use App\Http\Controllers\HomeworkController;
use App\Http\Controllers\LessonController;
use App\Models\Course;
use App\Models\Homework;
use App\Models\Lesson;
use App\Models\User;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $teachers = User::where('role', 'teacher')->get();
    $lessons = Lesson::orderByDesc('id')->limit(6)->get();

    return view('pages.index', compact('teachers', 'lessons'));
});


Route::group([
    'middleware' => 'guest',
], function () {
    Route::get('login', function () {
        return view('pages.login');
    })->name('login');
    Route::post('login', [AuthController::class, 'login']);

    Route::get('register', function () {
        return view('pages.register');
    })->name('register');
    Route::post('register', [AuthController::class, 'register']);
});

Route::resource('course', CourseController::class)->only(['index', 'show']);
Route::resource('lesson', LessonController::class)->only(['index', 'show']);
Route::resource('course-user', CourseUserController::class)->only(['store', 'destroy']);
Route::resource('homework', HomeworkController::class)->only(['store', 'update', 'destroy']);

Route::get('teachers', function () {
    $teachers = User::where('role', 'teacher')->get();

    return view('pages.teachers', compact('teachers'));
});

Route::get('contact', function () {
    return view('pages.contact');
});

Route::group([
    'middleware' => 'auth'
], function () {
    Route::group([
        'prefix' => 'student'
    ], function () {
        Route::get('', function () {
            $lessons = Lesson::whereHas('course.courseUser', function ($query) {
                $query->where('user_id', auth()->id());
            })
                ->paginate(18);

            $courses = Course::all();

            $lessons_mark = Lesson::whereHas('myHomework', function ($query) {
                $query->where('status', 'marked');
            })
                ->whereHas('course.courseUser', function ($query) {
                    $query->where('user_id', auth()->id());
                })
                ->paginate(18);

            return view('pages.student.index', compact('lessons', 'lessons_mark', 'courses'));
        })->name('student');
    });

    Route::group([
        'prefix' => 'teacher'
    ], function () {
        Route::get('', function () {
            $homeworks = Homework::where('status', 'pending')
                ->whereHas('lesson.course.courseUser', function ($query) {
                    $query->where('user_id', auth()->id());
                })->paginate(18);

            $homeworks_marked = Homework::where('status', 'marked')
                ->whereHas('lesson.course.courseUser', function ($query) {
                    $query->where('user_id', auth()->id());
                })->paginate(18);

            return view('pages.teacher.index', compact('homeworks', 'homeworks_marked'));
        })->name('teacher');

        Route::get('homework/{id}', function (int $id) {
            $homework = Homework::findOrFail($id);

            return view('pages.teacher.homework', compact('homework'));
        });
    });
});
