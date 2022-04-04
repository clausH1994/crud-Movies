<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $movie = new \App\Models\Movie([
            'image' => 'image #1',
            'name' => 'movie #1',
            'description' => 'movie #1',
            'releaseYear' => '2021',
            'director' => 'director #1'
        ]);
        $movie->save();
    }
}
