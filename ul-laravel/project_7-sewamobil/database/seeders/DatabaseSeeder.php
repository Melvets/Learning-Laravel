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
            'nomor_polisi' => 'B 1234 CD',
            'image' => 'car-image/6CtrdogOjbmWo0UtERHP2uuetqOnfderskJH33TE.jpg'
        ]);

        Mobil::create([
            'merk' => 'Honda',
            'model' => 'Civic',
            'tahun_produksi' => 2019,
            'warna' => 'Blue',
            'nomor_polisi' => 'D 5678 EF',
            'image' => 'car-image/sTkLtjXpV2mHoOUNwN1uzgGmqbGfgfcsO7fyCl54.jpg'
        ]);
        
        Mobil::create([
            'merk' => 'Daihatsu',
            'model' => 'Terios',
            'tahun_produksi' => 2006,
            'warna' => 'White',
            'nomor_polisi' => 'H 0000 B',
            'image' => 'car-image/qjTADVb7jUxYEkRsEUnNNGVCFhIIwiBZdgooymCt.jpg'
        ]);
        
        Mobil::create([
            'merk' => 'Peugeot',
            'model' => '206',
            'tahun_produksi' => 1998,
            'warna' => 'Red',
            'nomor_polisi' => 'H 7283 AP',
            'image' => 'car-image/MFQDocd73XjLLhKLqURpIjPC8p4Ez5KYDoDh7h1N.jpg'
        ]);

        Customer::create([
            'nama_depan' => 'Camela',
            'nama_belakang' => 'Devs',
            'telepon' => 6285236596684,
            'email' => 'camelaputri1@gmail.com',
            'alamat' => 'Semarang'
        ]);

        Customer::create([
            'nama_depan' => 'Elia',
            'nama_belakang' => 'Rosa',
            'telepon' => 6285244599384,
            'email' => 'elbowo@gmail.com',
            'alamat' => 'Semarang'
        ]);

        DetailSewa::create([
           'customer_id' => 1,
           'mobil_id' => 4,
           'durasi_sewa' => 1,
           'tanggal_sewa' => date('2023-12-13'), 
           'tanggal_selesai' => date('2023-12-14'),
           'harga' => 100000
        ]);

        DetailSewa::create([
           'customer_id' => 2,
           'mobil_id' => 1,
           'durasi_sewa' => 1,
           'tanggal_sewa' => date('2023-12-24'), 
           'tanggal_selesai' => date('2023-12-25'),
           'harga' => 100000
        ]);

    }
}
