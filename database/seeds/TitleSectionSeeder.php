<?php

use App\Models\TitleSection;
use Illuminate\Database\Seeder;

class TitleSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TitleSection::create([
            'section_title' => 'About Us',
            'section_name' => 'About Us'
        ]);
        TitleSection::create([
            'section_title' => 'Our Key Features',
            'section_name' => 'Feature'
        ]);
        TitleSection::create([
            'section_title' => 'Our Product',
            'section_name' => 'Our Product'
        ]);
        TitleSection::create([
            'section_title' => 'Our Teams',
            'section_name' => 'Our Teams'
        ]);
    }
}
