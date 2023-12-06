<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

use App\Models\Band;

class LiveEvent extends Model
{
    use HasFactory;

    /**
     * Get all of the bands for the LiveEvent
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function bands(): HasMany
    {
        return $this->hasMany(Band::class);
    }
}
