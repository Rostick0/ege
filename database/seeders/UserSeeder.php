<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'Анна Николаевна',
                'email' => 'annanikola@mail.ru',
                'password' => Hash::make('annanikola@mail.ru'),
                'role' => 'teacher',
                'about' => 'Обучаю людей физике с 2014 года',
                'image_id' => 1,
                'exp' => '2014-01-10'
            ],
            [
                'name' => 'Вероника Алексеевна',
                'email' => 'nika2000@mail.ru',
                'password' => Hash::make('nika2000@mail.ru'),
                'role' => 'teacher',
                'about' => 'Обучаю людей физике с 2014 года',
                'image_id' => 2,
                'exp' => '2019-05-02'
            ],
            [
                'name' => 'Сергей Васильевич',
                'email' => 'servv31@mail.ru',
                'password' => Hash::make('servv31@mail.ru'),
                'role' => 'teacher',
                'about' => 'Обучаю людей физике с 2014 года',
                'image_id' => 3,
                'exp' => '2018-08-03'
            ]
        ];

        User::insert($users);
    }
}
