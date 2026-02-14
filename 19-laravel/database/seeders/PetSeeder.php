<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pet;

class PetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        
        $pet = new Pet();
        $pet->name = "Teo";
        $pet->kind = "Dog";
        $pet->weight = 16.5;
        $pet->age = 2;
        $pet->breed = 'Cocker';
        $pet->location = 'Manizales';
        $pet->description = 'Perrito muy jugueton';
        $pet->save();

        // Registro 1
        $pet1 = new Pet();
        $pet1->name = "Luna";
        $pet1->kind = "Dog";
        $pet1->weight = 12.3;
        $pet1->age = 4;
        $pet1->breed = 'Beagle';
        $pet1->location = 'Pereira';
        $pet1->description = 'Muy tranquila y le encanta dormir al sol';
        $pet1->save();

        // Registro 2
        $pet2 = new Pet();
        $pet2->name = "Max";
        $pet2->kind = "Dog";
        $pet2->weight = 28.0;
        $pet2->age = 3;
        $pet2->breed = 'Golden Retriever';
        $pet2->location = 'Medellín';
        $pet2->description = 'Súper amigable, ideal para niños';
        $pet2->save();

        // Registro 3
        $pet3 = new Pet();
        $pet3->name = "Mora";
        $pet3->kind = "Dog";
        $pet3->weight = 5.2;
        $pet3->age = 1;
        $pet3->breed = 'Yorkshire';
        $pet3->location = 'Manizales';
        $pet3->description = 'Pequeña pero con mucha energía';
        $pet3->save();

        // Registro 4
        $pet4 = new Pet();
        $pet4->name = "Rocky";
        $pet4->kind = "Dog";
        $pet4->weight = 22.1;
        $pet4->age = 5;
        $pet4->breed = 'Border Collie';
        $pet4->location = 'Bogotá';
        $pet4->description = 'Extremadamente inteligente y obediente';
        $pet4->save();
    }
}
