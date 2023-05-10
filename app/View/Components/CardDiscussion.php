<?php

namespace App\View\Components;

use Illuminate\View\Component;

use DateTime;

class CardDiscussion extends Component
{
    public $id;
    public $authorId;
    public $authorName;
    public $title;
    public $description;
    public $likeCount;
    public $commentCount;
    public $created_at;

    public function __construct($forum)
    {
        $createdAt = new DateTime($forum->created_at);
        $formattedDate = $createdAt->format('M j, Y');

        $this->id = $forum->id;
        $this->authorId = $forum->user->id;
        $this->authorName = $forum->user->first_name.' '.$forum->user->last_name;
        $this->title = $forum->title;
        $this->description = $forum->description;
        $this->likeCount = $forum->likeCount;
        $this->commentCount = $forum->commentCount;
        $this->created_at = $formattedDate;
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
