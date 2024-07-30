<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 100; $i++) {
            $project = new Project();
            $project->title = $faker->words(rand(2, 7), true);
            $project->slug = Project::generateSlug($project->title);
            $project->description = $faker->sentence();
            $project->created = $faker->dateTime();
            $project->categories = $faker->words(rand(2, 5), true);
            $project->image_url = $faker->sentence();
            $project->save();
        }
    }
}
