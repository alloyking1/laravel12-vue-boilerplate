<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Http\RedirectResponse;
use Inertia\Response;
use App\Services\TeamService;

class TeamController extends Controller
{
    public function create(Request $request, TeamService $teamService): RedirectResponse|Response
    {
        $teams = $teamService->getTeams();
        $hasTeam = $teams->isNotEmpty();

        return Inertia::render('business/teams/Create',
            [
                'teams' => $teams,
                'isTeamOwner' => $hasTeam,
            ]
        );
    }
}
