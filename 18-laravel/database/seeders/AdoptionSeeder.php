<?php

namespace Database\Seeders;
use App\Models\Adoption;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdoptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $adopt = new Adoption;
        $adopt->user_id = 2;
        $adopt->pet_id = 2;
        $adopt->save();

        $pet = \App\Models\Pet::find($adopt->pet_id);
        $pet->status = 1;
        $pet->save();
    }
}
