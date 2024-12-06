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
        ]);

        Product::create([
            'name' => 'Chaise Ergonomique',
            'description' => 'Chaise ergonomique avec support lombaire.',
            'price' => 49.99,
            'quantity' => 50,
        ]);

        Product::create([
            'name' => 'Ordinateur Portable',
            'description' => 'Ordinateur portable avec 16GB de RAM et un processeur Intel i7.',
            'price' => 999.99,
            'quantity' => 25,
        ]);

        Product::create([
            'name' => 'Lampe de Bureau',
            'description' => 'Lampe LED avec plusieurs réglages de luminosité.',
            'price' => 29.99,
            'quantity' => 75,
        ]);

        Product::create([
            'name' => 'Sac à Dos',
            'description' => 'Sac à dos en toile avec plusieurs compartiments.',
            'price' => 39.99,
            'quantity' => 150,
        ]);

        Product::create([
            'name' => 'Montre Connectée',
            'description' => 'Montre connectée avec suivi de la fréquence cardiaque et GPS.',
            'price' => 129.99,
            'quantity' => 80,
        ]);

        Product::create([
            'name' => 'Casque Audio Bluetooth',
            'description' => 'Casque audio Bluetooth avec réduction de bruit active.',
            'price' => 199.99,
            'quantity' => 60,
        ]);

        Product::create([
            'name' => 'Clavier Mécanique',
            'description' => 'Clavier mécanique rétroéclairé pour gamer.',
            'price' => 89.99,
            'quantity' => 120,
        ]);

        Product::create([
            'name' => 'Souris Gamer',
            'description' => 'Souris ergonomique avec boutons programmables.',
            'price' => 59.99,
            'quantity' => 100,
        ]);

        Product::create([
            'name' => 'Imprimante 3D',
            'description' => 'Imprimante 3D pour professionnels et passionnés.',
            'price' => 499.99,
            'quantity' => 30,
        ]);

        Product::create([
            'name' => 'Bouteille Isotherme',
            'description' => 'Bouteille isotherme en acier inoxydable pour garder vos boissons chaudes ou froides.',
            'price' => 19.99,
            'quantity' => 200,
        ]);

        Product::create([
            'name' => 'Chaussures de Course',
            'description' => 'Chaussures de course confortables avec amorti supérieur.',
            'price' => 89.99,
            'quantity' => 70,
        ]);

        Product::create([
            'name' => 'Vélo Électrique',
            'description' => 'Vélo électrique avec batterie longue durée et cadre en aluminium.',
            'price' => 799.99,
            'quantity' => 20,
        ]);

        Product::create([
            'name' => 'Table de Salon',
            'description' => 'Table basse moderne en bois massif.',
            'price' => 129.99,
            'quantity' => 50,
        ]);

        Product::create([
            'name' => 'Coffret Parfum Homme',
            'description' => 'Coffret avec 3 parfums masculins de marque.',
            'price' => 49.99,
            'quantity' => 150,
        ]);

        Product::create([
            'name' => 'Écouteurs Sans Fil',
            'description' => 'Écouteurs sans fil avec autonomie de 12 heures.',
            'price' => 59.99,
            'quantity' => 120,
        ]);

        Product::create([
            'name' => 'Grille-Pain',
            'description' => 'Grille-pain à 4 tranches avec réglage de température.',
            'price' => 49.99,
            'quantity' => 100,
        ]);

        Product::create([
            'name' => 'Télévision 4K',
            'description' => 'Télévision 4K avec écran LED de 55 pouces.',
            'price' => 499.99,
            'quantity' => 40,
        ]);

        Product::create([
            'name' => 'Sèche-Cheveux Professionnel',
            'description' => 'Sèche-cheveux avec plusieurs réglages de chaleur et de vitesse.',
            'price' => 69.99,
            'quantity' => 85,
        ]);

        Product::create([
            'name' => 'Chaise de Bureau',
            'description' => 'Chaise de bureau avec accoudoirs réglables et appui lombaire.',
            'price' => 149.99,
            'quantity' => 60,
        ]);
    }
}
