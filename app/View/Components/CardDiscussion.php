<?php

namespace App\View\Components;

use Illuminate\View\Component;

use DateTime;
use Illuminate\Support\Facades\Auth;

use App\Models\Forum;
use App\Models\Like;

class CardDiscussion extends Component
{
    public $id;
    public $authorId;
    public $authorName;
    public $title;
    public $description;
    public $likeCount;
    public $commentCount;
    public $liked_by_user;
    public $created_at;

    public function __construct($forum)
    {
        $liked = Like::where('user_id', '=', Auth::user()->id)
                    ->where('likeable_type', '=',Forum::class)
                    ->where('likeable_id', '=', $forum->id)
                    ->first();
        $this->liked_by_user = !is_null($liked);

        $this->id = $forum->id;
        $this->authorId = $forum->user->id;
        $this->authorName = $forum->user->first_name.' '.$forum->user->last_name;
        $this->title = $forum->title;
        $this->description = $forum->description;
        $this->likeCount = $forum->likeCount;
        $this->commentCount = $forum->commentCount;
        $this->created_at = $forum->created_at;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.card-discussion');
    }
}
