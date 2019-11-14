<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skill;

class SkillController extends Controller
{
    public function create(Request $request){
       $skill = Skill::UpdateOrInsert(
            [
                'name' => $request->post('name')
            ],
            [
                'level' => $request->post('level'),
                'user_id' => auth()->user()->id
            ]
        );
        return redirect()->back();
    }
}
