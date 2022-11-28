<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=Faker::create('id_ID');
        for($i=1;$i<=50;$i++){
            DB::table('books')->insert([
                'publisher_id' => $faker->numberBetween(1,3),
                'title' => $faker->realText(40),
                'author' => $faker->name,
                'year' => $faker->numberBetween(2000,2022),
                'synopsis' => $faker->text,
                'image' => $faker->address
            ]);

        }
    }
}
