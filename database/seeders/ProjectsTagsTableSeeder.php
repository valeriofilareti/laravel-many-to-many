<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tag;
use App\Models\Project;

class ProjectsTagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i < 50; $i++){
            $project = Project::inRandomOrder()->first();
            $tag_id = Tag::inRandomOrder()->first()->id;
            $project->tags()->attach($tag_id);
        }
    }
}
