<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Location;

class LocationController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the location list.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$locations = Location::paginate(10);
        return view('location', ['locations' => $locations]);
    }
}
