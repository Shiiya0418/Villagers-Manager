<?php

namespace App\Http\Controllers\Manager;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Manager\CreateRequest;
use App\Models\LiveEvent;

class LiveEventRegisterController extends Controller
{
    public function show() {
        return view('manager.live-register');
    }

    public function create(CreateRequest $request)
    {
        $liveEvent = new LiveEvent;
        $liveEventInfo = $request->getLiveEventInfo();
        $liveEvent->live_name = $liveEventInfo['live_name'];
        $liveEvent->event_date = $liveEventInfo['event_date'];
        $liveEvent->save();
        return redirect()->route('manager.live-event.list');
    }
}
