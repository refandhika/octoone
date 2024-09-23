<?php

namespace Definite\Products\Updates;

use Definite\Products\Models\Category;
use Seeder;

class CategorySeeder extends Seeder
{
    public function run()
    {
        $dummyDescription = 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciun';

        $categories = [
            'Sweet Condensed Milk',
            'Ready to Drink',
            'Instant Follow',
            'Family Milk Powder',
            'Friso',
        ];

        foreach ($categories as $category) {
            $data = [
                'title' => $category,
                'slug' => str_slug($category),
                'description' => $dummyDescription,
            ];

            Category::create($data);
        }
    }
}
