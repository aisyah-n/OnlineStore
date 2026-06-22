<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Product::create([
            'name' => 'Game',
            'description' => 'Video game controller',
            'image' => 'game.png',
            'price' => 100
        ]);

        Product::create([
            'name' => 'Safe',
            'description' => 'Security safe',
            'image' => 'safe.png',
            'price' => 200
        ]);

        Product::create([
            'name' => 'Submarine',
            'description' => 'Yellow submarine',
            'image' => 'submarine.png',
            'price' => 300
        ]);

        Product::create([
            'name' => 'laptop',
            'description' => 'chrome book',
            'image' => 'laptop.png',
            'price' => 500
        ]);

        Product::create([
            'name' => 'mouse',
            'description' => 'mouse computer',
            'image' => '1780530334.png',
            'price' => 26
        ]);

        Product::create([
            'name' => 'clock',
            'description' => 'jam',
            'image' => '1780542388.png',
            'price' => 14
        ]);
    }
}