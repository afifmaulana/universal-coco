<?php

use App\Models\Team;
use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Team::create([
            'name' => 'Stella Carissa',
            'position' => 'Business Development',
            'image' => 'image.jpg',
            'caption' => 'Many of life’s failures are people who did not realize how close they were to success when they gave up.',
            'instagram' => 'instagram.com',
            'linkedin' => 'linkedin.com'
        ]);
        Team::create([
            'name' => 'Alhafis Wijaya',
            'position' => 'Co-Founder',
            'image' => 'image.jpg',
            'caption' => 'Many of life’s failures are people who did not realize how close they were to success when they gave up.',
            'instagram' => 'instagram.com',
            'linkedin' => 'linkedin.com'
        ]);
        Team::create([
            'name' => 'Julio',
            'position' => 'Founder',
            'image' => 'image.jpg',
            'caption' => 'Our faith is the substance of our future. There is no big success without big sacrifice.',
            'instagram' => 'instagram.com',
            'linkedin' => 'linkedin.com'
        ]);
    }
}
