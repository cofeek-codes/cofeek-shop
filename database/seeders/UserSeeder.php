<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();

        // client
        User::create([
            'name' => explode(' ', $faker->name())[0],
            'surname' => explode(' ', $faker->name())[1],
            'patronymic' => $faker->word(),
            'rules' => true,
            'login' => $faker->userName(),
            'email' => $faker->email(),
            'password' => Hash::make($faker->word()),
            'role_id' => 1
        ]);

        // admin
        User::create([
            'name' => explode(' ', $faker->name())[0],
            'surname' => explode(' ', $faker->name())[1],
            'patronymic' => $faker->word(),
            'rules' => true,
            'login' => $faker->userName(),
            'email' => $faker->email(),
            'password' => Hash::make($faker->word()),
            'role_id' => 2
        ]);
    }
}
