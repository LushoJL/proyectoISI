<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'galletas',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('categories')->insert([
            'name' => 'Gaseosa',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('categories')->insert([
            'name' => 'Comida rapida',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('categories')->insert([
            'name' => 'ingredientes en polvo',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
