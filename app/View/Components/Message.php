<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Message extends Component
{
    public $text;
    public $userName;
    public $createdAt;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($text, $userName, $createdAt)
    {
        $this->text = $text;
        $this->userName = $userName;
        $this->createdAt = $createdAt;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.message');
    }
}
