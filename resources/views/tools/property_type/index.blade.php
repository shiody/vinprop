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
                            <!-- title -->
                            <div class="row">
                                <div class="col-md-10">
                                    <h3 class="text-primary">Property Type</h3>
                                </div>
                                <div class="col-md-2" style="text-align: right;">
                                    <a href="{{ route('property_type.create') }}" class="btn btn-primary">
                                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> create
                                    </a>
                                </div>
                            </div>
                            <hr/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                        <!-- location table -->
                        <table class="table table-striped table-hover ">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Status</th>
                                    <th>Created</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($property_types as $property_type)
                                    <tr>
                                        <td style="vertical-align: middle;">{{ $property_type->prop_type_name }}</td>
                                        @if ($property_type->status == 1)
                                        <td style="vertical-align: middle;">active</td>
                                        @else
                                        <td style="vertical-align: middle;">inactive</td>
                                        @endif
                                        <td style="vertical-align: middle;">{{ \Carbon\Carbon::parse($property_type->created_at)->format('d-m-Y') }}</td>
                                        <td style="vertical-align: middle;">
                                            <a href="{{ route('property_type.edit', $property_type->prop_type_id) }}" class="btn btn-xs btn-warning btn-raised">
                                                edit
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <!-- pagination -->
                        {{ $property_types->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
