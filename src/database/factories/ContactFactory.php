<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Contact;

class ContactFactory extends Factory
{

    protected $model =Contact::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'category_id' => Category::factory(),
        'first_name' => $this->faker->firstName(),
        'last_name' => $this->faker->lastName(),
        'gender' => $this->faker->randomElement(['1','2','3']),
        'email' => $this->faker->safeEmail(),
        'tel' => $this->faker->phoneNumber(),
        'address' => $this->faker->address(),
        'building' => $this->faker->secondaryAddress(),
        'detail' => $this->faker->text(50)
        ];
    }
}
