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


    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreHomeworkRequest $request)
    {
        Homework::create([
            ...$request->validated(),
            'student_id' => auth()->id(),
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateHomeworkRequest $request, int $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        //
    }
}
