<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'barcode' => '12345678',
            'name'=>'cracker',
            'description'=>'muy rico cracker',
            'price'=>'1.50',
            'brand_id'=>'1',
            'category_id'=>'1',
            'maximum'=>'100',
            'minimum'=>'5',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('products')->insert([
            'barcode' => '12345679',
            'name'=>'Maruchan en vaso',
            'description'=>'muy rico sopa',
            'price'=>'5',
            'brand_id'=>'5',
            'category_id'=>'3',
            'maximum'=>'100',
            'minimum'=>'5',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('products')->insert([
            'barcode' => '12345698',
            'name'=>'coca cola',
            'description'=>'3 ltr',
            'price'=>'11',
            'brand_id'=>'3',
            'category_id'=>'2',
            'maximum'=>'100',
            'minimum'=>'5',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('products')->insert([
            'barcode' => '12344678',
            'name'=>'fanta',
            'description'=>'2 ltr',
            'price'=>'10',
            'brand_id'=>'3',
            'category_id'=>'2',
            'maximum'=>'100',
            'minimum'=>'5',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('products')->insert([
            'barcode' => '19345678',
            'name'=>'dpña gusta carne',
            'description'=>'concentrado en polvo',
            'price'=>'0.50',
            'brand_id'=>'6',
            'category_id'=>'4',
            'maximum'=>'100',
            'minimum'=>'5',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
