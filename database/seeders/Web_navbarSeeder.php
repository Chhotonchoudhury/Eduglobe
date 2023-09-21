<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Web_navbar;

class Web_navbarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Web_navbar::create([
            'en_link1' => 'Home',
            'en_link2' => 'Browse Courses',
            'en_link3' => 'Universities',
            'en_link4' => 'About us',
            'en_link5' => 'Languages',
            'en_link6' => 'Contact us',
        ]);
    }
}
