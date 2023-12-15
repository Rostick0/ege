<?php

namespace App\Http\Controllers;

use App\Models\CourseUser;
use App\Http\Requests\StoreCourseUserRequest;
use App\Http\Requests\UpdateCourseUserRequest;

class CourseUserController extends Controller
{

    public function index()
    {
        //
    }

    public function store(StoreCourseUserRequest $request)
    {
        CourseUser::firstOrCreate([
            ...$request->validated(),
            'user_id' => auth()->id()
        ]);
    }

    public function destroy(int $id)
    {
        CourseUser::where('id', $id)
            ->where('user_id', auth()->id())
            ->delete();

        return back();
    }
}
