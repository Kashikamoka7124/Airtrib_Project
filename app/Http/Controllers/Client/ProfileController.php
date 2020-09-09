<?php

namespace App\Http\Controllers\Client;

use App\Contact;
use App\Country;
use App\CorporateType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = auth()->user();
        $customer = auth()->user()->customer;
        $contact = Contact::where('customer_id', $customer->id)->first();
        $countries = Country::get(['id as value', 'name as label']);

        if ($customer->individual) {
            $information = [
                'meta' => [
                    'title' => 'Personal Information'
                ],
                'fields' => [
                    [
                        'component' => 'client-form-select',
                        'label' => 'Title',
                        'name' => 'title',
                        'inline' => true,
                        'value' => $customer->gender,
                        'options' => [
                            [
                                'label' => 'Mr.',
                                'value' => 'male',
                            ],
                            [
                                'label' => 'Mrs.',
                                'value' => 'female',
                            ],
                        ]
                    ],
                    [
                        'component' => 'client-form-input',
                        'label' => 'First name',
                        'name' => 'first_name',
                        'value' => $customer->first_name,
                    ],
                    [
                        'component' => 'client-form-input',
                        'label' => 'Last name',
                        'name' => 'last_name',
                        'value' => $customer->last_name,
                    ],
                    [
                        'component' => 'client-form-input',
                        'label' => 'Email',
                        'name' => 'email',
                        'type' => 'email',
                        'value' => $customer->email,
                        'readonly' => true,
                    ],
                    [
                        'component' => 'client-form-select',
                        'label' => 'Country',
                        'name' => 'country_id',
                        'value' => $customer->country_id,
                        'default_title' => 'Country',
                        'options' => $countries,
                    ],
                    [
                        'component' => 'client-form-field-grid',
                        'label' => 'Phone number',
                        'fields' => [
                            [
                                'component' => 'client-form-input',
                                'name' => 'country_code',
                                'classes' => 'w-1/3',
                                'value' => $customer->country_code,
                            ],
                            [
                                'component' => 'client-form-input',
                                'name' => 'phone',
                                'classes' => 'w-2/3',
                                'value' => $customer->phone,
                            ],
                        ]
                    ],

                    [
                        'component' => 'client-form-row-blank',
                    ],

                    [
                        'component' => 'client-form-field-grid',
                        'label' => 'Birth date',
                        'fields' => [
                            [
                                'component' => 'client-form-select',
                                'name' => 'birth_year',
                                'value' => optional($customer->birth_date)->format('Y'),
                                'default_title' => 'YYYY',
                                'options' => $this->birthYears(),
                            ],
                            [
                                'component' => 'client-form-select',
                                'name' => 'birth_month',
                                'value' => optional($customer->birth_date)->format('m'),
                                'default_title' => 'MM',
                                'options' => $this->getDateMonthOptions(),
                            ],
                            [
                                'component' => 'client-form-select',
                                'name' => 'birth_date',
                                'value' => optional($customer->birth_date)->format('d'),
                                'default_title' => 'DD',
                                'options' => $this->getDateMonthOptions(),
                            ],
                        ]
                    ],
                    [
                        'component' => 'client-form-input',
                        'label' => 'Address',
                        'name' => 'address',
                        'value' => $customer->address,
                    ],
                    [
                        'component' => 'client-form-input',
                        'label' => 'Address line 2',
                        'name' => 'address_2',
                        'value' => $customer->address_2,
                    ],
                    [
                        'component' => 'client-form-input',
                        'label' => 'Postcode',
                        'name' => 'postcode',
                        'value' => $customer->postcode,
                    ],
                    [
                        'component' => 'client-form-input',
                        'label' => 'City',
                        'name' => 'city',
                        'value' => $customer->city,
                    ],
                ]
            ];
        }
        else {
            $information = [
                'meta' => [
                    'title' => 'Corporate Information'
                ],
                'fields' => [
                    [
                        'component' => 'client-form-input',
                        'label' => 'Corporate name',
                        'name' => 'corporate_name',
                        'value' => $customer->corporate_name,
                    ],
                    [
                        'component' => 'client-form-select',
                        'label' => 'Corporate type',
                        'name' => 'corporate_type',
                        'value' => $customer->corporate_type,
                        'options' => CorporateType::get(['id as value', 'name as label']),
                    ],
                    [
                        'component' => 'client-form-select',
                        'label' => 'Country',
                        'name' => 'country_id',
                        'value' => $customer->country_id,
                        'default_title' => 'Country',
                        'options' => $countries,
                    ],
                    [
                        'component' => 'client-form-input',
                        'label' => 'Corporate address',
                        'name' => 'address',
                        'value' => $customer->address,
                    ],
                    [
                        'component' => 'client-form-input',
                        'label' => 'Address line 2',
                        'name' => 'address_2',
                        'value' => $customer->address_2,
                    ],
                    [
                        'component' => 'client-form-input',
                        'label' => 'Postcode',
                        'name' => 'postcode',
                        'value' => $customer->postcode,
                    ],
                    [
                        'component' => 'client-form-input',
                        'label' => 'City',
                        'name' => 'city',
                        'value' => $customer->city,
                    ],

                    [
                        'component' => 'client-form-row-blank',
                    ],

                    [
                        'component' => 'client-form-select',
                        'label' => 'Title',
                        'name' => 'title',
                        'inline' => true,
                        'value' => $customer->gender,
                        'options' => [
                            [
                                'label' => 'Mr.',
                                'value' => 'male',
                            ],
                            [
                                'label' => 'Mrs.',
                                'value' => 'female',
                            ],
                        ]
                    ],
                    [
                        'component' => 'client-form-input',
                        'label' => 'First name',
                        'name' => 'first_name',
                        'value' => $customer->first_name,
                    ],
                    [
                        'component' => 'client-form-input',
                        'label' => 'Last name',
                        'name' => 'last_name',
                        'value' => $customer->last_name,
                    ],
                    [
                        'component' => 'client-form-input',
                        'label' => 'Email',
                        'name' => 'email',
                        'type' => 'email',
                        'value' => $customer->email,
                        'readonly' => true,
                    ],
                    [
                        'component' => 'client-form-field-grid',
                        'label' => 'Phone number',
                        'fields' => [
                            [
                                'component' => 'client-form-input',
                                'name' => 'country_code',
                                'classes' => 'w-1/3',
                                'value' => $customer->country_code,
                            ],
                            [
                                'component' => 'client-form-input',
                                'name' => 'phone',
                                'classes' => 'w-2/3',
                                'value' => $customer->phone,
                            ],
                        ]
                    ],
                ]
            ];
        }

        $details = [
            'meta' => [
                'title' => 'Travel Details'
            ],
            'fields' => [
                [
                    'component' => 'client-form-select',
                    'label' => 'Nationality',
                    'name' => 'country_id',
                    'value' => $customer->country_id,
                    'default_title' => 'Country',
                    'options' => $countries,
                ],
                [
                    'component' => 'client-form-input',
                    'label' => 'Passport Number',
                    'name' => 'passport_number',
                    'value' => $customer->passport_number,
                ],
                [
                    'component' => 'client-form-field-grid',
                    'label' => 'Passport expire',
                    'fields' => [
                        [
                            'component' => 'client-form-select',
                            'name' => 'passport_year',
                            'value' => optional($customer->passport_expire)->format('Y'),
                            'default_title' => 'YYYY',
                            'options' => $this->passportExpireYears(),
                        ],
                        [
                            'component' => 'client-form-select',
                            'name' => 'passport_month',
                            'value' => optional($customer->passport_expire)->format('m'),
                            'default_title' => 'MM',
                            'options' => $this->getDateMonthOptions(),
                        ],
                        [
                            'component' => 'client-form-select',
                            'name' => 'passport_date',
                            'value' => optional($customer->passport_expire)->format('d'),
                            'default_title' => 'DD',
                            'options' => $this->getDateMonthOptions(),
                        ],
                    ]
                ],
            ]
        ];

        $contact = [
            'meta' => [
                'title' => $customer->individual ? 'Emergency Contact' : 'Second Contact'
            ],
            'fields' => [
                [
                    'component' => 'client-form-select',
                    'label' => 'Title',
                    'name' => 'title',
                    'value' => optional($contact)->title,
                    'inline' => true,
                    'options' => [
                        [
                            'label' => 'Mr.',
                            'value' => 'Mr.',
                        ],
                        [
                            'label' => 'Mrs.',
                            'value' => 'Mrs.',
                        ],
                    ]
                ],
                [
                    'component' => 'client-form-input',
                    'label' => 'First name',
                    'name' => 'first_name',
                    'value' => optional($contact)->first_name,
                ],
                [
                    'component' => 'client-form-input',
                    'label' => 'Last name',
                    'name' => 'last_name',
                    'value' => optional($contact)->last_name,
                ],
                [
                    'component' => 'client-form-input',
                    'label' => 'Email',
                    'name' => 'email',
                    'type' => 'email',
                    'value' => optional($contact)->email,
                ],
                [
                    'component' => 'client-form-select',
                    'label' => 'Country',
                    'name' => 'country_id',
                    'value' => optional($contact)->country_id,
                    'default_title' => 'Country',
                    'options' => $countries,
                ],
                [
                    'component' => 'client-form-field-grid',
                    'label' => 'Phone number',
                    'fields' => [
                        [
                            'component' => 'client-form-input',
                            'name' => 'country_code',
                            'classes' => 'w-1/3',
                            'value' => optional($contact)->country_code,
                        ],
                        [
                            'component' => 'client-form-input',
                            'name' => 'phone',
                            'classes' => 'w-2/3',
                            'value' => optional($contact)->phone,
                        ],
                    ]
                ],
            ]
        ];

        return view('client.profile', get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function information(Request $request)
    {
        $attributes = $request->validate([
            'title' => 'required',
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'country_id' => 'required|integer',
            'country_code' => 'required|string',
            'phone' => 'required|numeric',
            'postcode' => 'nullable|numeric',
            'birth_year' => 'nullable|numeric',
            'birth_month' => 'nullable|numeric',
            'birth_date' => 'nullable|numeric',
            'corporate_name' => 'sometimes|required|string',
            'corporate_type' => 'sometimes|required|integer',
        ]);

        $customerAttributes = [
            'gender' => $request->title,
            'name' => $request->first_name . ' ' . $request->last_name,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'country_id' => $request->country_id,
            'country_code' => $request->country_code,
            'phone' => $request->phone,
            'postcode' => $request->postcode,
            'city' => $request->city,
            'address' => $request->address,
            'address_2' => $request->address_2,
        ];

        if ($request->corporate_type && $request->corporate_name) {
            $customerAttributes['corporate_name'] = $request->corporate_name;
            $customerAttributes['corporate_type'] = $request->corporate_type;
        }

        if ($request->birth_year && $request->birth_month && $request->birth_date) {
            $customerAttributes['birth_date'] = $request->birth_year . '-' . $request->birth_month . '-' . $request->birth_date;
        }

        auth()->user()->customer->update($customerAttributes);

        auth()->user()->update([
            'name' => $request->first_name . ' ' . $request->last_name,
        ]);

        return back()->with('success', 'Profile updated successfully!');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function details(Request $request)
    {
        $passport_expire = null;

        if ($request->passport_year && $request->passport_month && $request->passport_date) {
            $passport_expire = $request->passport_year . '-' . $request->passport_month . '-' . $request->passport_date;
        }

        auth()->user()->customer->update([
            'country_id' => $request->country_id,
            'passport' => $request->passport,
            'passport_expire' => $passport_expire,
        ]);

        return back()->with('success', 'Profile updated successfully!');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function contact(Request $request)
    {
        $attributes = $request->validate([
            'title' => ['required', 'string'],
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'country_id' => ['required', 'integer'],
            'country_code' => ['required', 'max:3', 'regex:/^[0-9]{1,3}/i'],
            'phone' => ['required', 'numeric', 'digits_between:5,15'],
        ]);

        $attributes['name'] = $request->first_name . ' ' . $request->last_name;
        $attributes['customer_id'] = auth()->user()->customer->id;

        Contact::create($attributes);

        return back()->with('success', 'Profile updated successfully!');
    }

    /**
     * Birth Years.
     *
     * @return array
     */
    function birthYears()
    {
        $data = [];

        for ($i = 1940; $i <= 2020; $i++) {
            $data[] = ['label' => $i, 'value' => $i];
        }

        return $data;
    }

    /**
     * Passport Expire Years.
     *
     * @return array
     */
    function passportExpireYears()
    {
        $data = [];

        for ($i = 2020; $i <= 2040; $i++) {
            $data[] = ['label' => $i, 'value' => $i];
        }

        return $data;
    }

    /**
     * Get Data and Months.
     *
     * @return array
     */
    function getDateMonthOptions()
    {
        $data = [];

        for ($i = 1; $i <= 12; $i++) {
            $data[] = ['label' => $i, 'value' => $i];
        }

        return $data;
    }
}
