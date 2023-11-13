<?php

namespace App\Http\Controllers\Villager;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Villager\CreateRequest;
use App\Models\Member;

class VillagerRegisterController extends Controller
{
    public function show()
    {
        return view('villager.villager-register');
    }

    public function create(CreateRequest $request)
    {
        $member = new Member;
        $villagerInfo = $request->getVillagerInfo();
        $member->student_number = $villagerInfo['student_number'];
        $member->name = $villagerInfo['name'];
        $member->year = $villagerInfo['year'];
        $member->nickname1 = $villagerInfo['nickname1'];
        $member->nickname2 = $villagerInfo['nickname2'];
        $member->main_instrument = $villagerInfo['main_instrument'];
        $member->sub_instrument = $villagerInfo['sub_instrument'];
        $member->role = $villagerInfo['role'];
        $member->save();
        return redirect()->route('villager.list', 1);
    }
}
