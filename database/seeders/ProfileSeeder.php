<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Profile;

class ProfileSeeder extends Seeder
{
    public function run(): void
    {
        Profile::create([
            'name' => 'Cassandra Nicole Abrasia',
            'bio' => 'Web Developer | Laravel Developer | UI/UX Designer | Graphics Designer',
            'email' => 'cassey1226@gmail.com'
        ]);
    }
}