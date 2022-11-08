<?php

namespace App\View\Components;

use Illuminate\View\Component;

class AppLayout extends Component
{
  /**
   * Create a new component instance.
   *
   * @return void
   */

  public string $title;
  public ?string $style = null;

  public function __construct($title = null)
  {
    $this->title = $title ?? "Parsinta App";
  }

  /**
   * Get the view / contents that represent the component.
   *
   * @return \Illuminate\Contracts\View\View|\Closure|string
   */
  public function render()
  {
    return view('layouts.app');
  }
}