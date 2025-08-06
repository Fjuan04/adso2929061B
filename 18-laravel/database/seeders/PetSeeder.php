<?php

namespace Database\Seeders;
use App\Models\Pet;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pet = new Pet;
        $pet->name     = 'Firulais';
        $pet->kind     = 'Dog';
        $pet->weight   = 8.5;
        $pet->age      = 3;
        $pet->breed    = 'Shiba Inu';
        $pet->location = 'Tokyo';
        $pet->description = 'Very charming dog.';
        $pet->save();

        $pet = new Pet;
        $pet->name        = 'Killer';
        $pet->kind        = 'Dog';
        $pet->weight      = 5;
        $pet->age         = 4;
        $pet->breed       = 'German Shepherd';
        $pet->location    = 'Berlin';
        $pet->description = 'Its a good boy.';
        $pet->save();

        $pet = new Pet;
        $pet->name       = 'Michi';
        $pet->kind        = 'Cat';
        $pet->weight      = 1.5;
        $pet->age         = 7;
        $pet->breed       = 'Persa';
        $pet->location    = 'Abu Dhabi';
        $pet->description = 'Only chicken food.';
        $pet->save();

        $pet = new Pet;
        $pet->name        = 'Chanchi';
        $pet->kind        = 'Pig';
        $pet->weight      = 15.8;
        $pet->age         = 2;
        $pet->breed       = 'Mini';
        $pet->location    = 'New York';
        $pet->description = 'All kind of food.';
        $pet->save();

    }
}
