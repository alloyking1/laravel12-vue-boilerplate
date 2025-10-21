<?php

namespace App\Services;

class BusinessService
{
    public function getBusiness($id = null)
    {
        return $teamOwner =  auth()->user()->hasBusiness;
    }

    public function updateOrCreate($data, $id = null)
    {
        $newTeam = getBusiness::updateOrCreate(
            ['id' => $id],
            [
                'name' => $data['name'],
                'email' => $data['email'],
                'company_size' => $data['company_size'],
                'description' => $data['description'],
            ]
        );

        return $newTeam;
    }
}