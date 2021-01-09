<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Ad;
use Illuminate\Database\Eloquent\Factories\Factory;

class AdFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Ad::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id'=> User::all()->random()->id,
            'coaching_date' => $this->faker->dateTimeBetween($startDate = '+4 days', $endDate = '+1 year', $timezone = null),
            'description' => $this->faker->text(200),
            'pending' => false,
            'finished' => false,
            'ad_rating' => $this->faker->numberBetween(0, 5),
            'duration' => $this->faker->numberBetween(1, 5),
            'hourly_rate' => $this->faker->numberBetween(1 , 20),
            'rated' => true,
            'student_id' => User::all()->random()->id,
            'student_rank' => $this->faker->numberBetween(1, 9),
            'comments' => $this->faker->text(100)
        ];
    }
}
