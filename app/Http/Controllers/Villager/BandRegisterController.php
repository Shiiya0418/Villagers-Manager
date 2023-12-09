<?php

namespace App\Http\Controllers\Villager;

use App\Http\Controllers\Controller;
use App\Http\Requests\Villager\BandCreateRequest;
use App\Models\Band;
use App\Models\LiveEvent;
use App\Models\BandMember;

class BandRegisterController extends Controller
{
    public function show()
    {
        return view('villager.band-register');
    }

    public function create(BandCreateRequest $request)
    {
        $band = new Band;
        $bandInfo = $request->getBandInfo();
        $band->live_event_id = $bandInfo['live-event-id'];
        $band->band_name = $bandInfo['band-name'];
        $members = $bandInfo['members'];
        return redirect()->route('https://www.google.com');
    }
}
