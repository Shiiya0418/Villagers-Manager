<?php

namespace App\Http\Controllers\Manager;

use App\Http\Controllers\Controller;
use App\Models\Member;
use Illuminate\Http\Request;

class VillagerListController extends Controller
{
    public function show()
    {
        return showId(1);
    }
    public function showId($year)
    {
        $members = Member::all();
        return view('manager.villager_list', ['year' => $year, 'members' => $members]);
    }
}
