<?php

namespace Laranext\Admin\Http\Controllers;

use App\Booking;
use App\Customer;
use App\Organization;
use App\Http\Controllers\Controller;

class Dashboard extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @return View
     */
    public function __invoke()
    {
        $customers = Customer::count();
        $bookings = Booking::count();
        $organizations = Organization::count();

        return view('views::dashboard', get_defined_vars());
    }
}
