<?php

namespace Database\Factories;

use App\Models\LiveEvent;
use App\Models\Band;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Band>
 */
class BandFactory extends Factory
{
    protected $model = Band::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $bandName = array("Mrs. Green Apple", "ONE OK ROCK", "ヨルシカ", "SIAM SHADE", "聖飢魔II");
        return [
            'live_event_id' => LiveEvent::all()->random()->id,
            'band_name' => $this->faker->randomElement($bandName),
        ];
    }
}
