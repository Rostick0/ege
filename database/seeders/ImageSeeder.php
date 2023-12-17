<?php

namespace Database\Seeders;

use App\Models\Image;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $images = [
            [
                'id' => 1,
                'name' => 'Репетитор 1',
                'width' => '400',
                'height' => '400',
                'path' => url()->current() . '/storage/image/teacher-1.jpg',
            ],
            [
                'id' => 2,
                'name' => 'Репетитор 2',
                'width' => '400',
                'height' => '400',
                'path' => url()->current() . '/storage/image/teacher-2.jpg',
            ],
            [
                'id' => 3,
                'name' => 'Репетитор 3',
                'width' => '400',
                'height' => '400',
                'path' => url()->current() . '/storage/image/teacher-3.jpg',
            ],
        ];

        Image::insert($images);
    }
}
