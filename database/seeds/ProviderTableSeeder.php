<?php

use Illuminate\Database\Seeder;

class ProviderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('providers')->insert([
            'name' => 'galletitas SRl',
            'phone'=>'2403010',
            'mobile'=>'75838286',
            'email'=>'galletitas@gmail.com',
            'observation'=>'buen proveedor',
            'address'=>'muy lejos',
            'web_page'=>'www.galletitas.com',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('providers')->insert([
            'name' => 'Gaseosas SRl',
            'phone'=>'2403010',
            'mobile'=>'75838286',
            'email'=>'Gaseosas@gmail.com',
            'observation'=>'buen proveedor',
            'address'=>'muy lejos',
            'web_page'=>'www.Gaseosas.com',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('providers')->insert([
            'name' => 'pipocas SRl',
            'phone'=>'2403010',
            'mobile'=>'75838286',
            'email'=>'pipocas@gmail.com',
            'observation'=>'buen proveedor',
            'address'=>'muy lejos',
            'web_page'=>'www.pipocas.com',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('providers')->insert([
            'name' => 'Pil SRl',
            'phone'=>'2403010',
            'mobile'=>'75838286',
            'email'=>'Pil@gmail.com',
            'observation'=>'buen proveedor',
            'address'=>'muy lejos',
            'web_page'=>'www.Pil.com',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('providers')->insert([
            'name' => 'gloria SRl',
            'phone'=>'2403010',
            'mobile'=>'75838286',
            'email'=>'gloria@gmail.com',
            'observation'=>'buen proveedor',
            'address'=>'muy lejos',
            'web_page'=>'www.gloria.com',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
