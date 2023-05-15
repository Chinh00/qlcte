<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ChiTieuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $facker = Factory::create();
        for($i = 0; $i < 20; $i++) {
            DB::table('chitieu')->insert([
                "price" => $facker->randomDigit,
                "type_price" => 1,
                "content" => $facker->paragraph,
                "created_at" => $facker->dateTime
            ]);
        }
    }
}
