<?php

namespace App\View\Components;

use Illuminate\View\Component;

use Illuminate\Support\Facades\Auth;

use App\Models\Scholarship;
use App\Models\Like;

class CardPost extends Component
{
    public $id;
    public $authorId;
    public $authorName;
    public $benefactor;
    public $program;
    public $amount_min;
    public $amount_max;
    public $description;
    public $like_count;
    public $liked_by_user;
    public $comment_count;
    public $created_at;

    public $author_scholarship_count;
    public $author_forum_count;
    public $author_like_count;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($scholarship)
    {
        $liked = Like::where('user_id', '=', Auth::user()->id)
                    ->where('likeable_type', '=', Scholarship::class)
                    ->where('likeable_id', '=', $scholarship->id)
                    ->first();
        $this->liked_by_user = !is_null($liked);

        $this->id = $scholarship->id;
        $this->benefactor = $scholarship->benefactor;
        $this->program = $scholarship->program;
        $this->amount_min = number_format($scholarship->amount_min, 2);
        $this->amount_max = number_format($scholarship->amount_max, 2);
        $this->description = $scholarship->description;
        $this->like_count = $scholarship->like_count;
        $this->comment_count = $scholarship->comment_count;

        $author = $scholarship->user;
        $this->authorId = $author->id;
        $this->authorName = $author->first_name.' '.$author->last_name;
        $this->author_scholarship_count = $author->scholarship_count;
        $this->author_forum_count = $author->forum_count;
        $this->author_like_count = $author->like_count;

        $this->created_at = $scholarship->created_at;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.card-post');
    }
}
