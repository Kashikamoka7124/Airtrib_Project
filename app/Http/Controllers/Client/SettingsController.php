<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class SettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $settings = [
            'meta' => [
                'title' => 'Account Settings'
            ],
            'fields' => [
                [
                    'component' => 'client-form-input',
                    'label' => 'Last password',
                    'name' => 'last_password',
                    'type' => 'password',
                ],
                [
                    'component' => 'client-form-input',
                    'label' => 'New password',
                    'name' => 'password',
                    'type' => 'password',
                ],
                [
                    'component' => 'client-form-input',
                    'label' => 'Confirm new password',
                    'name' => 'password_confirmation',
                    'type' => 'password',
                ],
            ]
        ];

        return view('client.settings', get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $request->validate([
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'last_password' => [
                'required',
                function ($attribute, $value, $fail) {
                    if (!Hash::check($value, auth()->user()->password)) {
                        $fail('Your old password is invalid.');
                    }
                }
            ],
        ]);

        auth()->user()->update([
            'password' => Hash::make($request->password)
        ]);

        return back()->with('success', 'Settings saved successfully!');
    }
}
