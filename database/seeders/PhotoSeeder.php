<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PhotoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('photos')->insert([
            'album_id' => '2',
            'title' => 'girl',
            'photo' => 'https://i.pinimg.com/originals/8f/39/1f/8f391fae7851fec85af4955f16ad7ad7.jpg'
        ]);
    }
}
