<?php

namespace App\Http\Controllers;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = [
            [
                'id' => 1,
                'title' => 'Memulai Perjalanan dengan Laravel',
                'excerpt' => 'Laravel adalah framework PHP yang powerful dan elegant. Dalam artikel ini, kita akan membahas dasar-dasar Laravel dan bagaimana memulai project pertama Anda.',
                'date' => '15 Januari 2024',
                'author' => 'Admin',
                'slug' => 'memulai-perjalanan-dengan-laravel'
            ],
            [
                'id' => 2,
                'title' => 'Tips dan Trik Blade Templating',
                'excerpt' => 'Blade adalah template engine yang sangat powerful di Laravel. Pelajari tips dan trik untuk membuat template yang lebih efisien dan mudah dibaca.',
                'date' => '12 Januari 2024',
                'author' => 'Developer',
                'slug' => 'tips-dan-trik-blade-templating'
            ],
            [
                'id' => 3,
                'title' => 'Database Migration dan Seeding',
                'excerpt' => 'Migration memungkinkan kita untuk mengelola struktur database dengan mudah. Artikel ini membahas cara menggunakan migration dan seeding di Laravel.',
                'date' => '10 Januari 2024',
                'author' => 'Admin',
                'slug' => 'database-migration-dan-seeding'
            ],
            [
                'id' => 4,
                'title' => 'Eloquent ORM: Relationship yang Powerful',
                'excerpt' => 'Eloquent ORM menyediakan cara yang elegant untuk berinteraksi dengan database. Pelajari berbagai jenis relationship dan cara menggunakannya.',
                'date' => '8 Januari 2024',
                'author' => 'Developer',
                'slug' => 'eloquent-orm-relationship-yang-powerful'
            ],
            [
                'id' => 5,
                'title' => 'Authentication dan Authorization di Laravel',
                'excerpt' => 'Keamanan adalah hal yang sangat penting dalam aplikasi web. Laravel menyediakan sistem authentication dan authorization yang robust dan mudah digunakan.',
                'date' => '5 Januari 2024',
                'author' => 'Security Expert',
                'slug' => 'authentication-dan-authorization-di-laravel'
            ],
            [
                'id' => 6,
                'title' => 'API Development dengan Laravel',
                'excerpt' => 'Membangun API yang scalable dan secure menggunakan Laravel. Pelajari best practices untuk API development dan dokumentasi yang baik.',
                'date' => '3 Januari 2024',
                'author' => 'API Developer',
                'slug' => 'api-development-dengan-laravel'
            ]
        ];

        return view('blogs.index', compact('blogs'));
    }
}
