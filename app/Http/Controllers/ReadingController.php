<?php

namespace App\Http\Controllers;

use App\Reading;
use Illuminate\Http\Request;

class ReadingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $readings=Reading::all();
        foreach ($readings as $key => $value) {
            $value->topic;
        }
        return response()->json($readings);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Reading  $reading
     * @return \Illuminate\Http\Response
     */
    public function show(Reading $reading)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Reading  $reading
     * @return \Illuminate\Http\Response
     */
    public function edit(Reading $reading)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Reading  $reading
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reading $reading)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Reading  $reading
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reading $reading)
    {
        //
    }
}
