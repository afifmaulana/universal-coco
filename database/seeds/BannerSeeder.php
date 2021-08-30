<?php

use App\Models\Banner;
use Illuminate\Database\Seeder;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Banner::create([
            'title' => 'Supplying across the globe',
            'subtitle' => 'The Leading Supplier<br/> of Coconut Product',
            'image' => 'image.jpg',
            'url_button' => '#',
            'text_button' => 'Learn More'
        ]);
    }
}
