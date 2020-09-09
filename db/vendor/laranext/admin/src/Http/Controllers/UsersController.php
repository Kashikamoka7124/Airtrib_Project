<?php

namespace Laranext\Admin\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index()
    {
        return view('views::users.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \App\User  $user
     * @return View
     */
    public function create(User $user)
    {
        return view('views::users.form', compact('user'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return View
     */
    public function show(User $user)
    {
        return view('views::users.detail', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return View
     */
    public function edit(User $user)
    {
        return view('views::users.form', compact('user'));
    }
}
