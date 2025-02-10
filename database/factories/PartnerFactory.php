<?php
namespace Database\Factories;

use App\Models\Partner;
use Illuminate\Database\Eloquent\Factories\Factory;

class PartnerFactory extends Factory
{
    protected $model = Partner::class;

    public function definition()
    {
        return [
            'name' => $this->faker->lastName(),
            'prenom' => $this->faker->firstName(),
            'tel' => $this->faker->phoneNumber(),
            'email' => $this->faker->unique()->safeEmail(),
            'modepass' => $this->faker->password(),
            'nomEntreprise' => $this->faker->company(),
            'adrees' => $this->faker->address(),
            'imagmenu' => $this->faker->imageUrl(),
        ];
    }
}
