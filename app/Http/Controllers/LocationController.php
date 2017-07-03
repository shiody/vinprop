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
    	$locations = Location::orderBy('created_at', 'desc')->paginate(10);
        return view('tools.location.index', ['locations' => $locations]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tools.location.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'location_name' => 'required',
            'status' => 'required'
        ]);

        $location = new Location([
            'location_name' => $request->input('location_name'),
            'user_id' => \Auth::user()->id,
            'status' => $request->input('status')
            ]);

        $location->save();

        return redirect()->route('location.index')->with('success', 'Location created successfully');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $location = Location::find($id);

        return view('tools.location.edit', ['location' => $location]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'location_name' => 'required',
            'status' => 'required'
        ]);

        $location = Location::find($id);
        $location->status = $request->input('status');

        $location->save();

        return redirect()->route('location.index')->with('success', 'Location updated successfully');
    }
}
