<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Caffeinated\Shinobi\Models\Role;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
  /*      DB::table('users')->insert([
            'name' => 'Alan Espejo',
            'email' => 'alan@admin.com',
            'email_verified_at' => now(),
            'password' => Hash::make('123456'),
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('users')->insert([
            'name' => 'Elizabeth Payllo',
            'email' => 'elizabeth@admin.com',
            'email_verified_at' => now(),
            'password' => Hash::make('123456'),
            'created_at' => now(),
            'updated_at' => now()
        ]);*/
        DB::table('users')->insert([
            'name' => 'ROOT',
            'email' => 'root@admin.com',
            'email_verified_at' => now(),
            'password' => Hash::make('123456'),
            'created_at' => now(),
            'updated_at' => now()
        ]);
    /*    DB::table('users')->insert([
            'name' => 'Alan Espejo',
            'email' => 'alan@vend.com',
            'email_verified_at' => now(),
            'password' => Hash::make('123456'),
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('users')->insert([
            'name' => 'Elizabeth Payllo',
            'email' => 'elizabeth@vend.com',
            'email_verified_at' => now(),
            'password' => Hash::make('123456'),
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('users')->insert([
            'name' => 'Jose Luis Espinal',
            'email' => 'jose@vend.com',
            'email_verified_at' => now(),
            'password' => Hash::make('123456'),
            'created_at' => now(),
            'updated_at' => now()
        ]);*/
        Role::create([
            'name'      =>'ROOT',
            'slug'      =>'root',
            'special'   =>'all-access'
        ]);
        DB::table('role_user')->insert([
            'role_id' =>'1',
            'user_id' =>'1'
        ]);
    }
}
