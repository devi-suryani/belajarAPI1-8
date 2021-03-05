<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\User;
use Faker\Factory as Faker;
use Illuminate\Support\Str;

class Userseed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker= Faker::create('id_ID');

        for($i=0;$i<=100;$i++){
        User::create([
        'name'=>$faker->name,
        'email'=>$faker->email,
        'password'=>bcrypt('secret'),
    ]);
        }
    }
}
