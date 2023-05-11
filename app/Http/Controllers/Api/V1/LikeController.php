<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Like;
use App\Models\Scholarship;
use App\Models\Forum;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use DB;

class LikeController extends Controller
{
    public function store(Request $request)
    {
        $like = Like::create([
            'user_id' => Auth::id(),
            'likeable_id' => $request->id,  
            'likeable_type' => ($request->type == 'scholarship') ? Scholarship::class : Forum::class
        ]);

        return redirect()->back()->with('Success', 'Liked post');
    }

    public function destroy(Request $request)
    {
        $like = Like::where('user_id', '=', Auth::user()->id)
                    ->where('likeable_id', '=', $request->id)
                    ->where('likeable_type', '=', ($request->type == 'scholarship') ? Scholarship::class : Forum::class)
                    ->first();

        $like->delete();

        return redirect()->back()->with('Success', 'Unliked post');
    }
}
