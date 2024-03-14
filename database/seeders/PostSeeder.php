<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'title' => 'test title',
            'content' => 'test content',
            'teacher' => 'test teacher',
            'atmosphere' => 'good',
            'career' => 'career1',
            'seminar_id' =>1,
            'isnumber' => true,
            'iscareer' => true,
            'isgroup' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('posts')->insert([
            'title' => 'test title2',
            'content' => 'test content2',
            'teacher' => 'test teacher2',
            'atmosphere' => 'good',
            'career' => 'career1',
            'seminar_id' =>1,
            'isnumber' => true,
            'iscareer' => true,
            'isgroup' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('posts')->insert([
            'title' => 'test title',
            'content' => 'test content2',
            'teacher' => 'test teacher2',
            'atmosphere' => 'good',
            'career' => 'career1',
            'seminar_id' =>2,
            'isnumber' => false,
            'iscareer' => true,
            'isgroup' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);
}
}