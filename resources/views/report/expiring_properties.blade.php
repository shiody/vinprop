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
