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
                                    <h3 class="text-primary">Edit Marketing Profile</h3>
                                </div>
                            </div>
                            <hr/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <!-- marketing form -->
                            {{-- <form class="form-horizontal"> --}}
                            {!! Form::model($user, ['route'=>['marketing_profile.update', $user->id], 'method'=>'put', 'files'=>true, 'class'=>'form-horizontal']) !!}
                                <fieldset>
                                    <!-- user_name -->
                                    <div class="form-group">
                                        <label for="name" class="col-md-2 control-label">Name</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}">
                                        </div>
                                    </div>
                                    <!-- email -->
                                    <div class="form-group">
                                        <label for="email" class="col-md-2 control-label">Email</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" id="email" name="email" value="{{ $user->email }}">
                                        </div>
                                    </div>
                                    <!-- phone -->
                                    <div class="form-group">
                                        <label for="phone" class="col-md-2 control-label">Phone</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" id="phone" name="phone" value="{{ $user->phone }}">
                                        </div>
                                    </div>
                                    <!-- buttons -->
                                    <div class="form-group">
                                        <div class="col-md-10 col-md-offset-2">
                                            <a href="{{ route('marketing_profile.index') }}" class="btn btn-default">Cancel</a>
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
