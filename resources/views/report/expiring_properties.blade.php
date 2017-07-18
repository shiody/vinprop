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
                                    <h3 class="text-primary">Expiring Properties</h3>
                                </div>
                            </div>
                            <hr/>
                            <div class="row">
                                <div class="col-md-12">
                                    {!! Form::open(['url'=>'/report/expiring_properties_search', 'method'=>'post', 'class'=>'form-inline']) !!}
                                        <div class="form-group col-md-2"><select class="form-control" id="search_expiring_month" name="search_expiring_month" style="width: 100%;">
                                                <option value="">Default Range</option>
                                                <option value="01" @if ($search_expiring_month == "01") selected @endif>January</option>
                                                <option value="02" @if ($search_expiring_month == "02") selected @endif>February</option>
                                                <option value="03" @if ($search_expiring_month == "03") selected @endif>March</option>
                                                <option value="04" @if ($search_expiring_month == "04") selected @endif>April</option>
                                                <option value="05" @if ($search_expiring_month == "05") selected @endif>May</option>
                                                <option value="06" @if ($search_expiring_month == "06") selected @endif>June</option>
                                                <option value="07" @if ($search_expiring_month == "07") selected @endif>July</option>
                                                <option value="08" @if ($search_expiring_month == "08") selected @endif>August</option>
                                                <option value="09" @if ($search_expiring_month == "09") selected @endif>September</option>
                                                <option value="10" @if ($search_expiring_month == "10") selected @endif>October</option>
                                                <option value="11" @if ($search_expiring_month == "11") selected @endif>November</option>
                                                <option value="12" @if ($search_expiring_month == "12") selected @endif>December</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <button type="submit" class="btn btn-default">
                                                <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                                            </button>
                                        </div>
                                    {!! Form::close() !!}
                                </div>
                            </div>
                            <hr/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                        <!-- property table -->
                        <table class="table table-striped table-hover ">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>List Type</th>
                                    <th>Property Type</th>
                                    <th>Location</th>
                                    <th>Created</th>
                                    <th>Expired</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($properties as $property)
                                    <tr>
                                        <td style="vertical-align: middle;">{{ $property->prop_name }}</td>
                                        <td style="vertical-align: middle;">{{ $property->list_type->list_type_name }}</td>
                                        <td style="vertical-align: middle;">{{ $property->property_type->prop_type_name }}</td>
                                        <td style="vertical-align: middle;">{{ $property->location->location_name }}</td>
                                        <td style="vertical-align: middle;">{{ \Carbon\Carbon::parse($property->created_at)->format('d-m-Y') }}</td>
                                        <td style="vertical-align: middle;">{{ \Carbon\Carbon::parse($property->expired_at)->format('d-m-Y') }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <!-- pagination -->
                        {{ $properties->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
