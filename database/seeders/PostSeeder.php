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
            'content' => 'test content',
            'teacher' => 'test teacher',
            'seminar_id' =>1,
             'iscareer' => true,
            'isgroup' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('posts')->insert([
            'content' => 'test content2',
            'teacher' => 'test teacher2',
            'seminar_id' =>1,
             'iscareer' => true,
            'isgroup' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('posts')->insert([
            'content' => 'test content2',
            'teacher' => 'test teacher2',
            'seminar_id' =>2,
             'iscareer' => true,
            'isgroup' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);
}
}