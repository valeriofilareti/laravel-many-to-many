<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tag;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = ['Front End', 'Back End', 'Design', 'Vue', 'Vite'];

        foreach($data as $tag){

            $new_tag = new Tag();
            $new_tag->name = $tag;
            $new_tag->save();
        }
    }
}
