<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Http\RedirectResponse;
use Inertia\Response;
use App\Services\TeamService;

class TeamController extends Controller
{
    // public function create(Request $request, TeamService $teamService): RedirectResponse|Response
    // {
    //     $teamOwner = $teamService->getTeams();

    //     // 
    //     if($teamOwner->isEmpty()) {
    //         return inertia::render('teams/Create',[
    //             'isTeamOwner' => $teamOwner
    //         ]);
    //     }else{
    //         return inertia::render('teams/dashboard',[
    //             'isTeamOwner' => $teamOwner
    //         ]);
    //     }
    // }

    public function create(Request $request, TeamService $teamService): RedirectResponse|Response
    {
        $teams = $teamService->getTeams();
        $hasTeam = $teams->isNotEmpty();

        return Inertia::render(
            $hasTeam ? 'teams/Dashboard' : 'teams/Create',
            [
                'teams' => $teams,
                'isTeamOwner' => $hasTeam,
            ]
        );
    }
}
