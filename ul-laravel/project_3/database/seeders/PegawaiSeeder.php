<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        for ( $i = 1; $i <= 50; $i++ ){
            DB::table('pegawai')->insert(
                [
                    'nama' => $faker->name,
                    'jabatan' => $faker->jobTitle,
                    'alamat' => $faker->address,
                    'tgl_lahir' => $faker->date
                ]
            );
        }
    }
}
