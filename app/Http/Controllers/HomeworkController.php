<?php

namespace App\Http\Controllers;

use App\Models\Homework;
use App\Http\Requests\StoreHomeworkRequest;
use App\Http\Requests\UpdateHomeworkRequest;
use App\Utils\FileUtil;

class HomeworkController extends Controller
{
    public function store(StoreHomeworkRequest $request)
    {
        $file_id = FileUtil::upload($request->file('file'));

        Homework::firstOrCreate([
            'lesson_id' => $request->lesson_id,
            'student_id' => auth()->id(),
        ], [
            ...$request->validated(),
            'file_id' => $file_id,
        ]);

        return redirect()->back();
    }

    public function update(UpdateHomeworkRequest $request, int $id)
    {
        $data = [...$request->validated()];

        if (auth()->user()->role === 'teacher') {
            if ($request->hasFile('answer_file')) $data['answer_file_id'] = FileUtil::upload($request->file('answer_file'));

            $data['status'] = 'marked';
        } else if (auth()->user()->role === 'student' && $request->hasFile('file')) {
            $data['file_id'] = FileUtil::upload($request->file('file'));
        }

        Homework::findOrFail($id)->update([
            ...$request->validated(),
        ]);

        return redirect()->back();
    }

    public function destroy(int $id)
    {
        $homework = Homework::where([
            'id' => $id,
            'student_id' => auth()->id()
        ])->delete();

        return redirect()->back();
    }
}
