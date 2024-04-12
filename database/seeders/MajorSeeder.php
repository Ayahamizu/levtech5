<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MajorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('majors')->insert([
                'name' => '法律学科',
            ]);
        DB::table('majors')->insert([
                'name' => '政治学科',
            ]);
        DB::table('majors')->insert([
                'name' => '国際政治学科',
            ]);
        DB::table('majors')->insert([
                'name' => '哲学科',
            ]);
        DB::table('majors')->insert([
                'name' => '日本文学科',
            ]);
        DB::table('majors')->insert([
                'name' => '英文学科',
            ]);
        DB::table('majors')->insert([
                'name' => '史学科',
            ]);
        DB::table('majors')->insert([
                'name' => '地理学科',
            ]);
        DB::table('majors')->insert([
                'name' => '心理学科',
            ]);
        DB::table('majors')->insert([
                'name' => '経営学科',
            ]);
        DB::table('majors')->insert([
                'name' => '経営戦略学科',
            ]);
        DB::table('majors')->insert([
                'name' => '市場経営学科',
            ]);
        DB::table('majors')->insert([
                'name' => '国際文化学科',
            ]);
        DB::table('majors')->insert([
                'name' => 'GIS',
            ]);
        DB::table('majors')->insert([
                'name' => '人間環境学科',
            ]);
        DB::table('majors')->insert([
                'name' => 'キャリアデザイン学科',
            ]);
    }
}
