<?php

use Illuminate\Database\Seeder;

class ProductImageTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_images')->truncate();
    }
}
