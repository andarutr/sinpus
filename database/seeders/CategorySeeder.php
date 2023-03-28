<?php

namespace Database\Seeders;

use File;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get('database/data/category.json');
        $category = json_decode($json);

        foreach($category as $ctg)
        {
            Category::create([
                'id_category' => $ctg->id_category,
                'nm_category' => $ctg->nm_category,
                'url_category' => $ctg->url_category,
            ]);
        }
    }
}
