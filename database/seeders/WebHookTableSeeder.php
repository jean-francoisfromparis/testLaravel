<?php

namespace Database\Seeders;

use App\Models\WebHook;
use Illuminate\Database\Seeder;

class WebHookTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        for ($i = 0; $i < 50; $i++) {
            WebHook::create([
                'merchantName' => $faker->name,
                'paymentAmount' => rand(5, 150),
            ]);
        }
    }
}
