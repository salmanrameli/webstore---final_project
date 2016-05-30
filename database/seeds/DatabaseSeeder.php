<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Eloquent::unguard();

        $this->call('BarangTableSeeder');
        $this->command->info('Barang table seeded!');
        $this->call('UserTableSeeder');
        $this->command->info('User table seeded!');
    }
}
