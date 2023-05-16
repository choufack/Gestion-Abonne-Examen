<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\abonne>
 */
class AbonneFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
                "Nom" =>$this -> faker ->lastName,
                "Prenom" => $this -> faker ->firstName,
                "Age" => rand(21,100),
                "Profession" => rand(1, 20),
                "Rue" => rand(1,20),
                "Code_Postal" => rand(1,20),
                "Ville" => rand(1,20),
                "Pays" => rand(1,20),
                "id_motivation"=> rand(1,20),
                "Telephone" =>$this -> faker ->phoneNumber,
                "Email" => $this -> faker ->email,
            ];
        
    }
}
