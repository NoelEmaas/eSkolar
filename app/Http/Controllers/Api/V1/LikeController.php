<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Like;
use App\Models\Scholarship;
use App\Models\Forum;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    public function addLike(Request $request)
    {
        $like = Like::create([
            'user_id' => Auth::id(),
            'likeable_id' => $request->id,  
            'likeable_type' => ($type == 'scholarship') ? Scholarship::class : Forum::class
        ]);

        return response()->json([
            'status' => 200,
            'message' => 'Added like'
        ]);
    }

    public function removeLike(Request $request)
    {
        $like = Like::find($request->like_id);
        $like->delete();

        return response()->json([
            'status' => 200,
            'message' => 'Deleted like'
        ]);
    }
}
