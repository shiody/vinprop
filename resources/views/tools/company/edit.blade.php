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
                                    <h3 class="text-primary">Edit Company Profile</h3>
                                </div>
                            </div>
                            <hr/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <!-- company profile form -->
                            {{-- <form class="form-horizontal"> --}}
                            {!! Form::model($company, ['route'=>['company_profile.update', $company->company_id], 'method'=>'put', 'files'=>true, 'class'=>'form-horizontal']) !!}
                                <fieldset>
                                    <!-- name -->
                                    <div class="form-group">
                                        <label for="company_name" class="col-md-2 control-label">Name</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" id="company_name" name="company_name" value="{{ $company->company_name }}">
                                        </div>
                                    </div>
                                    <!-- address -->
                                    <div class="form-group">
                                        <label for="company_address" class="col-md-2 control-label">Address</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" id="company_address" name="company_address" value="{{ $company->company_address }}">
                                        </div>
                                    </div>
                                    <!-- phone -->
                                    <div class="form-group">
                                        <label for="company_phone" class="col-md-2 control-label">Phone</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" id="company_phone" name="company_phone" value="{{ $company->company_phone }}">
                                        </div>
                                    </div>
                                    <!-- fax -->
                                    <div class="form-group">
                                        <label for="company_fax" class="col-md-2 control-label">Fax</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" id="company_fax" name="company_fax" value="{{ $company->company_fax }}">
                                        </div>
                                    </div>
                                    <!-- email -->
                                    <div class="form-group">
                                        <label for="company_email" class="col-md-2 control-label">Email</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" id="company_email" name="company_email" value="{{ $company->company_email }}">
                                        </div>
                                    </div>
                                    <!-- logo -->
                                    <div class="form-group">
                                        <label for="company_logo" class="col-md-2 control-label">Logo</label>
                                        <div class="col-md-5">
                                            <div class="row">
                                                @if ($company->company_logo != null)
                                                <div class="col-md-12 thumbnail">
                                                    <img class="img-responsive" src="{{ $company->company_logo }}">
                                                </div>
                                                @endif
                                                <div class="col-md-12">
                                                    <input type="text" readonly="" class="form-control" placeholder="Browse...">
                                                    {!! Form::file('company_logo') !!}
                                                    <span class="text-info">*max size 2 MB, old image will be repalced</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- buttons -->
                                    <div class="form-group">
                                        <div class="col-md-10 col-md-offset-2">
                                            <a href="{{ route('company_profile.index') }}" class="btn btn-default">Cancel</a>
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
