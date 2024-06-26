<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Categorie;

class Categorieen extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $categorieen = [
            ['id' => 1, 'naam' => 'AGF', 'omschrijving' => 'Aardappelen groente en fruit'],
            ['id' => 2, 'naam' => 'KV', 'omschrijving' => 'Kaas en vleeswaren'],
            ['id' => 3, 'naam' => 'ZPE', 'omschrijving' => 'Zuivel plantaardig en eieren'],
            ['id' => 4, 'naam' => 'BB', 'omschrijving' => 'Bakkerij en Banket'],
            ['id' => 5, 'naam' => 'FSKT', 'omschrijving' => 'Frisdranken, sappen, koffie en thee'],
            ['id' => 6, 'naam' => 'PRW', 'omschrijving' => 'Pasta, rijst en wereldkeuken'],
            ['id' => 7, 'naam' => 'SSKO', 'omschrijving' => 'Soepen, sauzen, kruiden en olie'],
            ['id' => 8, 'naam' => 'SKCC', 'omschrijving' => 'Snoep, koek, chips en chocolade'],
            ['id' => 9, 'naam' => 'BVH', 'omschrijving' => 'Baby, verzorging en hygiëne'],
        ];

        foreach ($categorieen as $categorieen) {
            Categorie::create($categorieen);
        }
    }
}