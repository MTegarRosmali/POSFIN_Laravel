<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\About;
class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        About::create([
            'judul' => 'POSFIN',
            'subjudul' => 'Lorem ipsum',
            'deskripsi_1' => 'logo.png',
            'deskripsi_2' => 'Lorem Ipsum',
            'kelebihan_1' => 'Lorem Ipsum',
            'kelebihan_2' => 'Lorem Ipsum',
            'kelebihan_3' => 'Lorem Ipsum',
            'kelebihan_4' => 'Lorem Ipsum',
        ]);
    }
}
