<?php

namespace App\Services;

class BusinessService
{
    public function getBusiness()
    {
        return $teamOwner = auth()->user()->hasBusiness;
    }
}