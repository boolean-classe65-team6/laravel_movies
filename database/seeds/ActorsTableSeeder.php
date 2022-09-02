<?php

use Illuminate\Database\Seeder;
use App\Actor;

class ActorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $names = ["Enio", "Armando", "Marius", "Alessio", "Francesco"];
        // $surnames = ["Capurso", "Silvera", "Mazzella", "Loizzo", "Leica"];

        foreach ($names as $name) {
            Actor::create([
                "name" => $name,
                "surname" => $name,
            ]);
        }
    }

}
