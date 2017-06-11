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
                                <div class="col-md-10">
                                    <!-- title -->
                                    <h3 class="text-primary">{{ $property->prop_name }}</h3>
                                </div>
                                <div class="col-md-2">
                                    <a href="{{ route('property_list.index') }}" class="btn btn-default pull-right">
                                        <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                                    </a>
                                </div>
                            </div>
                            <hr/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5 thumbnail">
                            @if ($property->prop_image == null)
                                <img class="img-responsive" src="/images/properties/default.jpg">
                            @else
                                <img class="img-responsive" src="{{ $property->prop_image }}">
                            @endif
                        </div>
                        <div class="col-md-7">
                            <table>
                                <tr>
                                    <td>Owner</td>
                                    <td>{{ $property->prop_owner_name }}</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>{{ $property->prop_owner_contact }}</td>
                                </tr>
                                <tr>
                                    <td>Sales</td>
                                    <td>{{ $property->user->name }}</td>
                                </tr>
                                <tr>
                                    <td>Price</td>
                                    <td>IDR {{ number_format($property->prop_price) }}</td>
                                </tr>
                                <tr>
                                    <td>Fee</td>
                                    <td>{{ $property->prop_fee }}&nbsp;%</td>
                                </tr>
                                <tr>
                                    <td>Expired Date</td>
                                    <td>{{ \Carbon\Carbon::parse($property->expired_at)->format('d-m-Y') }}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <h4>Details</h4>
                            <table>
                                <tr>
                                    <td>Location</td>
                                    <td>{{ $property->location->location_name }}</td>
                                </tr>
                                <tr>
                                    <td>Address</td>
                                    <td>{{ $property->prop_address }}</td>
                                </tr>
                                <tr>
                                    <td>Bedroom</td>
                                    <td>{{ $property->prop_bedroom }}</td>
                                </tr>
                                <tr>
                                    <td>Maids Room</td>
                                    <td>{{ $property->prop_maids_room }}</td>
                                </tr>
                                <tr>
                                    <td>Bathroom</td>
                                    <td>{{ $property->prop_bathroom }}</td>
                                </tr>
                                <tr>
                                    <td>Floor</td>
                                    <td>{{ $property->prop_floor }}</td>
                                </tr>
                                <tr>
                                    <td>Phone Lines</td>
                                    <td>{{ $property->prop_phone_lines }}</td>
                                </tr>
                                <tr>
                                    <td>Electricity</td>
                                    <td>{{ $property->prop_electricity }}</td>
                                </tr>
                                <tr>
                                    <td>Water Source</td>
                                    <td>{{ $property->water_source->water_src_name }}</td>
                                </tr>
                                <tr>
                                    <td>Surface Area</td>
                                    <td>{{ $property->prop_surface_area }}</td>
                                </tr>
                                <tr>
                                    <td>Building Area</td>
                                    <td>{{ $property->prop_building_area }}</td>
                                </tr>
                                <tr>
                                    <td>Certificate</td>
                                    <td>{{ $property->prop_certificate }}</td>
                                </tr>
                                <tr>
                                    <td>Notes</td>
                                    <td>{{ $property->prop_notes }}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
