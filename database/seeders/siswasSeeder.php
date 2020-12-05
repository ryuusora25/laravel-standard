<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class siswasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $faker = Faker::create('id_ID');
        for($i = 1; $i <= 10; $i++){
            // insert data ke table products menggunakan Faker
            DB::table('siswas')->insert([
              'nama' => $faker->name,
              'sku' => $faker->email,
              'harga_modal' => $faker->phoneNumber,
              'harga_jual' => $faker->address
             ]);
    }
}
}
