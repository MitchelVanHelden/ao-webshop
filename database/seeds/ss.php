<?php

use Illuminate\Database\Seeder;

class category_product extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            DB::table('category_product')->insert([
            'categories_id' => "1",
        	'products_id' => "1",
            ]);

        	DB::table('category_product')->insert([
        	 'categories_id' => "2",
        	 'products_id' => "3",
        	]);

    		DB::table('category_product')->insert([
            'categories_id' => "2",
            'products_id' => "4",
            ]);

            DB::table('category_product')->insert([
            'categories_id' => "2",
            'products_id' => "5",
            ]);

            DB::table('category_product')->insert([
            'categories_id' => "3",
            'products_id' => "6",
            ]);

            DB::table('category_product')->insert([
            'categories_id' => "4",
            'products_id' => "2",
            ]);

            DB::table('category_product')->insert([
            'categories_id' => "5",
            'products_id' => "7",
            ]);
    }
}
