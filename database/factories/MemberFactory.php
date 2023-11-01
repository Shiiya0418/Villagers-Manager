<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Member>
 */
class MemberFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $instrument = array("vocal", "guitar", "bass", "drums", "keyboard");
        $role = array("president",
                      "sub_president",
                      "guitar_PA",
                      "bass_PA",
                      "vocal_PA",
                      "drum_PA",
                      "illumination",
                      "camp",
                      "accounting");
        $year = array(1, 2, 3, 4, 5, 6);
        return [
            'student_number' => $this->faker->isbn10(),
            'name' => $this->faker->name(),
            'nickname1' => $this->faker->name(),
            'nickname2' => $this->faker->name(),
            'main_instrument' => $this->faker->randomElement($instrument),
            'sub_instrument' => $this->faker->randomElement($instrument),
            'role' => $this->faker->randomElement($role),
            'year' => $this->faker->randomElement($year)
        ];
    }
}
