<?php

namespace App\View\Components;

use Illuminate\View\Component;

use DateTime;

class CardComment extends Component
{
    public $id;
    public $authorId;
    public $authorName;
    public $comment;
    public $created_at;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($comment)
    {
        $createAt = new DateTime($comment->created_at);
        $formatted = $createAt->format('M j, Y');
        $this->id = $comment->id;
        $this->authorId = $comment->user_id;
        $this->comment = $comment->comment;
        $this->authorName = $comment->user->first_name.' '.$comment->user->last_name;
        $this->created_at = $formatted;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.card-comment');
    }
}
