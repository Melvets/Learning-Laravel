<?php

namespace Database\Seeders;

use App\Models\Barang;
use App\Models\Kategori;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        Kategori::create([
            'nama_kategori' => 'Laptop'
        ]);

        Kategori::create([
            'nama_kategori' => 'Handphone'
        ]);
        
        Kategori::create([
            'nama_kategori' => 'Mobil'
        ]);

        Kategori::create([
            'nama_kategori' => 'Motor'
        ]);


        Barang::create([
            'kategori_id' => 1,
            'nama_barang' => 'Lenovo Ideapad Flex 5i',
            'harga' => '9500000',
            'jumlah_barang' => 1,
        ]);

        Barang::create([
            'kategori_id' => 3,
            'nama_barang' => 'Daihatsu Terios',
            'harga' => '23000000',
            'jumlah_barang' => 1,
        ]);
    }
}
