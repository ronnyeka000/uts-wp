<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class BookCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=Faker::create('id_ID');
        for($i=1;$i<=75;$i++){
            DB::table('book_category')->insert([
                'book_id'=>$faker->numberBetween(101,150),
                'category_id'=>$faker->numberBetween(1,4)
            ]);

        }
    }
}
