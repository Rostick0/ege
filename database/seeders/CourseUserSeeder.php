<?php

namespace Database\Seeders;

use App\Models\CourseUser;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $course_users = [
            [
                'course_id' => 1,
                'user_id' => 1,
            ],
            [
                'course_id' => 2,
                'user_id' => 2,
            ],
            [
                'course_id' => 3,
                'user_id' => 3,
            ],
        ];

        CourseUser::insert($course_users);
    }
}
