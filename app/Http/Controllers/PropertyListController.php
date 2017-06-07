<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Property;
use App\ListType;
use App\PropertyType;
use App\Location;
use App\User;

class PropertyListController extends Controller
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
    	$properties = Property::orderBy('created_at', 'desc')->paginate(10);
        return view('property.index', ['properties' => $properties]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $list_types = ListType::where('status', 1)->orderBy('list_type_name', 'asc')->get();
        $property_types = PropertyType::where('status', 1)->orderBy('prop_type_name', 'asc')->get();
        $locations = Location::where('status', 1)->orderBy('location_name', 'asc')->get();
        $users = User::where('role_id', 2)->orderBy('name', 'asc')->get();

        return view('property.create',
            ['list_types' => $list_types,
            'property_types' => $property_types,
            'locations' => $locations,
            'users' => $users]);
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
            'prop_name' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $property = new Property([
            'prop_name' => $request->get('prop_name'),
            'prop_list_type_id' => $request->get('prop_list_type_id'),
            'prop_type_id' => $request->get('prop_type_id'),
            'prop_location_id' => $request->get('prop_location_id'),
            'prop_address' => $request->get('prop_address'),
            'prop_bedroom' => $request->get('prop_bedroom'),
            'prop_bathroom' => $request->get('prop_bathroom'),
            'prop_maids_room' => $request->get('prop_maids_room'),
            'prop_floor' => $request->get('prop_floor'),
            'prop_phone_lines' => $request->get('prop_phone_lines'),
            'prop_electricity' => $request->get('prop_electricity'),
            'prop_direction_id' => $request->get('prop_direction_id'),
            'prop_water_src_id' => $request->get('prop_water_src_id'),
            'prop_surface_area' => $request->get('prop_surface_area'),
            'prop_building_area' => $request->get('prop_building_area'),
            'prop_certificate' => $request->get('prop_certificate'),
            'prop_price' => $request->get('prop_price'),
            'prop_fee' => $request->get('prop_fee'),
            'prop_user_id' => $request->get('prop_user_id'),
            'prop_owner_name' => $request->get('prop_owner_name'),
            'prop_owner_contact' => $request->get('prop_owner_contact'),
            'prop_notes' => $request->get('prop_notes'),
            'expired_at' => $request->get('expired_at'),
            'status' => 1
            ]);

        if($request->hasFile('image')){
            $prop_name = $request->get('prop_name');
            $file_name = $prop_name . '.' . $request->file('image')->getClientOriginalExtension();
            $file_path = base_path() . '/public/images/properties/';

            $request->file('image')->move($file_path, $file_name);

            $property->prop_image = $file_path . $file_name;
        }

        $property->save();

        return redirect()->route('property_list.index')->with('success', 'Property created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = Item::find($id);
        return view('ItemCRUD.show',compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Item::find($id);
        return view('ItemCRUD.edit',compact('item'));
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
            'title' => 'required',
            'description' => 'required',
        ]);

        Item::find($id)->update($request->all());
        return redirect()->route('itemCRUD.index')
                        ->with('success','Item updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Item::find($id)->delete();
        return redirect()->route('itemCRUD.index')
                        ->with('success','Item deleted successfully');
    }
}
