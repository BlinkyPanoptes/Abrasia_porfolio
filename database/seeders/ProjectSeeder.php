<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        Project::create([
            'title' => 'Static Website',
            'description' => 'Responsive website built using HTML, CSS, and Bootstrap.'
        ]);

        Project::create([
            'title' => 'Poster Design',
            'description' => 'Promotional posters created using Photoshop and Illustrator.'
        ]);

        Project::create([
            'title' => 'T-Shirt Design',
            'description' => 'Custom apparel graphics and typography designs.'
        ]);

        Project::create([
            'title' => 'Portfolio Website',
            'description' => 'Laravel portfolio project using MVC and database migrations.'
        ]);
    }
}