<?php

namespace App\Http\Controllers\Manager;

use App\Http\Controllers\Controller;
use App\Models\Member;
use Illuminate\Http\Request;

class VillagerListController extends Controller
{
    public function showId($year)
    {
        $members = Member::all();
        return view('manager.villagers_list', ['year' => $year, 'members' => $members]);
    }
}
