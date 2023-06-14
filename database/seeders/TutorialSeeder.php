<?php

namespace Database\Seeders;

use App\Models\Tutorial;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TutorialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tutorials = [
            [
                'title' => 'Video Tutorial Meta Propolis',
                'ext' => 'video',
                'path' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/4nqg6lsbFsQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>'
            ],
            [
                'title' => 'File Tutorial Meta Propolis',
                'ext' => 'pdf',
                'path' => 'storage/tutorial.pdf',
            ]
        ];

        foreach($tutorials as $tutorial){
            Tutorial::create($tutorial);
        }
    }
}
