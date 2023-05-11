<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Scholarship;

use App\Http\Resources\V1\UserResource;
use App\Http\Resources\V1\ScholarshipResource;
use App\Http\Resources\V1\ForumResource;
use App\Http\Resources\V1\ScholarshipCollection;
use App\Http\Resources\V1\ForumCollection;

use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index($user_id) {
        $user = User::find($user_id);
        $starred = [];

        $likes = $user->likes;

        foreach ($likes as $like) {
            $post = $like->likeable;

            if ($post->likeable_type === Scholarship::class) {
                array_push($starred, new ScholarshipResource($post));
            } else {
                array_push($starred, new ForumResource($post));
            }
        }

        return view('profile', [
            'user' => new UserResource($user),
            'scholarships' => new ScholarshipCollection($user->scholarships),
            'forums' => new ForumCollection($user->forums),
            'starred' => $starred
        ]);
    }
}