<?php

use App\Models\Footer;
use Illuminate\Database\Seeder;

class FooterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Footer::create([
            'title' => 'Questions?',
            'subtitle' => 'Let’s Get In Touch',
            'company_name' => 'PT. Universal Coco Indonesia',
            'image' => 'logo.jpg',
            'description' => 'We also continue to update the information about the company through social media, for the latest information you can follow our social media.',
            'text_copyright' => '© 2021 Universal Coco. All rights reserved',
        ]);
    }
}
