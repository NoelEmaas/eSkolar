<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Comment;
use App\Models\Scholarship;
use App\Models\Forum;

use App\Http\Resources\V1\CommentResource;

use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class CommentController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $comment = new CommentResource(Comment::create([
            'comment' => $request->comment,
            'user_id' => Auth::id(),
            'commentable_id' => $request->id,
            'commentable_type' => ($request->type == 'scholarship') ? Scholarship::class : Forum::class
        ]));

        return redirect()->back()->with('Succesfully added a comment to a post!');
    }

    public function show(Comments $comments)
    {
        //
    }

    public function edit(Comments $comments)
    {
        //
    }

    public function update(Request $request, Comments $comments)
    {
        //
    }

    public function destroy(Request $request)
    {
        $comment = Comment::find($request->comment_id);
        $comment->delete();
        return redirect()->back()->with('Successfully deleted comment');
    }
}
