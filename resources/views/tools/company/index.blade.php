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
                                    <h3 class="text-primary">Company Profile</h3>
                                </div>
                                <div class="col-md-2" style="text-align: right;">
                                    <a href="{{ route('company_profile.edit', $company->company_id) }}"" class="btn btn-warning">
                                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> edit
                                    </a>
                                </div>
                            </div>
                            <hr/>
                        </div>
                    </div>
                    <div class="row" style="padding-left: 4em; padding-right: 4em;">
                        <div class="col-md-2 thumbnail">
                            @if ($company->company_logo == null)
                                <img class="img-responsive" src="/images/properties/default.jpg">
                            @else
                                <img class="img-responsive" src="{{ $company->company_logo }}">
                            @endif
                        </div>
                        <div class="col-md-10" style="padding-left: 2em; padding-right: 2em;">
                            <!-- name -->
                            <div class="row" style="margin-top: 1em; margin-bottom: 1em;">
                                <div class="col-md-12">
                                    <h3 style="margin: 0em;">{{ $company->company_name }}</h3>
                                </div>
                            </div>
                            <!-- details -->
                            <table class="table table-striped">
                                <tr>
                                    <td class="text-primary" style="text-align: right; width: 100px;">Address</td>
                                    <td>{{ $company->company_address }}</td>
                                </tr>
                                <tr>
                                    <td class="text-primary" style="text-align: right; width: 100px;">Phone</td>
                                    <td>{{ $company->company_phone }}</td>
                                </tr>
                                <tr>
                                    <td class="text-primary" style="text-align: right; width: 100px;">Fax</td>
                                    <td>{{ $company->company_fax }}</td>
                                </tr>
                                <tr>
                                    <td class="text-primary" style="text-align: right; width: 100px;">Email</td>
                                    <td>{{ $company->company_email }}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <br/>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
