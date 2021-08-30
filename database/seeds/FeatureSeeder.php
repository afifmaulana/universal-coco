<?php

use App\Models\Feature;
use Illuminate\Database\Seeder;

class FeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Feature::create([
            'title' => 'Integrity',
            'description' => 'Integrity means telling the truth, keeping our word and treating others with fairness and respect. Integrity is one of our most cherished assets. It must not be compromised.',
            'image' => 'image.jpg'
        ]);
        Feature::create([
            'title' => 'Quality',
            'description' => 'Quality is exhibited in many ways by selling and supporting products and services that delight customers, establishing a work environment , delivering financial results that meet investor expectations.',
            'image' => 'image.jpg'
        ]);
        Feature::create([
            'title' => 'Commitment',
            'description' => 'Commitment is important where we will continue to provide the best to our customers and investors all the time. Our opportunity to serve should be viewed as a privilege that is not to be taken for granted.',
            'image' => 'image.jpg'
        ]);
        Feature::create([
            'title' => 'Innovation',
            'description' => 'Innovation means inventing, designing, developing products and services that have high appeal in the marketplace and strengthen customer preference for the Universal Coco Indonesia project.',
            'image' => 'image.jpg'
        ]);
    }
}
