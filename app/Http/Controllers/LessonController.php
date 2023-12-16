<?php

namespace App\Http\Controllers;

use App\Models\Lesson;
use App\Http\Requests\StoreLessonRequest;
use App\Http\Requests\UpdateLessonRequest;
use App\Models\Course;
use Illuminate\Http\Request;

class LessonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $course = Course::findOrFail($request->course_id);
        $lessons = Lesson::where('course_id', $request->course_id);

        return view('pages.lessons', compact('course', 'lessons'));
    }

    public function show(int $id)
    {
        $lesson = Lesson::findOrFail($id);

        return view('pages.lesson', compact('lesson'));
    }
}
