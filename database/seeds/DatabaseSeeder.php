<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AdminSeeder::class);
        $this->call(AboutUsSeeder::class);
        $this->call(BannerSeeder::class);
        $this->call(FeatureSeeder::class);
        $this->call(FooterSeeder::class);
        $this->call(MenuSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(SettingSeeder::class);
        $this->call(TeamSeeder::class);
        $this->call(TitleSectionSeeder::class);
    }
}
