<?php

namespace App\Http\Controllers;

use App\Models\Lesson;
use App\Http\Requests\StoreLessonRequest;
use App\Http\Requests\UpdateLessonRequest;
use Illuminate\Http\Request;

class LessonController extends Controller
{
    public function index(Request $request)
    {
        $lessons = Lesson::query();

        if ($request->title) $lessons->where('title', 'LIKE', '%' . $request->title . '%');
        if ($request->course_id) $lessons->where('course_id', $request->course_id);

        $lessons = $lessons->paginate(18);

        return view('pages.lessons', compact('lessons'));
    }

    public function show(int $id)
    {
        $lesson = Lesson::findOrFail($id);

        return view('pages.lesson', compact('lesson'));
    }
}
