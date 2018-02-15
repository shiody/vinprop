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
                                    <h3 class="text-primary">Create New Marketing Profile</h3>
                                </div>
                            </div>
                            <hr/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <!-- marketing form -->
                            {{-- <form class="form-horizontal"> --}}
                            {!! Form::open(['route'=>'marketing_profile.store', 'method'=>'post', 'files'=>true, 'class'=>'form-horizontal']) !!}
                                <fieldset>
                                    <!-- name -->
                                    <div class="form-group">
                                        <label for="name" class="col-md-2 control-label">Name</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
                                        </div>
                                    </div>
                                    <!-- email -->
                                    <div class="form-group">
                                        <label for="email" class="col-md-2 control-label">Email</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" id="email" name="email" placeholder="Email" required>
                                        </div>
                                    </div>
                                    <!-- phone -->
                                    <div class="form-group">
                                        <label for="phone" class="col-md-2 control-label">Phone</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone" required>
                                        </div>
                                    </div>
                                    <!-- password -->
                                    <div class="form-group">
                                        <label for="password" class="col-md-2 control-label">Password</label>
                                        <div class="col-md-10">
                                            <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                                        </div>
                                    </div>
                                    <!-- buttons -->
                                    <div class="form-group">
                                        <div class="col-md-10 col-md-offset-2">
                                            <a href="{{ route('marketing_profile.index') }}" class="btn btn-default">Cancel</a>
                                            <button type="submit" class="btn btn-primary">Create</button>
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
