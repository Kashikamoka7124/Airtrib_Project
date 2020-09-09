<?php

namespace Laranext\Admin\Http\Controllers\Api;

use Illuminate\Http\Request;
use Laranext\IndexCollection;
use App\User;
use App\Http\Controllers\Controller;
use Laranext\Admin\Filters\UserFilters;
use Laranext\Admin\Fields\UserFields;
use Laranext\Admin\Requests\UserRequest;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \Laranext\Admin\Filters\UserFilters  $filters
     * @return \Illuminate\Http\Response
     */
    public function index(UserFilters $filters)
    {
        return new IndexCollection(
            User::doesntHave('customer')->filter($filters)->simplePaginate(),
            UserFields::class
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function create(User $user)
    {
        return new UserFields($user);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, User $user)
    {
        return new UserRequest($request, $user);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return $user;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return new UserFields($user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        return new UserRequest($request, $user);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        User::destroy($request->items);

        return [
            'message' => count($request->items) > 1
                ? 'Users Deleted Successfully!'
                : 'User Deleted Successfully!'
        ];
    }
}
