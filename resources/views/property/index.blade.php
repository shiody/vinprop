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
                                    <h3 class="text-primary">Property List</h3>
                                </div>
                            </div>
                            <hr/>
                            <div class="row">
                                <div class="col-md-12">
                                    {!! Form::open(['url'=>'/property_list/search', 'method'=>'post', 'class'=>'form-inline']) !!}
                                        <div class="form-group col-md-2">
                                            <input type="text" class="form-control" id="search_prop_name" name="search_prop_name" placeholder="Property Name" value="{{ $search_prop_name }}" style="width: 100%;">
                                        </div>
                                        <div class="form-group col-md-2">
                                            <select class="form-control" id="search_prop_list_type_id" name="search_prop_list_type_id" style="width: 100%;">
                                                <option value="">All List Type</option>
                                                @foreach ($list_types as $list_type)
                                                <option value="{{ $list_type->list_type_id }}" @if ($list_type->list_type_id == $search_prop_list_type_id) selected @endif>{{ $list_type->list_type_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group col-md-2">
                                            <select class="form-control" id="search_prop_type_id" name="search_prop_type_id" style="width: 100%;">
                                                <option value="">All Property Type</option>
                                                @foreach ($property_types as $property_type)
                                                <option value="{{ $property_type->prop_type_id }}" @if ($property_type->prop_type_id == $search_prop_type_id) selected @endif>{{ $property_type->prop_type_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group col-md-2">
                                            <select class="form-control" id="search_prop_location_id" name="search_prop_location_id" style="width: 100%;">
                                                <option value="">All Location</option>
                                                @foreach ($locations as $location)
                                                <option value="{{ $location->location_id }}" @if ($location->location_id == $search_prop_location_id) selected @endif>{{ $location->location_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <button type="submit" class="btn btn-default">
                                                <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                                            </button>
                                            <a id="download_btn" href="" class="btn btn-danger">
                                                <span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span>
                                            </a>
                                            <a href="{{ route('property_list.create') }}" class="btn btn-primary">
                                                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                                            </a>
                                        </div>
                                    {!! Form::close() !!}
                                    {!! Form::open(['url'=>'/property_list/download', 'method'=>'post', 'id'=>'download_form']) !!}
                                        <input type="hidden" id="download_prop_name" name="download_prop_name">
                                        <input type="hidden" id="download_prop_list_type_id" name="download_prop_list_type_id">
                                        <input type="hidden" id="download_prop_type_id" name="download_prop_type_id">
                                        <input type="hidden" id="download_prop_location_id" name="download_prop_location_id">
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
                                            <a href="{{ route('property_list.show', $property->prop_name) }}" class="btn btn-xs btn-info btn-raised">
                                                view
                                            </a>
                                            <a href="{{ route('property_list.edit', $property->prop_name) }}" class="btn btn-xs btn-warning btn-raised">
                                                edit
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

<script type="text/javascript">
    // download pdf
    $("#download_btn").click(function(event) {
        event.preventDefault();
        $("#download_prop_name").val($("#search_prop_name").val());
        $("#download_prop_list_type_id").val($("#search_prop_list_type_id").val());
        $("#download_prop_type_id").val($("#search_prop_type_id").val());
        $("#download_prop_location_id").val($("#search_prop_location_id").val());
        $("#download_form").submit();
        console.log($("#download_form").serialize());
    })
</script>

@endsection
