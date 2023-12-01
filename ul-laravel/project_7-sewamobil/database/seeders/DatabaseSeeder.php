<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Customer;
use App\Models\DetailSewa;
use App\Models\Mobil;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Mobil::create([
            'merk' => 'Toyota',
            'model' => 'Camry',
            'tahun_produksi' => 2020,
            'warna' => 'Silver',
            'nomor_polisi' => 'B 1234 CD'
        ]);

        Mobil::create([
            'merk' => 'Honda',
            'model' => 'Civic',
            'tahun_produksi' => 2019,
            'warna' => 'Blue',
            'nomor_polisi' => 'D 5678 EF'
        ]);
        
        Mobil::create([
            'merk' => 'Daihatsu',
            'model' => 'Terios',
            'tahun_produksi' => 2006,
            'warna' => 'White',
            'nomor_polisi' => 'H 0000 B'
        ]);
        
        Mobil::create([
            'merk' => 'Peugeot',
            'model' => '206',
            'tahun_produksi' => 1998,
            'warna' => 'Red',
            'nomor_polisi' => 'H 7283 AP'
        ]);

        Customer::create([
            'nama' => 'Camela Devs',
            'telepon' => 6285236596684,
            'alamat' => 'Semarang'
        ]);

        Customer::create([
            'nama' => 'Elia Rosa',
            'telepon' => 62893849283,
            'alamat' => 'Semarang'
        ]);

        DetailSewa::create([
           'customer_id' => 1,
           'mobil_id' => 4,
           'tanggal_sewa' => '29-11-2023', 
           'tanggal_selesai' => '30-11-2023' 
        ]);

        DetailSewa::create([
           'customer_id' => 2,
           'mobil_id' => 1,
           'tanggal_sewa' => '05-1-2050', 
           'tanggal_selesai' => '06-1-2050' 
        ]);

    }
}
