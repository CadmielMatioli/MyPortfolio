<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skill;

class SkillController extends Controller
{
    public function create(Request $request){
        Skill::UpdateOrInsert(
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
    
    public function destroy(Skill $skill){
        $skill->delete();
        return redirect()->back();
    }

}
