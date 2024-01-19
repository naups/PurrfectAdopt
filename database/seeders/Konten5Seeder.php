<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Konten5Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('contents')->insert([
            'judul' => 'Artikel 1',
            'penulis' => 'Penulis Artikel 1',
            'isi' => 'n',
            'status' => false,
            'galery' =>'img/artikel1.jpg',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('contents')->insert([
            'judul' => 'Artikel 2',
            'penulis' => 'Penulis Artikel 2',
            'isi' => 'm',
            'status' => true,
            'galery' =>'img/artikel1.jpg',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('contents')->insert([
            'judul' => 'Artikel 3',
            'penulis' => 'Penulis Artikel 3',
            'isi' => 'p',
            'status' => false,
            'galery' =>'img/artikel1.jpg',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('contents')->insert([
            'judul' => 'Artikel 4',
            'penulis' => 'Penulis Artikel 4',
            'isi' => 'q',
            'status' => true,
            'galery' =>'img/artikel1.jpg',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('contents')->insert([
            'judul' => 'Artikel 5',
            'penulis' => 'Penulis Artikel 5',
            'isi' => 'q',
            'status' => false,
            'galery' =>'img/artikel1.jpg',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('contents')->insert([
            'judul' => 'Artikel 6',
            'penulis' => 'Penulis Artikel 6',
            'isi' => 'q',
            'status' => true,
            'galery' =>'img/artikel1.jpg',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('contents')->insert([
            'judul' => 'Artikel 7',
            'penulis' => 'Penulis Artikel 7',
            'isi' => 'q',
            'status' => true,
            'galery' =>'img/artikel1.jpg',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('contents')->insert([
            'judul' => 'Artikel 8',
            'penulis' => 'Penulis Artikel 8',
            'isi' => 'q',
            'status' => true,
            'galery' =>'img/artikel1.jpg',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('contents')->insert([
            'judul' => 'Artikel 9',
            'penulis' => 'Penulis Artikel 9',
            'isi' => 'q',
            'status' => true,
            'galery' =>'img/artikel1.jpg',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
    }
}
