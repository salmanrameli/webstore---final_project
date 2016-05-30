<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class BarangTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('barang')->delete();

        DB::table('barang')->insert([
            'barang_nama'=>'Generic Product 1',
            'barang_harga'=>'10',
            'barang_deskripsi'=>'First generic product in the store',
            'barang_supplier'=>'Supplier 1',
            'barang_stok'=>'10',
            'barang_jenis'=>'Generic',
        ]);

        DB::table('barang')->insert([
            'barang_nama'=>'Generic Product 2',
            'barang_harga'=>'5',
            'barang_deskripsi'=>'Second generic product in the store',
            'barang_supplier'=>'Supplier 2',
            'barang_stok'=>'5',
            'barang_jenis'=>'Generic',
        ]);

        DB::table('barang')->insert([
            'barang_nama'=>'Non-Generic Product 1',
            'barang_harga'=>'2',
            'barang_deskripsi'=>'First non-generic product in the store',
            'barang_supplier'=>'Supplier 3',
            'barang_stok'=>'5',
            'barang_jenis'=>'Non-Generic',
        ]);
    }
}
