<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Services\BusinessService;
use App\Http\Requests\BusinessControllerRequest;

class BusinessController extends Controller
{
    public function index(BusinessService $businessService)
    {
        $business = $businessService->getBusiness();
        return Inertia::render('business/BusinessDashboard',[
            'business' => $business,
        ]);
    }

    public function store(BusinessControllerRequest $request, BusinessService $businessService, $id = null){

        $newBusiness = $businessService->updateOrCreate($request, $id);
        return redirect()->back()->with('message', 'Business created successfully');
    }
}
