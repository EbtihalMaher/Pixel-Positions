<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Job;
use App\Models\Tag;
use Illuminate\Database\Eloquent\Factories\Sequence;

class JobSeeder extends Seeder
{
    public function run(): void
    {
        $tags = Tag::factory(3)->create();

        Job::factory(10)->hasAttached($tags)->create(new sequence([
            'featured' => false,
            'schedule' => 'Full Time',
        ],[
            'featured' => true,
            'schedule' => 'Part Time',
        ]));
    }
}
