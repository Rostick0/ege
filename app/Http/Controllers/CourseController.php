<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Http\Requests\StoreCourseRequest;
use App\Http\Requests\UpdateCourseRequest;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::all();
    
        return view('pages.courses', compact('courses'));
    }
    
    public function show(int $id) {
        $course = Course::findOrFail($id);

        return view('pages.course', compact('course'));
    }
}
