<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Customer;
use App\Models\DetailSewa;
use App\Models\Mobil;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

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

        Mobil::create([
            'merk' => 'Ford',
            'model' => 'Everest',
            'tahun_produksi' => 2001,
            'warna' => 'Blue',
            'nomor_polisi' => 'H 1298 KO',
            'image' => 'car-image/30ahvW5L2XLlSHz3hgXI4Ci1RFVkEBrOUnobkJ1W.jpg'
        ]);

        Mobil::create([
            'merk' => 'Honda',
            'model' => 'Jazz',
            'tahun_produksi' => 2023,
            'warna' => 'Red',
            'nomor_polisi' => 'H 8888 O',
            'image' => 'car-image/TwEl6z4If7mlSf9VhtDn6GxrUXNikgw9mstg4wAD.png'
        ]);

        Mobil::create([
            'merk' => 'Toyota',
            'model' => 'Veloz',
            'tahun_produksi' => 2023,
            'warna' => 'Red',
            'nomor_polisi' => 'K 8998 P',
            'image' => 'car-image/dKliw1eOVx45ZXQmhryQBqmh0HimecJXO2idsgSR.jpg'
        ]);

// ============================================================================================

        Customer::create([
            'nama_depan' => 'Camela',
            'nama_belakang' => 'Devs',
            'telepon' => 6285236596684,
            'email' => 'camelaputri1@gmail.com',
            'alamat' => 'Semarang',
            'image' => 'customer_image/GiuAB37fF3pj8cNp9po1hmab0vTFzqLsahgRyB5T.png'
        ]);

        Customer::create([
            'nama_depan' => 'John',
            'nama_belakang' => 'Doe',
            'telepon' => 6285123456789,
            'email' => 'johndoe1@gmail.com',
            'alamat' => 'Jakarta',
            'image' => 'customer_image/ga605BGu2rEHSqXn7lvoVzbWj5ZKSv9JAemrDuqr.jpg'
        ]);

        Customer::create([
            'nama_depan' => 'Jane',
            'nama_belakang' => 'Smith',
            'telepon' => 6285234567890,
            'email' => 'janesmith2@gmail.com',
            'alamat' => 'Surabaya',
            'image' => 'customer_image/3Cv2Wdi0Z5g7W0g2oqeHvgsP9crILsiTSd0NxLEr.png'
        ]);

        Customer::create([
            'nama_depan' => 'Michael',
            'nama_belakang' => 'Johnson',
            'telepon' => 6285345678901,
            'email' => 'michaeljohnson3@gmail.com',
            'alamat' => 'Bandung',
            'image' => 'customer_image/MEYUlsefd5jPsaWd2bhV3aSMUS0xK942jdbO28jY.jpg'
        ]);

        Customer::create([
            'nama_depan' => 'Emily',
            'nama_belakang' => 'Jones',
            'telepon' => 6285456789012,
            'email' => 'emilyjones4@gmail.com',
            'alamat' => 'Yogyakarta',
            'image' => 'customer_image/H0wPWvsGkSA1rQkLqfxP3HsY42brkIKz475wQQyo.png'
        ]);

        Customer::create([
            'nama_depan' => 'Michael',
            'nama_belakang' => 'Brown',
            'telepon' => 6285567890123,
            'email' => 'michaelbrown5@gmail.com',
            'alamat' => 'Bali',
            'image' => 'customer_image/R96HIbsMV8I2nfhgimVpYbjFjqBLQNMNEbvFheDp.png'
        ]);

        Customer::create([
            'nama_depan' => 'Olivia',
            'nama_belakang' => 'Miller',
            'telepon' => 6285678901234,
            'email' => 'oliviamiller6@gmail.com',
            'alamat' => 'Makassar',
            'image' => 'customer_image/qiRHXBM3Kz5g9bJ1HcIJQNAJxC9rsRV8s7RMm86x.png'
        ]);

        Customer::create([
            'nama_depan' => 'Daniel',
            'nama_belakang' => 'Johnson',
            'telepon' => 6285789012345,
            'email' => 'danieljohnson7@gmail.com',
            'alamat' => 'Medan',
            'image' => 'customer_image/tpOFSsx2nPGm3YprPj1pwoNPtTgopV3Djsqt4Mwu.jpg'
        ]);

        Customer::create([
            'nama_depan' => 'Sophia',
            'nama_belakang' => 'Taylor',
            'telepon' => 6285890123456,
            'email' => 'sophiataylor8@gmail.com',
            'alamat' => 'Palembang',
            'image' => 'customer_image/JTtELqKUtRsd3GhW4NDgjPN3CbuQM4a54jHhcEmX.jpg'
        ]);

        Customer::create([
            'nama_depan' => 'Aiden',
            'nama_belakang' => 'Martinez',
            'telepon' => 6285901234567,
            'email' => 'aidenmartinez9@gmail.com',
            'alamat' => 'Malang',
            'image' => 'customer_image/40w5edm9JzqAtY9RnLffM4zlefZOpMepzsHvAJsl.png'
        ]);

// ============================================================================================

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

        DetailSewa::create([
           'customer_id' => 6,
           'mobil_id' => 5,
           'durasi_sewa' => 2,
           'tanggal_sewa' => date('2023-12-27'), 
           'tanggal_selesai' => date('2023-12-29'),
           'harga' => 200000
        ]);

        DetailSewa::create([
           'customer_id' => 5,
           'mobil_id' => 2,
           'durasi_sewa' => 9,
           'tanggal_sewa' => date('2023-12-06'), 
           'tanggal_selesai' => date('2023-12-09'),
           'harga' => 900000
        ]);

        DetailSewa::create([
           'customer_id' => 8,
           'mobil_id' => 2,
           'durasi_sewa' => 2,
           'tanggal_sewa' => date('2023-12-13'), 
           'tanggal_selesai' => date('2023-12-15'),
           'harga' => 200000
        ]);

        DetailSewa::create([
           'customer_id' => 3,
           'mobil_id' => 7,
           'durasi_sewa' => 6,
           'tanggal_sewa' => date('2023-12-14'), 
           'tanggal_selesai' => date('2023-12-20'),
           'harga' => 600000
        ]);

    }
}
