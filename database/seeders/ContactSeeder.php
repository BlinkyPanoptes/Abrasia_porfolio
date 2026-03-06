<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Contact;

class ContactSeeder extends Seeder
{
    public function run(): void
    {
        Contact::create([
            'email' => 'cassey1226@gmail.com',
            'phone' => '09*********'
        ]);
    }
}