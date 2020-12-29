<?php

use Illuminate\Database\Seeder;

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
            'karyawan_id' => '1',
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin12345'), 
            'status' => 'admin',
            'created_at' => now(),
            'updated_at' => now(),
        ]);  
    }
}
