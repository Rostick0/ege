<?php

namespace App\Http\Controllers;

use App\Models\Homework;
use App\Http\Requests\StoreHomeworkRequest;
use App\Http\Requests\UpdateHomeworkRequest;

class HomeworkController extends Controller
{
    public function requestOnly()
    {
        if (auth()?->user()->role === 'teacher') {
            return [
                'mark',
                'answer',
                'answer_file_id',
            ];
        }

        return [
            'file',
            'comment',
            'lesson_id',
        ];
    }

    public function store(StoreHomeworkRequest $request)
    {
        Homework::create([
            ...$request->validated(),
            'student_id' => auth()->id(),
        ]);

        return redirect()->back();
    }

    public function update(UpdateHomeworkRequest $request, int $id)
    {
        Homework::findOrFail($id)->update([
            ...$request->validated(),
        ]);

        return redirect()->back();
    }

    public function destroy(int $id)
    {
        $homework = Homework::where([
            'id' => $id,
            'student_id' =>  auth()->id()
        ])->delete();

        

        return redirect()->back();
    }
}
