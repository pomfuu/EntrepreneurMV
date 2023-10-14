<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'name' => 'Jiro Cosplay',
                'description' => 'Whisper of the Wind Ghibli',
                'price' => '150000',
                'image' => 'Jiro.png'
            ],
            [
                'name' => 'Kuronuma Cosplay',
                'description' => 'Kimi ni Todoke',
                'price' => '100000',
                'image' => 'Kuronuma.png'
            ],
            [
                'name' => 'Kujo Jotaro',
                'description' => 'Jojo no Kimyou na Bouken',
                'price' => '200000',
                'image' => 'KujoJotaro.png'
            ],
            [
                'name' => 'Hu Tao',
                'description' => 'Genshin Impact Hoyoverse',
                'price' => '250000',
                'image' => 'HuTao.png'
            ],
            [
                'name' => 'Killjoy',
                'description' => 'Valorant Killjoy Cosplay',
                'price' => '200000',
                'image' => 'Killjoy.png'
            ]
        ]);
    }
}
