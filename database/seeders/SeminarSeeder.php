<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SeminarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('seminars')->insert([
            'name' => 'test seminar',
            'faculty_id' => 1,
            'major_id' => 1,
        ]);
        DB::table('seminars')->insert([
            'name' => 'test seminar2',
            'faculty_id' => 1,
            'major_id' => 2,
        ]);
    }
}
