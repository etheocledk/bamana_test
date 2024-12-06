<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name' => 'T-shirt Bleu',
            'description' => 'Un T-shirt bleu de haute qualité.',
            'price' => 19.99,
            'quantity' => 100,
            'image_path' => 'images/tshirt_bleu.jpg',
        ]);

        Product::create([
            'name' => 'Chaise Ergonomique',
            'description' => 'Chaise ergonomique avec support lombaire.',
            'price' => 49.99,
            'quantity' => 50,
            'image_path' => 'images/chaise_ergonomique.jpg',
        ]);

        Product::create([
            'name' => 'Ordinateur Portable',
            'description' => 'Ordinateur portable avec 16GB de RAM et un processeur Intel i7.',
            'price' => 999.99,
            'quantity' => 25,
            'image_path' => 'images/ordinateur_portable.jpg',
        ]);

        Product::create([
            'name' => 'Lampe de Bureau',
            'description' => 'Lampe LED avec plusieurs réglages de luminosité.',
            'price' => 29.99,
            'quantity' => 75,
            'image_path' => 'images/lampe_bureau.jpg',
        ]);

        Product::create([
            'name' => 'Sac à Dos',
            'description' => 'Sac à dos en toile avec plusieurs compartiments.',
            'price' => 39.99,
            'quantity' => 150,
            'image_path' => 'images/sac_a_dos.jpg',
        ]);
    }
}
