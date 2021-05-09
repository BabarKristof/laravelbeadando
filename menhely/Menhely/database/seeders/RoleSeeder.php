<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'name' => 'admin',
            'guard_name' => 'web',
        ]);

        DB::table('model_has_roles')->insert([
            'model_type' => 'App\User',
            'role_id' => 1,
            'model_id' => 1,
        ]);

        DB::table('roles')->insert([
            'name' => 'user',
            'guard_name' => 'web',
        ]);

        DB::table('model_has_roles')->insert([
            'model_type' => 'App\User',
            'role_id' => 2,
            'model_id' => 2,
        ]);
    }
}
