<?php

namespace Database\Factories;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CustomerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Customer::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $gender = $this->faker->randomElement(['male', 'female']);
        return [
            'firstname' => $this->faker->firstName,
            'lastname' => $this->faker->lastName,
            'middlename' => $this->faker->lastName,
            'age' =>$this->faker->randomNumber(2),
            'gender'=>$gender,
            'address' => $this->faker->address,
            'contact_number' => $this->faker->phoneNumber,
            'image_url' =>$this->faker->imageUrl(350,350),
        ];
    }
}
