<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Category extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('category')->insert([
            [
                'name' => 'Thể Thao'
            ],
            [
                'name' => 'Giáo dục'
            ],
            [
                'name' => 'Sức khỏe'
            ],
            [
                'name' => 'Công nghệ'
            ],
            [
                'name' => 'Giải trí'
            ]

        ]);
    }
}
