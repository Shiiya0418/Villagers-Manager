<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


use App\Models\LiveEvent;

class Band extends Model
{
    use HasFactory;
    /**
     * Get the liveEvents that owns the Band
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function liveEvents(): BelongsTo
    {
        return $this->belongsTo(LiveEvent::class);
    }
}
