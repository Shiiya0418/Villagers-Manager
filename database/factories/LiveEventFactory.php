<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\LiveEvent>
 */
class LiveEventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $liveName = array("新歓", "増コン", "合宿ライブ", "合コン", "突コン", "学祭", "正コン", "追いコン", "集コン");
        return [
            'live_name' => $this->faker->randomElement($liveName),
            'event_date' => $this->faker->date()
        ];
    }
}
