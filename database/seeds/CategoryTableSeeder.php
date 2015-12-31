<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Faker\Factory as faker;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //DB::table('categories')->truncate();
        //factory('CodeCommerce\Category',1)->create(['name' => 'mauro',
           // 'description' => 'teste']);

        factory('CodeCommerce\Category',40)->create();
       /* $faker = Faker::create();
        DB::table('categories')->truncate();
        foreach (range(1, 15) as $i) {

            DB::table('categories')->insert([

                'name' => $faker->word,
                'description' => $faker->text

            ]);

        } */

    }

}