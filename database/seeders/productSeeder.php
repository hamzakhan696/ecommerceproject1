<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class productSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => "oppo Mobile",
            'price' => '300',
            "description"=>"A smartphone with 8gb ram and much more feature",
            "category"=>"mobile",
            "gallery"=>"https://unsplash.com/photos/83ypHTv6J2M",
            'created_at'=>date("Y-m-d H-i-s"),
            'updated_at'=>date("Y-m-d H-i-s"),
        ]);
    }
}
