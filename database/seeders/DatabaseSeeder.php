<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;
    public function run(): void
    {
        $this->call([
            KucingSeeder::class,
            UserSeeder::class,
            UserKucingSeeder::class,
            Konten5Seeder::class,
        ]);
    }
}
