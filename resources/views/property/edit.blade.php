@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <!-- panel body -->
                <div class="panel-body" style="padding-left: 4em; padding-right: 4em;">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-12">
                                    <!-- title -->
                                    <h3 class="text-primary">Edit Property</h3>
                                </div>
                            </div>
                            <hr/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <!-- property form -->
                            {{-- <form class="form-horizontal"> --}}
                            {!! Form::model($property, ['route'=>['property_list.update', $property->prop_name], 'method'=>'put', 'files'=>true, 'class'=>'form-horizontal']) !!}
                                <fieldset>
                                    <!-- prop_name -->
                                    <div class="form-group">
                                        <label for="prop_name" class="col-md-2 control-label">Name</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" id="prop_name" name="prop_name" placeholder="Property Name" value="{{ $property->prop_name }}" readonly>
                                        </div>
                                    </div>


                                    @if (Auth::user()->role_id == '1')
                                    <!-- prop_list_type_id -->
                                    <div class="form-group">
                                        <label for="prop_list_type_id" class="col-md-2 control-label">List Type</label>
                                        <div class="col-md-5">
                                            <select class="form-control" id="prop_list_type_id" name="prop_list_type_id">
                                                @foreach ($list_types as $list_type)
                                                <option value="{{ $list_type->list_type_id }}" @if ($list_type->list_type_id == $property->prop_list_type_id) selected @endif>{{ $list_type->list_type_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <!-- prop_type_id -->
                                    <div class="form-group">
                                        <label for="prop_type_id" class="col-md-2 control-label">Property Type</label>
                                        <div class="col-md-5">
                                            <select class="form-control" id="prop_type_id" name="prop_type_id">
                                                @foreach ($property_types as $property_type)
                                                <option value="{{ $property_type->prop_type_id }}" @if ($property_type->prop_type_id == $property->prop_type_id) selected @endif>{{ $property_type->prop_type_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <!-- prop_location_id -->
                                    <div class="form-group">
                                        <label for="prop_location_id" class="col-md-2 control-label">Location</label>
                                        <div class="col-md-5">
                                            <select class="form-control" id="prop_location_id" name="prop_location_id">
                                                @foreach ($locations as $location)
                                                <option value="{{ $location->location_id }}" @if ($location->location_id == $property->prop_location_id) selected @endif>{{ $location->location_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <!-- prop_address -->
                                    <div class="form-group">
                                        <label for="prop_address" class="col-md-2 control-label">Address</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" id="prop_address" name="prop_address" placeholder="Property Full Address" value="{{ $property->prop_address }}">
                                        </div>
                                    </div>
                                    <!-- prop_bedroom -->
                                    <div class="form-group">
                                        <label for="prop_bedroom" class="col-md-2 control-label">Bedroom</label>
                                        <div class="col-md-1">
                                            <select class="form-control" id="prop_bedroom" name="prop_bedroom">
                                                <option value="0" @if ($property->prop_bedroom == 0) selected @endif>0</option>
                                                <option value="1" @if ($property->prop_bedroom == 1) selected @endif>1</option>
                                                <option value="2" @if ($property->prop_bedroom == 2) selected @endif>2</option>
                                                <option value="3" @if ($property->prop_bedroom == 3) selected @endif>3</option>
                                                <option value="4" @if ($property->prop_bedroom == 4) selected @endif>4</option>
                                                <option value="5" @if ($property->prop_bedroom == 5) selected @endif>5</option>
                                                <option value="6" @if ($property->prop_bedroom == 6) selected @endif>6</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- prop_maids_room -->
                                    <div class="form-group">
                                        <label for="prop_maids_room" class="col-md-2 control-label">Maids Room</label>
                                        <div class="col-md-1">
                                            <select class="form-control" id="prop_maids_room" name="prop_maids_room">
                                                <option value="0" @if ($property->prop_maids_room == 0) selected @endif>0</option>
                                                <option value="1" @if ($property->prop_maids_room == 1) selected @endif>1</option>
                                                <option value="2" @if ($property->prop_maids_room == 2) selected @endif>2</option>
                                                <option value="3" @if ($property->prop_maids_room == 3) selected @endif>3</option>
                                                <option value="4" @if ($property->prop_maids_room == 4) selected @endif>4</option>
                                                <option value="5" @if ($property->prop_maids_room == 5) selected @endif>5</option>
                                                <option value="6" @if ($property->prop_maids_room == 6) selected @endif>6</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- prop_bathroom -->
                                    <div class="form-group">
                                        <label for="prop_bathroom" class="col-md-2 control-label">Bathroom</label>
                                        <div class="col-md-1">
                                            <select class="form-control" id="prop_bathroom" name="prop_bathroom">
                                                <option value="0" @if ($property->prop_bathroom == 0) selected @endif>0</option>
                                                <option value="1" @if ($property->prop_bathroom == 1) selected @endif>1</option>
                                                <option value="2" @if ($property->prop_bathroom == 2) selected @endif>2</option>
                                                <option value="3" @if ($property->prop_bathroom == 3) selected @endif>3</option>
                                                <option value="4" @if ($property->prop_bathroom == 4) selected @endif>4</option>
                                                <option value="5" @if ($property->prop_bathroom == 5) selected @endif>5</option>
                                                <option value="6" @if ($property->prop_bathroom == 6) selected @endif>6</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- prop_floor -->
                                    <div class="form-group">
                                        <label for="prop_floor" class="col-md-2 control-label">Floor</label>
                                        <div class="col-md-1">
                                            <select class="form-control" id="prop_floor" name="prop_floor">
                                                <option value="1" @if ($property->prop_floor == 1) selected @endif>1</option>
                                                <option value="2" @if ($property->prop_floor == 2) selected @endif>2</option>
                                                <option value="3" @if ($property->prop_floor == 3) selected @endif>3</option>
                                                <option value="4" @if ($property->prop_floor == 4) selected @endif>4</option>
                                                <option value="5" @if ($property->prop_floor == 5) selected @endif>5</option>
                                                <option value="6" @if ($property->prop_floor == 6) selected @endif>6</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- prop_phone_lines -->
                                    <div class="form-group">
                                        <label for="prop_phone_lines" class="col-md-2 control-label">Phone Lines</label>
                                        <div class="col-md-1">
                                            <select class="form-control" id="prop_phone_lines" name="prop_phone_lines">
                                                <option value="0" @if ($property->prop_phone_lines == 0) selected @endif>0</option>
                                                <option value="1" @if ($property->prop_phone_lines == 1) selected @endif>1</option>
                                                <option value="2" @if ($property->prop_phone_lines == 2) selected @endif>2</option>
                                                <option value="3" @if ($property->prop_phone_lines == 3) selected @endif>3</option>
                                                <option value="4" @if ($property->prop_phone_lines == 4) selected @endif>4</option>
                                                <option value="5" @if ($property->prop_phone_lines == 5) selected @endif>5</option>
                                                <option value="6" @if ($property->prop_phone_lines == 6) selected @endif>6</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- prop_electricity -->
                                    <div class="form-group">
                                        <label for="prop_electricity" class="col-md-2 control-label">Electricity</label>
                                        <div class="col-md-5">
                                            <input type="text" class="form-control number" id="prop_electricity" name="prop_electricity" placeholder="Electricity (e.g. 1100)" value="{{ number_format($property->prop_electricity) }}">
                                        </div>
                                    </div>
                                    <!-- prop_water_src_id -->
                                    <div class="form-group">
                                        <label for="prop_water_src_id" class="col-md-2 control-label">Water Source</label>
                                        <div class="col-md-5">
                                            <select class="form-control" id="prop_water_src_id" name="prop_water_src_id">
                                                @foreach ($water_sources as $water_source)
                                                <option value="{{ $water_source->water_src_id }}" @if ($water_source->water_src_id == $property->prop_water_src_id) selected @endif>{{ $water_source->water_src_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <!-- prop_surface_area -->
                                    <div class="form-group">
                                        <label for="prop_surface_area" class="col-md-2 control-label">Surface Area</label>
                                        <div class="col-md-5">
                                            <input type="text" class="form-control number" id="prop_surface_area" name="prop_surface_area" placeholder="Surface Area (e.g. 100)" value="{{ number_format($property->prop_surface_area) }}">
                                        </div>
                                    </div>
                                    <!-- prop_building_area -->
                                    <div class="form-group">
                                        <label for="prop_building_area" class="col-md-2 control-label">Building Area</label>
                                        <div class="col-md-5">
                                            <input type="text" class="form-control number" id="prop_building_area" name="prop_building_area" placeholder="Building Area (e.g. 80)" value="{{ number_format($property->prop_building_area) }}">
                                        </div>
                                    </div>
                                    <!-- prop_certificate -->
                                    <div class="form-group">
                                        <label for="prop_certificate" class="col-md-2 control-label">Certificate</label>
                                        <div class="col-md-5">
                                            <input type="text" class="form-control" id="prop_certificate" name="prop_certificate" placeholder="Property Certificate (e.g. SHM)" value="{{ $property->prop_certificate }}">
                                        </div>
                                    </div>
                                    <!-- prop_price -->
                                    <div class="form-group">
                                        <label for="prop_price" class="col-md-2 control-label">Price</label>
                                        <div class="col-md-5">
                                            <input type="text" class="form-control number" id="prop_price" name="prop_price" placeholder="Property Price" value="{{ number_format($property->prop_price) }}">
                                        </div>
                                    </div>
                                    <!-- prop_fee -->
                                    <div class="form-group">
                                        <label for="prop_fee" class="col-md-2 control-label">Fee</label>
                                        <div class="col-md-5">
                                            <input type="text" class="form-control number" id="prop_fee" name="prop_fee" placeholder="Fee in percent (e.g. 2)" value="{{ number_format($property->prop_fee) }}">
                                        </div>
                                    </div>
                                    <!-- prop_user_id -->
                                    <div class="form-group">
                                        <label for="prop_user_id" class="col-md-2 control-label">Marketing Name</label>
                                        <div class="col-md-10">
                                            <select class="form-control" id="prop_user_id" name="prop_user_id">
                                                @foreach ($users as $user)
                                                <option value="{{ $user->id }}" @if ($user->id == $property->prop_user_id) selected @endif>{{ $user->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <!-- prop_owner_name -->
                                    <div class="form-group">
                                        <label for="prop_owner_name" class="col-md-2 control-label">Owner Name</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" id="prop_owner_name" name="prop_owner_name" placeholder="Owner Name" value="{{ $property->prop_owner_name }}">
                                        </div>
                                    </div>
                                    <!-- prop_owner_contact -->
                                    <div class="form-group">
                                        <label for="prop_owner_contact" class="col-md-2 control-label">Owner Contact</label>
                                        <div class="col-md-5">
                                            <input type="text" class="form-control" id="prop_owner_contact" name="prop_owner_contact" placeholder="Owner Contact" value="{{ $property->prop_owner_contact }}">
                                        </div>
                                    </div>
                                     <!-- prop_rent_status -->
                                    <div class="form-group">
                                        <label for="prop_rent_status" class="col-md-2 control-label">Rent Status</label>
                                        <div class="col-md-5">
                                            <select class="form-control" id="prop_rent_status" name="prop_rent_status">
                                                <option value="0" @if ($property->prop_rent_status == 0) selected @endif>Available</option>
                                                <option value="1" @if ($property->prop_rent_status == 1) selected @endif>Rented</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- expired_at -->
                                    <div class="form-group">
                                        <label for="expired_at" class="col-md-2 control-label">Expired Date</label>
                                        <div class="col-md-5" style="padding-top: 1em">
                                            {!! Form::date('expired_at', \Carbon\Carbon::parse($property->expired_at)->format('Y-m-d')) !!}
                                        </div>
                                    </div>
                                    @endif
                                    <!-- prop_notes -->
                                    <div class="form-group">
                                        <label for="prop_notes" class="col-md-2 control-label">Notes</label>
                                        <div class="col-md-10">
                                            <textarea class="form-control" rows="3" id="prop_notes" name="prop_notes">{{ $property->prop_notes }}</textarea>
                                        </div>
                                    </div>
                                    <!-- prop_user_notes -->
                                    <div class="form-group">
                                        <label for="prop_user_notes" class="col-md-2 control-label">Marketing Notes</label>
                                        <div class="col-md-10">
                                            <textarea class="form-control" rows="3" id="prop_user_notes" name="prop_user_notes">{{ $property->prop_user_notes }}</textarea>
                                        </div>
                                    </div>
                                    <!-- prop_image -->
                                    <div class="form-group">
                                        <label for="image" class="col-md-2 control-label">Image</label>
                                        <div class="col-md-5">
                                            <div class="row">
                                                @if ($property->prop_image != null)
                                                <div class="col-md-12 thumbnail">
                                                    <img class="img-responsive" src="{{ $property->prop_image }}">
                                                </div>
                                                @endif
                                                <div class="col-md-12">
                                                    <input type="text" readonly="" class="form-control" placeholder="Browse...">
                                                    {!! Form::file('image') !!}
                                                    <span class="text-info">*max size 2 MB, old image will be repalced</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- buttons -->
                                    <div class="form-group">
                                        <div class="col-md-10 col-md-offset-2">
                                            <a href="{{ route('property_list.index') }}" class="btn btn-default">Cancel</a>
                                            <button type="submit" class="btn btn-primary">Update</button>
                                        </div>
                                    </div>
                                </fieldset>
                            {!! Form::close() !!}
                            {{-- </form> --}}
                            <br/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
