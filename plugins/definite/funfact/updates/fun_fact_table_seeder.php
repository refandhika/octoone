<?php

namespace Definite\FunFact\Updates;

use Seeder;
use Faker\Factory;
use Definite\FunFact\Models\FunFact;

class FunFactTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Factory::create();

        for ($i = 1; $i <= 10; ++$i) {
            FunFact::create([
                'no' => $i,
                'description' => $faker->sentence,
            ]);
        }
    }
}
