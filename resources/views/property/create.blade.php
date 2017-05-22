@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <!-- panel body -->
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-10">
                                    <!-- title -->
                                    <h3 class="text-primary">Create New Property</h3>
                                </div>
                                <div class="col-md-2">
                                    <a href="{{ route('property_list.index') }}" class="btn btn-default pull-right">
                                        <span class="glyphicon glyphicon-remove" aria-hidden="true"></span> cancel
                                    </a>
                                </div>
                            </div>
                            <hr/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <!-- property form -->
                            {{-- <form class="form-horizontal"> --}}
                            {!! Form::open(['route'=>'property_list.store', 'method'=>'POST', 'files'=>true, 'class'=>'form-horizontal']) !!}
                                <fieldset>
                                    <!-- prop_name -->
                                    <div class="form-group">
                                        <label for="prop_name" class="col-md-2 control-label">Name</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" id="prop_name" name="prop_name" placeholder="Property Name">
                                        </div>
                                    </div>
                                    <!-- prop_type _id-->
                                    <div class="form-group">
                                        <label for="prop_type_id" class="col-md-2 control-label">Type</label>
                                        <div class="col-md-5">
                                            <select class="form-control" id="prop_type_id" name="prop_type_id">
                                                <option selected>Choose Type</option>
                                                <option value="1">Rumah</option>
                                                <option>Apatemen</option>
                                                <option>Ruko</option>
                                                <option>Gudang</option>
                                                <option>Kios</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- prop_location_id -->
                                    <div class="form-group">
                                        <label for="prop_location_id" class="col-md-2 control-label">Location</label>
                                        <div class="col-md-5">
                                            <select class="form-control" id="prop_location_id" name="prop_location_id">
                                                <option selected>Choose Location</option>
                                                <option value="1">Jakarta</option>
                                                <option>Tangerang</option>
                                                <option>BSD</option>
                                                <option>Gading Serpong</option>
                                                <option>Bekasi</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- prop_address -->
                                    <div class="form-group">
                                        <label for="prop_address" class="col-md-2 control-label">Address</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" id="prop_address" name="prop_address" placeholder="Property Full Address">
                                        </div>
                                    </div>
                                    <!-- prop_bedroom -->
                                    <div class="form-group">
                                        <label for="prop_bedroom" class="col-md-2 control-label">Bedroom</label>
                                        <div class="col-md-1">
                                            <select class="form-control" id="prop_bedroom" name="prop_bedroom">
                                                <option value="0" selected>0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- prop_maids_room -->
                                    <div class="form-group">
                                        <label for="prop_maids_room" class="col-md-2 control-label">Maids Room</label>
                                        <div class="col-md-1">
                                            <select class="form-control" id="prop_maids_room" name="prop_maids_room">
                                                <option value="0" selected>0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- prop_bathroom -->
                                    <div class="form-group">
                                        <label for="prop_bathroom" class="col-md-2 control-label">Bathroom</label>
                                        <div class="col-md-1">
                                            <select class="form-control" id="prop_bathroom" name="prop_bathroom">
                                                <option value="0" selected>0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- prop_floor -->
                                    <div class="form-group">
                                        <label for="prop_floor" class="col-md-2 control-label">Floor</label>
                                        <div class="col-md-1">
                                            <select class="form-control" id="prop_floor" name="prop_floor">
                                                <option value="1" selected>1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- prop_phone_lines -->
                                    <div class="form-group">
                                        <label for="prop_phone_lines" class="col-md-2 control-label">Phone Lines</label>
                                        <div class="col-md-1">
                                            <select class="form-control" id="prop_phone_lines" name="prop_phone_lines">
                                                <option value="1" selected>1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- prop_electricity -->
                                    <div class="form-group">
                                        <label for="prop_electricity" class="col-md-2 control-label">Electricity</label>
                                        <div class="col-md-5">
                                            <input type="text" class="form-control" id="prop_electricity" name="prop_electricity" placeholder="Electricity (e.g. 1100)">
                                        </div>
                                    </div>
                                    <!-- prop_water_src_id -->
                                    <div class="form-group">
                                        <label for="prop_water_src_id" class="col-md-2 control-label">Water Source</label>
                                        <div class="col-md-5">
                                            <select class="form-control" id="prop_water_src_id" name="prop_water_src_id">
                                                <option value="1" selected>PAM</option>
                                                <option value="2">Sumur</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- prop_surface_area -->
                                    <div class="form-group">
                                        <label for="prop_surface_area" class="col-md-2 control-label">Surface Area</label>
                                        <div class="col-md-5">
                                            <input type="text" class="form-control" id="prop_surface_area" name="prop_surface_area" placeholder="Surface Area (e.g. 100)">
                                        </div>
                                    </div>
                                    <!-- prop_building_area -->
                                    <div class="form-group">
                                        <label for="prop_building_area" class="col-md-2 control-label">Building Area</label>
                                        <div class="col-md-5">
                                            <input type="text" class="form-control" id="prop_building_area" name="prop_building_area" placeholder="Building Area (e.g. 80)">
                                        </div>
                                    </div>
                                    <!-- prop_certificate -->
                                    <div class="form-group">
                                        <label for="prop_certificate" class="col-md-2 control-label">Certificate</label>
                                        <div class="col-md-5">
                                            <input type="text" class="form-control" id="prop_certificate" name="prop_certificate" placeholder="Property Certificate (e.g. SHM)">
                                        </div>
                                    </div>
                                    <!-- prop_price -->
                                    <div class="form-group">
                                        <label for="prop_building_area" class="col-md-2 control-label">Price</label>
                                        <div class="col-md-5">
                                            <input type="text" class="form-control" id="prop_price" name="prop_price" placeholder="Property Price">
                                        </div>
                                    </div>
                                    <!-- prop_fee -->
                                    <div class="form-group">
                                        <label for="prop_fee" class="col-md-2 control-label">Fee</label>
                                        <div class="col-md-5">
                                            <input type="text" class="form-control" id="prop_fee" name="prop_fee" placeholder="Fee (e.g. 2%)">
                                        </div>
                                    </div>
                                    <!-- prop_owner_name -->
                                    <div class="form-group">
                                        <label for="prop_owner_name" class="col-md-2 control-label">Owner Name</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" id="prop_owner_name" name="prop_owner_name" placeholder="Owner Name">
                                        </div>
                                    </div>
                                    <!-- prop_owner_contact -->
                                    <div class="form-group">
                                        <label for="prop_owner_contact" class="col-md-2 control-label">Owner Contact</label>
                                        <div class="col-md-5">
                                            <input type="text" class="form-control" id="prop_owner_contact" name="prop_owner_contact" placeholder="Owner Contact">
                                        </div>
                                    </div>
                                    <!-- prop_notes -->
                                    <div class="form-group">
                                        <label for="prop_notes" class="col-md-2 control-label">Notes</label>
                                        <div class="col-md-10">
                                            <textarea class="form-control" rows="3" id="prop_notes" name="prop_notes"></textarea>
                                        </div>
                                    </div>
                                    <!-- buttons -->
                                    <div class="form-group">
                                        <div class="col-md-10 col-md-offset-2">
                                            <button type="button" class="btn btn-default">Cancel</button>
                                            <button type="submit" class="btn btn-primary">Create</button>
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
