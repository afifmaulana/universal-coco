<?php

use App\Models\Menu;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Menu::create([
            'menu_name' => 'About',
        ]);
        Menu::create([
            'menu_name' => 'Journey',
        ]);
        Menu::create([
            'menu_name' => 'Feature',
        ]);
        Menu::create([
            'menu_name' => 'Product',
        ]);
        Menu::create([
            'menu_name' => 'Team',
        ]);
        Menu::create([
            'menu_name' => 'Contact',
        ]);

    }
}
