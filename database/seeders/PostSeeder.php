<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facedes\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = [
        [
            'name'=> 'Pasta Kapelini',
            'image'=> 'img/image-01.jpg',
        ],
        [
            'name'=> 'Pasta Kapulaga',
            'image'=> 'img/image-02.jpg',
        ],
        [
            'name'=> 'Pasta Jinten',
            'image'=> 'img/image-03.jpg',
        ],
        [
            'name'=> 'Pasta Saus Padang',
            'image'=> 'img/image-04.jpg',
        ],
        [
            'name'=> 'Pasta Carbonara',
            'image'=> 'img/image-05.jpg',
        ],
        [
            'name'=> 'Pasta Saus Tomat',
            'image'=> 'img/image-06.jpg',
        ],
        [
            'name'=> 'Pasta Pedas',
            'image'=> 'img/image-07.jpg',
        ],
        [
            'name'=> 'Pasta Spesial',
            'image'=> 'img/image-08.jpg',
        ]
        ];

        \DB::table('posts')->insert($posts);
    }
}
