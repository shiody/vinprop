<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Property;
use App\ListType;
use App\PropertyType;
use App\Location;
use App\WaterSource;
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
        $list_types = ListType::where('status', 1)->orderBy('list_type_name', 'asc')->get();
        $property_types = PropertyType::where('status', 1)->orderBy('prop_type_name', 'asc')->get();
        $locations = Location::where('status', 1)->orderBy('location_name', 'asc')->get();
        return view('property.index',
            ['properties' => $properties,
            'list_types' => $list_types,
            'property_types' => $property_types,
            'locations' => $locations]);
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
        $water_sources = WaterSource::where('status', 1)->orderBy('water_src_name', 'asc')->get();
        $users = User::where('role_id', 2)->orderBy('name', 'asc')->get();

        return view('property.create',
            ['list_types' => $list_types,
            'property_types' => $property_types,
            'locations' => $locations,
            'water_sources' => $water_sources,
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
            'prop_name' => $request->input('prop_name'),
            'prop_list_type_id' => $request->input('prop_list_type_id'),
            'prop_type_id' => $request->input('prop_type_id'),
            'prop_location_id' => $request->input('prop_location_id'),
            'prop_address' => $request->input('prop_address'),
            'prop_bedroom' => $request->input('prop_bedroom'),
            'prop_bathroom' => $request->input('prop_bathroom'),
            'prop_maids_room' => $request->input('prop_maids_room'),
            'prop_floor' => $request->input('prop_floor'),
            'prop_phone_lines' => $request->input('prop_phone_lines'),
            'prop_electricity' => $request->input('prop_electricity'),
            'prop_direction_id' => $request->input('prop_direction_id'),
            'prop_water_src_id' => $request->input('prop_water_src_id'),
            'prop_surface_area' => $request->input('prop_surface_area'),
            'prop_building_area' => $request->input('prop_building_area'),
            'prop_certificate' => $request->input('prop_certificate'),
            'prop_price' => $request->input('prop_price'),
            'prop_fee' => $request->input('prop_fee'),
            'prop_user_id' => $request->input('prop_user_id'),
            'prop_owner_name' => $request->input('prop_owner_name'),
            'prop_owner_contact' => $request->input('prop_owner_contact'),
            'prop_notes' => $request->input('prop_notes'),
            'expired_at' => $request->input('expired_at'),
            'status' => 1
            ]);

        if($request->hasFile('image')){
            $prop_name = $request->input('prop_name');
            $file_name = $prop_name . '.' . $request->file('image')->getClientOriginalExtension();
            $public_path = base_path() . '/public/';
            $image_path = '/images/properties/';
            $request->file('image')->move($public_path . $image_path, $file_name);
            $property->prop_image = $image_path . $file_name;
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
        $property = Property::find($id);
        return view('property.show', ['property' => $property]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $property = Property::find($id);
        $list_types = ListType::where('status', 1)->orderBy('list_type_name', 'asc')->get();
        $property_types = PropertyType::where('status', 1)->orderBy('prop_type_name', 'asc')->get();
        $locations = Location::where('status', 1)->orderBy('location_name', 'asc')->get();
        $water_sources = WaterSource::where('status', 1)->orderBy('water_src_name', 'asc')->get();
        $users = User::where('role_id', 2)->orderBy('name', 'asc')->get();

        return view('property.edit',
            ['property' => $property,
            'list_types' => $list_types,
            'property_types' => $property_types,
            'locations' => $locations,
            'water_sources' => $water_sources,
            'users' => $users]);
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
            'prop_name' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $property = Property::find($id);

        $property->prop_list_type_id = $request->input('prop_list_type_id');
        $property->prop_type_id = $request->input('prop_type_id');
        $property->prop_location_id = $request->input('prop_location_id');
        $property->prop_address = $request->input('prop_address');
        $property->prop_bedroom = $request->input('prop_bedroom');
        $property->prop_bathroom = $request->input('prop_bathroom');
        $property->prop_maids_room = $request->input('prop_maids_room');
        $property->prop_floor = $request->input('prop_floor');
        $property->prop_phone_lines = $request->input('prop_phone_lines');
        $property->prop_electricity = $request->input('prop_electricity');
        $property->prop_direction_id = $request->input('prop_direction_id');
        $property->prop_water_src_id = $request->input('prop_water_src_id');
        $property->prop_surface_area = $request->input('prop_surface_area');
        $property->prop_building_area = $request->input('prop_building_area');
        $property->prop_certificate = $request->input('prop_certificate');
        $property->prop_price = $request->input('prop_price');
        $property->prop_fee = $request->input('prop_fee');
        $property->prop_user_id = $request->input('prop_user_id');
        $property->prop_owner_name = $request->input('prop_owner_name');
        $property->prop_owner_contact = $request->input('prop_owner_contact');
        $property->prop_notes = $request->input('prop_notes');
        $property->expired_at = $request->input('expired_at');
        $property->status = 1;

        if($request->hasFile('image')){
            $prop_name = $request->input('prop_name');
            $file_name = $prop_name . '.' . $request->file('image')->getClientOriginalExtension();
            $public_path = base_path() . '/public/';
            $image_path = '/images/properties/';
            $request->file('image')->move($public_path . $image_path, $file_name);
            $property->prop_image = $image_path . $file_name;
        }

        $property->save();

        return redirect()->route('property_list.index')->with('success', 'Property updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Property::find($id)->delete();
        return redirect()->route('property.index')
                        ->with('success','Property deleted successfully');
    }
}
