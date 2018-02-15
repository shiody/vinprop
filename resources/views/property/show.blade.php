@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <!-- panel body -->
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-12" style="text-align: right;">
                                    <a id="download_btn" href="" class="btn btn-danger">
                                        <span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span>
                                    </a>
                                    <a href="{{ route('property_list.index') }}" class="btn btn-default">
                                        <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br/>
                    <div class="row" style="padding-left: 4em; padding-right: 4em;">
                        <div class="col-md-5 thumbnail">
                            @if ($property->prop_image == null)
                                <img class="img-responsive" src="/images/properties/default.jpg">
                            @else
                                <img class="img-responsive" src="{{ $property->prop_image }}">
                            @endif
                        </div>
                        <div class="col-md-7" style="padding-left: 2em; padding-right: 2em;">
                            <!-- name -->
                            <h3 class="text-primary" style="margin: 0em;">{{ $property->prop_name }}</h3>
                            <!-- main info -->
                            <div class="row" style="margin-top: 1em; margin-bottom: 1em;">
                                <div class="col-md-12">
                                    @if ($property->prop_type_id != 0)
                                    <h4>{{ $property->property_type->prop_type_name }}</h4>
                                    @endif
                                    <h4>
                                        IDR {{ number_format($property->prop_price) }}
                                        @if ($property->prop_list_type_id != 0)
                                        ({{ $property->list_type->list_type_name }})
                                        @endif
                                    </h4>
                                    <h4>{{ $property->prop_address }}</h4>
                                    @if ($property->prop_location_id != 0)
                                    <h4>{{ $property->location->location_name }}</h4>
                                    @endif
                                </div>
                            </div>
                            <!-- details -->
                            <h4 style="color: #BDBDBD">Details</h4>
                            <table class="table table-striped">
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
                                    @if ($property->prop_water_src_id != 0)
                                    <td>{{ $property->water_source->water_src_name }}</td>
                                    @else
                                    <td></td>
                                    @endif
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
                                    <td>Owner Name</td>
                                    <td>{{ $property->prop_owner_name }}</td>
                                </tr>
                                <tr>
                                    <td>Owner Contact</td>
                                    <td>{{ $property->prop_owner_contact }}</td>
                                </tr>
                                <tr>
                                    <td>Marketing Name</td>
                                    <td>{{ $property->user->name }}</td>
                                </tr>
                                <tr>
                                    <td>Fee</td>
                                    <td>{{ $property->prop_fee }}&nbsp;%</td>
                                </tr>
                                <tr>
                                    <td>Rent Status</td>
                                    <td>
                                        @if ($property->prop_rent_status == 0)
                                            Available
                                        @else
                                            Rented
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td>Expired Date</td>
                                    <td>{{ \Carbon\Carbon::parse($property->expired_at)->format('d-m-Y') }}</td>
                                </tr>
                                <tr>
                                    <td>Notes</td>
                                    <td>{{ $property->prop_notes }}</td>
                                </tr>
                                <tr>
                                    <td>Marketing Notes</td>
                                    <td>{{ $property->prop_user_notes }}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>

                {!! Form::open(['url'=>'/property_list/single_download', 'method'=>'post', 'id'=>'download_form']) !!}
                    <input type="hidden" id="download_prop_name" name="download_prop_name" value="{{ $property->prop_name }}">
                {!! Form::close() !!}

            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    // download pdf
    $("#download_btn").click(function(event) {
        event.preventDefault();
        $("#download_form").submit();
    })
</script>

@endsection
