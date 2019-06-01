<?php

use Illuminate\Database\Seeder;

class BrandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('brands')->insert([
            'name' => 'crick',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('brands')->insert([
            'name' => 'mabel',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('brands')->insert([
            'name' => 'coca cola',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('brands')->insert([
            'name' => 'pepsi',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('brands')->insert([
            'name' => 'maruchan',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('brands')->insert([
            'name' => 'venado',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
