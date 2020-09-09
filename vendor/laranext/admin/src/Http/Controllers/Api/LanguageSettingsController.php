<?php

namespace Laranext\Admin\Http\Controllers\Api;

use Laranext\Option;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Laranext\Admin\Fields\LanguageFields;
use Laranext\Admin\Requests\LanguageRequest;

class LanguageSettingsController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @param  \Laranext\Option  $option
     * @return \Illuminate\Http\Response
     */
    public function create($language, Option $option)
    {
        $option->language = $language;

        return new LanguageFields($option);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Laranext\Option  $option
     * @return \Illuminate\Http\Response
     */
    public function store($language, Request $request, Option $option)
    {
        $option->language = $language;

        return new LanguageRequest($request, $option);
    }
}
