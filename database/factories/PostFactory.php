<?php

namespace Database\Factories;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PostFactory extends Factory
{
    protected $model = User::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
                //'title' => $this->faker->title,
                //'description' => $this->faker->text,
                'first_name' => $this->faker->name,
                'last_name' => $this->faker->text,
                'email' => $this->faker->email,
                'phone_number' => $this->faker->phone_number,
                'dob' => $this->faker->date,
                'profession' => $this->faker->text,
                'remember_token' => $this->faker->text,
        ];
    }
}
