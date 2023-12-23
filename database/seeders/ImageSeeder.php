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
            [
                'id' => 4,
                'name' => 'Математика',
                'width' => '836',
                'height' => '474',
                'path' => url()->current() . '/storage/image/kupili_onlayn_kurs_i_razocharovalis_1.jpg',
            ],
            [
                'id' => 5,
                'name' => 'Физика',
                'width' => '2048',
                'height' => '1271',
                'path' => url()->current() . '/storage/image/phisic.png',
            ],
            [
                'id' => 6,
                'name' => 'Информатика',
                'width' => '650',
                'height' => '433',
                'path' => url()->current() . '/storage/image/pre1_57.jpg',
            ],
            [
                'id' => 7,
                'name' => 'Математика 2',
                'width' => '650',
                'height' => '433',
                'path' => url()->current() . '/storage/image/reiting-online-school.jpg',
            ],
            [
                'id' => 8,
                'name' => 'Физика 2',
                'width' => '900',
                'height' => '900',
                'path' => url()->current() . '/storage/image/ph_emb.jpg',
            ],
            [
                'id' => 9,
                'name' => 'Информатика 2',
                'width' => '1060',
                'height' => '815',
                'path' => url()->current() . '/storage/image/onlineschoolbit.jpg',
            ]
        ];

        Image::insert($images);
    }
}
