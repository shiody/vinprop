<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ListType;

class ListTypeController extends Controller
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
    	$list_types = ListType::orderBy('created_at', 'desc')->paginate(10);
        return view('tools.list_type.index', ['list_types' => $list_types]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tools.list_type.create');
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
            'list_type_name' => 'required',
            'status' => 'required'
        ]);

        $list_type = new ListType([
            'list_type_name' => $request->input('list_type_name'),
            'user_id' => \Auth::user()->id,
            'status' => $request->input('status')
            ]);

        $list_type->save();

        return redirect()->route('list_type.index')->with('success', 'List Type created successfully');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $list_type = ListType::find($id);

        return view('tools.list_type.edit', ['list_type' => $list_type]);
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
            'list_type_name' => 'required',
            'status' => 'required'
        ]);

        $list_type = ListType::find($id);
        $list_type->status = $request->input('status');

        $list_type->save();

        return redirect()->route('list_type.index')->with('success', 'List Type updated successfully');
    }
}
