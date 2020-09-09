<?php

namespace App\Http\Controllers\Api;

use App\Donation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DonationsController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'stripe' => 'required',
            'amount' => 'required|numeric',
            'organization' => 'required',
            'organizations' => 'required_if:organization,all',
        ]);

        if ($request->organization == 'all') {
            Donation::create([
                'customer_id' => auth()->user()->customer->id,
                'organization_1' => $request->organizations[0] ?? null,
                'organization_2' => $request->organizations[1] ?? null,
                'organization_3' => $request->organizations[2] ?? null,
                'amount' => $request->amount,
            ]);
        }
        else {
            Donation::create([
                'customer_id' => auth()->user()->customer->id,
                'organization_id' => $request->organization,
                'amount' => $request->amount,
            ]);
        }

        return 'make donation done';
    }
}
