<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Web_title;

class Web_titleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Web_title::create([

            'en_title1' => 'Sing in',
            'en_title2' => 'Browes courses',
            'en_title3' => 'View courses',
            'en_title4' => 'Register Now',
            'en_title5' => 'Watch Video',

            'en_title6' => 'Categories',
            'en_title7' => 'Student',
            'en_title8' => 'company',
            'en_title9' => 'Subscribe',

            'en_title10' => 'Courses',
            'en_title11' => 'Registration',
            'en_title12' => 'Admin panel',
            'en_title13' => 'Subscribe',

            'en_title14' => 'Explore top categories',
            'en_title15' => 'Newly Updated courses',
            'en_title16' => 'Popular Courses',
            'en_title17' => 'How it Works',
            'en_title18' => 'Subscribe our course to get updates',
        ]);

    }
}
