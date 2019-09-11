<?php

use Illuminate\Database\Seeder;

class ManufacturersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('manufacturers')->insert([
            'mfg_name'  => 'Sony',
            'updated_at' => \DB::raw('CURRENT_TIMESTAMP')
        ]);
        DB::table('manufacturers')->insert([
            'mfg_name'  => 'Samsung',
            'updated_at' => \DB::raw('CURRENT_TIMESTAMP')
        ]);
        DB::table('manufacturers')->insert([
            'mfg_name'  => 'Apple',
            'updated_at' => \DB::raw('CURRENT_TIMESTAMP')
        ]);
    }
}
