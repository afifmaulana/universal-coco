<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = "Admin Universal Coco";
        $user->email = "admin@gmail.com";
        $user->password = Hash::make("password");
        $user->save();
    }
}
