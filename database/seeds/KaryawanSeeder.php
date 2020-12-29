<?php

use Illuminate\Database\Seeder;

class KaryawanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('karyawans')->insert([ 
            'id' => '1',
            'nama' => 'Admin',
            'jk' => 'Laki-laki',
            'ttl' => '-',
            'email' => 'admin@admin.com',
            'alamat' => '-',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
