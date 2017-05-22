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
    public function index(Request $request)
    {
    	$locations = Location::orderBy('location_name', 'asc')->paginate(10);
        return view('tools.location.index', ['locations' => $locations]);
    }
}
