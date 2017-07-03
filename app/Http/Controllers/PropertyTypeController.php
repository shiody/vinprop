<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PropertyType;

class PropertyTypeController extends Controller
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
     * Show the property type list.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
    	$property_types = PropertyType::orderBy('created_at', 'desc')->paginate(10);
        return view('tools.property_type.index', ['property_types' => $property_types]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tools.property_type.create');
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
            'prop_type_name' => 'required',
            'status' => 'required'
        ]);

        $property_type = new PropertyType([
            'prop_type_name' => $request->input('prop_type_name'),
            'user_id' => \Auth::user()->id,
            'status' => $request->input('status')
            ]);

        $property_type->save();

        return redirect()->route('property_type.index')->with('success', 'Property Type created successfully');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $property_type = PropertyType::find($id);

        return view('tools.property_type.edit', ['property_type' => $property_type]);
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
            'prop_type_name' => 'required',
            'status' => 'required'
        ]);

        $property_type = PropertyType::find($id);
        $property_type->status = $request->input('status');

        $property_type->save();

        return redirect()->route('property_type.index')->with('success', 'Property Type updated successfully');
    }
}
