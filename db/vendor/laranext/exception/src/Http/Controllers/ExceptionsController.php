<?php

namespace Laranext\Exception\Http\Controllers;

use Laranext\Exception\Exception;
use App\Http\Controllers\Controller;

class ExceptionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index()
    {
        return view('exception::exceptions.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \Laranext\Exception\Exception  $exception
     * @return View
     */
    public function create(Exception $exception)
    {
        return view('exception::exceptions.form', compact('exception'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \Laranext\Exception\Exception  $exception
     * @return View
     */
    public function show(Exception $exception)
    {
        return view('exception::exceptions.detail', compact('exception'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \Laranext\Exception\Exception  $exception
     * @return View
     */
    public function edit(Exception $exception)
    {
        return view('exception::exceptions.form', compact('exception'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \Laranext\Exception\Exception  $exception
     * @return View
     */
    public function json(Exception $exception)
    {
        $exception->json_message = @unserialize($exception->message);
        $exception->context = @unserialize($exception->context);

        return [
            'id' => $exception->id,
            'context' => $exception->context,
            'file' => $exception->file,
            'line' => $exception->line,
            'created_at' => $exception->created_at,
            'json_message' => $exception->json_message,
            'message' => $exception->message,
            'trace' => $exception->trace,
        ];
    }
}
