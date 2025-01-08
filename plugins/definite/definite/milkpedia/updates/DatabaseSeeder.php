<?php

namespace Definite\Milkpedia\Updates;

use Definite\Milkpedia\Models\Category;
use Definite\Milkpedia\Models\Faq;
use Definite\Milkpedia\Models\Milkpedia;
use October\Rain\Database\Updates\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->seedCategory();
        $this->seedMilkpedia();
        $this->seedFaq();
    }

    protected function seedMilkpedia()
    {
        // $faker = Faker\Factory::create();
        // // dd(";p");
        // for ($i = 1; $i <= 30; $i++) {

        //     $data = [
        //         'title' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        //         'slug' => str_slug($faker->sentence($nbWords = 6, $variableNbWords = true)),
        //         'content' => $faker->text($maxNbChars = 500),
        //         'excerpt' => $faker->text($maxNbChars = 100),
        //         'meta_seo_title' => $faker->sentence(),
        //         'meta_seo_keyword' => $faker->word(),
        //         'meta_seo_description' => $faker->sentence()
        //     ];

        //     echo "Seeding Milkpedia fake data ($i): " . dump($data) . "\n";

        //     Milkpedia::create($data);
        // }
        //
        foreach ($this->milkpediaData() as $data) {
            $data['slug'] = str_slug($data['title']);
            $data['content'] = $data['excerpt'];

            $milkpedia = Milkpedia::create($data);

            $milkpedia->categories()->attach(1);
        }
    }

    protected function seedCategory()
    {
        $categories = [
            'Nutrition & Health',
            'Reasons to Drink Milk',
            'When & How to Drink Milk',
        ];

        foreach ($categories as $category) {
            Category::create([
                'title' => $category,
                'slug' => str_slug($category),
            ]);
        }
    }

    protected function milkpediaData()
    {
        return [
            [
                'title' => 'What Are Protein',
                'excerpt' => '<p>A balanced diet supplies you will all of the protein you need. Meats, eggs, and dairy products are significant sources of protein, but you can also get protein from a variety of grains, legumes, nuts, and seeds.</p>

                <p>Proteins tend to be large molecules made up of several building blocks called amino acids. There are 20 different amino acids. Amino acids are linked together to form peptides, which are small chains of amino acids. The peptides are then linked together to form larger proteins. Some of the amino acids are essential because they can not be made by the body and must be taken in through diet.</p>',
            ],
            [
                'title' => 'From Frisian Flag, Comparison Nutrient, Density',
                'excerpt' => '',
            ],
            [
                'title' => 'The Added Value of Milk Fat',
                'excerpt' => '',
            ],
            [
                'title' => 'The Famous Food Pyramid',
                'excerpt' => '',
            ],
            [
                'title' => 'What Are The Benefits of Milk for Vegetarians?',
                'excerpt' => '',
            ],
            [
                'title' => 'How to Find Your Life Balance with a Balanced Diet',
                'excerpt' => '',
            ],
            [
                'title' => 'How Milk Serves Up Good Nutrition for Kids',
                'excerpt' => '',
            ],
        ];
    }

    protected function seedFaq()
    {
        $faqs = [
            [
                'title' => 'What do nutritionists say about milk?',
                'description' => 'The Dutch Nutrition Center and many scientists agree that milk and dairy products contain crucial nutrients, and that they are part of a healthy diet that also includes grains, vegetables, fruit, nuts, fish, and meat. Milk and dairy products contain protein and fat and are a source of vitamins B2, B12, and calcium. It is recommended to drink 2 to 3 glasses of milk per day, or to consume dairy products like yogurt.',
            ],
            [
                'title' => 'Why do some people have a cow’s milk allergy?',
                'description' => 'The Dutch Nutrition Center and many scientists agree that milk and dairy products contain crucial nutrients, and that they are part of a healthy diet that also includes grains, vegetables, fruit, nuts, fish, and meat. Milk and dairy products contain protein and fat and are a source of vitamins B2, B12, and calcium. It is recommended to drink 2 to 3 glasses of milk per day, or to consume dairy products like yogurt.',
            ],
            [
                'title' => 'Can I drink raw milk?',
                'description' => 'The Dutch Nutrition Center and many scientists agree that milk and dairy products contain crucial nutrients, ',
            ],
            [
                'title' => 'What do nutritionists say about milk?',
                'description' => 'The Dutch Nutrition Center and many scientists agree that milk and dairy products contain crucial nutrients, ',
            ],
            [
                'title' => 'How much fat is in milk?',
                'description' => 'The Dutch Nutrition Center and many scientists agree that milk and dairy products contain crucial nutrients, ',
            ],
            [
                'title' => 'Why do some people have a cow’s milk allergy?',
                'description' => 'The Dutch Nutrition Center and many scientists agree that milk and dairy products contain crucial nutrients, ',
            ],
            [
                'title' => 'Can I drink raw milk?',
                'description' => 'The Dutch Nutrition Center and many scientists agree that milk and dairy products contain crucial nutrients, ',
            ],
            [
                'title' => 'What do nutritionists say about milk?',
                'description' => 'The Dutch Nutrition Center and many scientists agree that milk and dairy products contain crucial nutrients, ',
            ],
            [
                'title' => 'How much fat is in milk?',
                'description' => 'The Dutch Nutrition Center and many scientists agree that milk and dairy products contain crucial nutrients, ',
            ],
        ];

        for ($i = 1; $i <= 3; ++$i) {
            foreach ($faqs as $faq) {
                Faq::create($faq);
            }
        }
    }
}
