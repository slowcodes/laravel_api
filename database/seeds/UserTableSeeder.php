<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::truncate();
        $password = Hash::make('password123@');

        User::create([
            'email' => 'admin@tese.com',
            'name' => 'Adamin Umaru',
            'password' => $password
        ]);

        $faker = \Faker\Factory::create();

        for($i=0; $i<=20; $i++){
            User::create([
                'email' => $faker->name,
                'password' => $password,
                'name' => $faker->name
            ]);
        }


    }
}
