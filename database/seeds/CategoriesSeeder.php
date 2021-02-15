<?php

use Illuminate\Database\Seeder;
use App\Categories;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categoryName = [
            "Beach","Mountain","Convension","Museum","Zoo"
        ];
        
        for($i=0; $i<5; $i++) {
            $newCategory = new Categories;
            $newCategory->fill(["name" => $categoryName[$i]]);
            $newCategory->save();
        }
    }
}