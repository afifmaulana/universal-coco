<?php

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::create([
            'title_website' => 'Universal Coco',
            'keywords' => 'Universal Coco, Coconut Oil, Virgin Coconut Oil, Coconut Briquette Charcoal, Coconut Fiber, Copra Meal, Coconut Peat Blocks, Desinccated Coconut',
            'description' => 'The Leading Supplier of Coconut Product',
            'logo' => 'logo.jpg',
            'favicon' => 'favicon.ico',
            'instagram' => 'instagram.com',
            'linkedin' => 'linkedin.com',
            'facebook' => 'facebook.com',
        ]);
    }
}
