<?php

use App\Models\AboutUs;
use Illuminate\Database\Seeder;

class AboutUsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AboutUs::create([
            'title' => 'We process more than 1,500 hectares of coconut plantations, spread across several islands in Eastern Indonesia.',
            'description' => 'In the beginning, our company was engaged in manufacturing where we processed coconut derivative products, namely coconut shells into coconut shell charcoal. And after that our company expanded and expanded into coconut plantations, to process more derivative products.',
            'image' => 'image.jpg'
        ]);
    }
}
