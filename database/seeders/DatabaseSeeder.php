<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('book')->insert([
            [
                'authorid' => 1,
                'title' => 'Toi thay hoa vang tren co xanh',
                'ISBN' => 'ms01',
                'year' => '2018',
                'available' => 'available'
                ],
            [
                'authorid' => 2,
                'title' => 'Giac mo trua',
                'ISBN' => 'ms02',
                'year' => '2019',
                'available' => 'available'
            ],
            [
                'authorid' => 3,
                'title' => 'Nhung dua tre',
                'ISBN' => 'ms03',
                'year' => '2016',
                'available' => 'available'
            ],
            [
                'authorid' => 4,
                'title' => 'Khong gia dinh',
                'ISBN' => 'ms04',
                'year' => '2019',
                'available' => 'available'
            ],
            [
                'authorid' => 5,
                'title' => 'So do',
                'ISBN' => 'ms05',
                'year' => '2020',
                'available' => 'available'
            ]
        ]);
    }
}
