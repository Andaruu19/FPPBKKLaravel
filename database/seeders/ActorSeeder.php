<?php

namespace Database\Seeders;

use App\Models\Actor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ActorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Actor::create([
            'name' => 'Chris Pratt',
        ]);

        Actor::create([
            'name' => 'Bryce Dallas Howard',
        ]);

        Actor::create([
            'name' => 'Sam Neill',
        ]);

        Actor::create([
            'name' => 'Laura Dern',
        ]);

        Actor::create([
            'name' => 'Jeff Goldblum',
        ]);
    }
}
