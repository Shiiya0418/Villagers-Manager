<?php

namespace App\Http\Controllers\Manager;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\LiveEvent;

class LiveEventListController extends Controller
{
    public function show() {
        $liveEvents = LiveEvent::all();
        return view('manager.live-event-list', ['live_events' => $liveEvents]);
    }
}
