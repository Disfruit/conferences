<?php

namespace Database\Seeders;

use App\Models\Conference;
use Faker\Provider\Lorem;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ConferencesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        (new Conference())->insert([
            [
            'title' => Lorem::sentence(10),
            'description' => Lorem::text(),
            'date' => date('Y-m-d'),
            'city' => Lorem::sentence(3)
            ],
            [
                'title' => Lorem::sentence(10),
                'description' => Lorem::text(),
                'date' => date('Y-m-d'),
                'city' => Lorem::sentence(3)
            ]
        ]);
    }
}
