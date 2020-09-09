<?php

namespace App\Http\Controllers;

use App\Organization;

class ShowHomepage extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
        $organizations = Organization::limit(8)->get();

        return view('home', get_defined_vars());
    }
}
