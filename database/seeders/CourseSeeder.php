<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $courses = [
            [
                'title' => 'Физика',
                'plan' => '',
                'price' => 18000,
                'duration' => '60',
                'short_description' => '',
                'description' => '<p>Подготовка к ЕГЭ по физике на Exam-Physic.com включает в себя изучение всех основных тем, представленных в экзамене. Мы используем передовые методики обучения, которые помогут вам лучше понять и усвоить материал. Наши курсы также помогут вам развить навыки решения задач, что является важным аспектом успешной сдачи ЕГЭ.</p><p>Мы предлагаем индивидуальные занятия с опытными преподавателями, которые будут следить за вашим прогрессом и корректировать программу обучения в соответствии с вашими потребностями.</p>',
                'image_id' => 4,
            ],
            [
                'title' => 'Математика',
                'plan' => '',
                'price' => 16000,
                'duration' => '50',
                'short_description' => '',
                'description' => '',
                'image_id' => 5,
            ],
            [
                'title' => 'Информатика',
                'plan' => '',
                'price' => 16000,
                'duration' => '50',
                'short_description' => '',
                'description' => '',
                'image_id' => 6,
            ]
        ];

        Course::insert($courses);
    }
}
