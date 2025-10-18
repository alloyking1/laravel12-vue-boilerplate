<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Services\BusinessService;

class BusinessController extends Controller
{
    public function index(BusinessService $businessService)
    {
        $business = $businessService->getBusiness();
        return Inertia::render('business/BusinessDashboard',[
            'business' => $business,
        ]);
    }

    public function store(Request $request, $id = null){
        // update or create
        return redirect()->back()->with('message', 'Business created successfully');
    }
}
