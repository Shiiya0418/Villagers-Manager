<?php

namespace App\Http\Controllers\Manager;

use App\Http\Controllers\Controller;
use App\Models\Member;
use Illuminate\Http\Request;

class VillagerListController extends Controller
{
    public function show($year)
    {
        // $members = Member::all();
        $members = Member::where('year', $year)->orderBy('student_number')->get();
        return view('manager.villager-list', ['year' => $year, 'members' => $members]);
    }
}
