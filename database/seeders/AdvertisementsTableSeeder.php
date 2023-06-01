<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class AdvertisementsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        $users = DB::table('users')->pluck('id');

        foreach ($users as $userId) {
            DB::table('advertisements')->insert([
                'user_id' => $userId,
                'user_name' => $faker->userName(),
                'name' => $faker->firstName(),
                'animal' => $faker->randomElement(['Hond', 'Kat', 'Hamster', 'Cavia', 'Vis', 'Vogel']),
                'price' => $faker->numberBetween(1, 10),
                'date_start' => $faker->dateTimeBetween('-1 week', '+1 week')->format('Y-m-d'),
                'date_end' => $faker->dateTimeBetween('+2 weeks', '+4 weeks')->format('Y-m-d'),
                'description' => $faker->paragraph,
                'img' => $faker->imageUrl(),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
