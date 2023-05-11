<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Forum;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Resources\V1\ForumResource;
use App\Http\Resources\V1\ForumCollection;
use App\Filters\V1\ForumQuery;
use App\Http\Requests\V1\StoreForumRequest;

use Illuminate\Support\Facades\Auth;

class ForumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return view('forums', ['forums' => new ForumCollection(Forum::all())]);
    }

    public function create()
    {
        //
    }

    public function store(StoreForumRequest $request)
    {
        $forum = new ForumResource(Forum::create([
            'title' => $request->title,
            'description' => $request->description,
            'user_id' => Auth::id()
        ]));
        return redirect('forums')->with('Success', 'Successfully created forum');
    }

    public function show(string $forum_id)
    {
        return view('viewForum', ['forum' => new ForumResource(Forum::find($forum_id))]);
    }

    public function edit(Forum $forum)
    {
        //
    }

    public function update(Request $request, Forum $forum)
    {
        //
    }

    public function destroy(Request $request)
    {
        $forum = Forum::find($request->forum_id);
        $forum->delete();
        return redirect()->back()->with('Success', 'Successfully deleted forum');
    }
}
