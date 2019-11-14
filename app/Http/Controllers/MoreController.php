<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\More;
class MoreController extends Controller
{
    public function create(Request $request){
        $more = More::UpdateOrInsert(
            [
                'user_id' => auth()->user()->id,
            ],
            [
                'loking' => $request->post('loking'),
                'descriptionfuture' => $request->post('descriptionfuture')
            ]
        );
        return redirect()->back();
    }
}
