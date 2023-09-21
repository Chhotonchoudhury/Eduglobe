<?php

namespace Database\Seeders;
use App\Models\Companyprofile;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Companyprofile::create([
            'name' => 'company',
            'email' => 'info@gmail.com',
            'phone' => '9542628425',
            'address' => 'This is the address section',
            'description'=>'This is the description of the company',
            'created_at' => now(),
         ]);
        
    }
}
