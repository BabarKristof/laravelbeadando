<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'id' => 1,
            'name' => 'Babar Kristóf',
            'email' => 'babarkristof@admin.com',
            'password' => bcrypt('admin123')
        ]);

        DB::table('users')->insert([
            'id' => 2,
            'name' => 'Gipsz Jakab',
            'email' => 'gipszjakab@felhasznalo.com',
            'password' => bcrypt('felhasznalo123')
        ]);
    }
}
