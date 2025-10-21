<?php
namespace App\Services;

class TeamService {
    public function getTeams() {

        return $teamOwner = auth()->user()->isTeamOwner;
    }
}