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
                                    <h3 class="text-primary">Property List</h3>
                                </div>
                                <div class="col-md-2">
                                    <a href="{{ route('property_list.create') }}" class="btn btn-primary pull-right">
                                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> create
                                    </a>
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
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($properties as $property)
                                    <tr>
                                        <td style="vertical-align: middle;">{{ $property->prop_name }}</td>
                                        <td style="vertical-align: middle;">{{ $property->list_type->list_type_name }}</td>
                                        <td style="vertical-align: middle;">{{ $property->property_type->prop_type_name }}</td>
                                        <td style="vertical-align: middle;">{{ $property->location->location_name }}</td>
                                        <td style="vertical-align: middle;">{{ $property->created_at}}</td>
                                        <td style="vertical-align: middle;">
                                            <a href="javascript:void(0)" class="btn btn-xs btn-warning btn-raised">
                                                <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                            </a>
                                        </td>
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
