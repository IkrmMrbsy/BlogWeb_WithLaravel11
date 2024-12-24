<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('posts')->insert([
            [
                'title' => 'Judul Post Pertama',
                'author' => 'Penulis Satu',
                'slug' => Str::slug('Judul Post Pertama'),
                'body' => 'Ini adalah konten dari post pertama. Sangat menarik dan informatif.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Judul Post Kedua',
                'author' => 'Penulis Dua',
                'slug' => Str::slug('Judul Post Kedua'),
                'body' => 'Ini adalah konten dari post Kedua. Sangat menarik dan informatif.',
                'created_at' => now(),
                'updated_at' => now(),
            ]
            ]);
    }
}
