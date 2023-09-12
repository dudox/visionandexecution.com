<?php

namespace App\Http\Controllers;

use App\Data\TeamDetails;
use Illuminate\Http\Request;
use stdClass;

class TeamsController extends Controller
{
    public function team_details($name)
    {
        $array = new TeamDetails();
        $object = new stdClass();
        foreach ($array as $key => $value) {
            $object->$key = $value;
        }

        $teams = $object->team_details;

        $details = null;

        foreach ($teams as $team) {
            if ($team['slug'] == $name) {
                $details = $team;
            }
        }

        return view('pages.teams.team_details', compact('details'));
    }
}
