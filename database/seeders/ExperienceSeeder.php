<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Experience;

class ExperienceSeeder extends Seeder
{
    public function run(): void
    {
        Experience::create([
            'title' => 'Graphics Design',
            'duration' => '2+ Years',
            'description' => 'Designed posters, marketing materials, and apparel graphics using Adobe Photoshop and Illustrator.'
        ]);

        Experience::create([
            'title' => 'Web Development',
            'duration' => '1.5 Years',
            'description' => 'Built responsive websites using HTML, CSS, Bootstrap, and JavaScript.'
        ]);

        Experience::create([
            'title' => 'Laravel Development',
            'duration' => 'Several Months',
            'description' => 'Learning Laravel MVC structure, routing, migrations, controllers, and Blade templates.'
        ]);
    }
}