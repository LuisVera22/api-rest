<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            'name' => "Iphone 13",
            "description" => "Mobile Phone Apple",
            "amount" => 980
        ]);
        DB::table('products')->insert([
            'name' => "Ipad Pro 11",
            "description" => "Tablet Apple",
            "amount" => 850
        ]);
        DB::table('products')->insert([
            'name' => "PlayStation 5",
            "description" => "Videoconsole",
            "amount" => 500
        ]);
    }
}