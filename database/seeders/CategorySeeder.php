<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $name = [
            'Food Distribution',
            'Empowering Women Socially and Economically',
            'Child Development And Their Education',
            'Fitness Awareness : Daily Yoga',
            'Tree Plantation',
            'Helping Animals',
            'Healthcare',
            'Sanitization',
            'Drinking Water',
        ];

        foreach ($name as $item) {
            $cat = new Category;
            $cat->title = $item;
            $cat->slug = $item;
            $cat->save();
        }

    }
}
