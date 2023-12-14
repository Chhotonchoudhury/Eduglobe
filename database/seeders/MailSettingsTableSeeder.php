<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\MailSetting;

class MailSettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MailSetting::create([
            'mail_transport' => 'smtp',
            'mail_host' => 'smtp.hostinger.com',
            'mail_port' => 465,
            'mail_username' => 'ceo@edudeve.com',
            'mail_password' => 'EdudevCeo123@',
            'mail_encryption' => 'tls',
            'mail_from' => 'ceo@edudeve.com',
            'mail_name' => 'EDUDEVE',
        ]);
    }
}
