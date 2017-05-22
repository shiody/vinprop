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
                            <!-- title -->
                            <h3 class="text-primary">Location</h3>
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
                                @foreach ($locations as $location)
                                    <tr>
                                        <td style="vertical-align: middle;">{{ $location->location_name }}</td>
                                        @if ($location->status == 1)
                                        <td style="vertical-align: middle;">active</td>
                                        @else
                                        <td style="vertical-align: middle;">inactive</td>
                                        @endif
                                        <td style="vertical-align: middle;">{{ $location->created_at}}</td>
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
                        {{ $locations->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
