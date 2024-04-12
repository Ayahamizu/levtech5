<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FacultySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('faculties')->insert([
                'name' => '法学部',
            ]);
        DB::table('faculties')->insert([
                'name' => '文学部',
            ]);
        DB::table('faculties')->insert([
                'name' => '経営学部',
            ]);
        DB::table('faculties')->insert([
                'name' => '国際文化学部',
            ]);
        DB::table('faculties')->insert([
                'name' => 'GIS',
            ]);
        DB::table('faculties')->insert([
                'name' => '人間環境学部',
            ]);
        DB::table('faculties')->insert([
                'name' => 'キャリアデザイン学部',
            ]);
        
    }
}
