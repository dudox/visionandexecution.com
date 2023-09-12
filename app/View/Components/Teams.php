<?php

namespace App\View\Components;

use App\Data\TeamDetails;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use stdClass;

class Teams extends Component
{
    public $data;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->data = new TeamDetails();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $array = $this->data;
        $object = new stdClass();
        foreach ($array as $key => $value) {
            $object->$key = $value;
        }

        $teams = $object->team_details;



        return view('components.teams', compact('teams'));
    }
}
