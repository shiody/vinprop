<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\WaterSource;

class WaterSourceController extends Controller
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
    	$water_sources = WaterSource::orderBy('created_at', 'desc')->paginate(10);
        return view('tools.water_source.index', ['water_sources' => $water_sources]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tools.water_source.create');
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
            'water_src_name' => 'required',
            'status' => 'required'
        ]);

        $water_src = new WaterSource([
            'water_src_name' => $request->input('water_src_name'),
            'user_id' => \Auth::user()->id,
            'status' => $request->input('status')
            ]);

        $water_src->save();

        return redirect()->route('water_source.index')->with('success', 'Water Source created successfully');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $water_source = WaterSource::find($id);

        return view('tools.water_source.edit', ['water_source' => $water_source]);
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
            'water_src_name' => 'required',
            'status' => 'required'
        ]);

        $water_source = WaterSource::find($id);
        $water_source->status = $request->input('status');

        $water_source->save();

        return redirect()->route('water_source.index')->with('success', 'Water Source updated successfully');
    }
}
