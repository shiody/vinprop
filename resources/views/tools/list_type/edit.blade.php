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
                                    <h3 class="text-primary">Edit List Type</h3>
                                </div>
                            </div>
                            <hr/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <!-- list type form -->
                            {{-- <form class="form-horizontal"> --}}
                            {!! Form::model($list_type, ['route'=>['list_type.update', $list_type->list_type_id], 'method'=>'put', 'files'=>true, 'class'=>'form-horizontal']) !!}
                                <fieldset>
                                    <!-- list_type_name -->
                                    <div class="form-group">
                                        <label for="prop_type_name" class="col-md-2 control-label">Name</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" id="list_type_name" name="list_type_name" value="{{ $list_type->list_type_name }}">
                                        </div>
                                    </div>
                                    <!-- status -->
                                    <div class="form-group">
                                        <label for="status" class="col-md-2 control-label">Status</label>
                                        <div class="col-md-5">
                                            <select class="form-control" id="status" name="status">
                                                <option value="1" @if ($list_type->status == 1) selected @endif>active</option>
                                                <option value="0" @if ($list_type->status == 0) selected @endif>inactive</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- buttons -->
                                    <div class="form-group">
                                        <div class="col-md-10 col-md-offset-2">
                                            <a href="{{ route('list_type.index') }}" class="btn btn-default">Cancel</a>
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