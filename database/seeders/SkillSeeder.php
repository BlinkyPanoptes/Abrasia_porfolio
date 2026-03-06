<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Skill;

class SkillSeeder extends Seeder
{
    public function run(): void
    {
        Skill::create([
            'name' => 'Web Development',
            'percentage' => 95
        ]);

        Skill::create([
            'name' => 'Laravel Development',
            'percentage' => 85
        ]);

        Skill::create([
            'name' => 'UI/UX Design',
            'percentage' => 80
        ]);

        Skill::create([
            'name' => 'Graphics Design',
            'percentage' => 75
        ]);
    }
}