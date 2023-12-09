<?php

namespace App\Http\Controllers\Villager;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\LiveEvent;

class VillagerTopController extends Controller
{
    public function show()
    {
        $liveEvents = LiveEvent::all();
        return view('villager.top', ['liveEvents' => $liveEvents]);
    }
}
