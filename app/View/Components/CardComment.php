<?php

namespace App\View\Components;

use Illuminate\View\Component;

use DateTime;

class CardComment extends Component
{
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
        $date = new DateTime($this->created_at);
        $formattedDate = $date->format('M j, Y');
        \Log::info($comment->created_at);
        $this->comment = $comment->comment;
        $this->authorName = $comment->user->first_name.' '.$comment->user->last_name;
        $this->created_at = $formattedDate;
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
