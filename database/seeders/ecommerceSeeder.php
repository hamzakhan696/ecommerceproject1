<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ecommerceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ecomms')->insert([
            'firstname' => "Saqib Khan",
            'email' => 'saqib@gmail.com',
            'password' => Hash::make('123457'),
            'created_at'=>date("Y-m-d H-i-s"),
            'updated_at'=>date("Y-m-d H-i-s"),
        ]);
    }
}
