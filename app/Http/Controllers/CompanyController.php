<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;

class CompanyController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the property type list.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
    	$company = Company::find(\Auth::user()->company_id);
        return view('tools.company.index', ['company' => $company]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return redirect()->route('company.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return redirect()->route('company.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $company = Company::find(\Auth::user()->company_id);

        return view('tools.company.edit', ['company' => $company]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'company_name' => 'required',
            'company_address' => 'required',
            'company_phone' => 'required'
        ]);

        $company = Company::find(\Auth::user()->company_id);
        $company->company_name = $request->input('company_name');
        $company->company_address = $request->input('company_address');
        $company->company_phone = $request->input('company_phone');
        $company->company_fax = $request->input('company_fax');
        $company->company_email = $request->input('company_email');

        if($request->hasFile('company_logo'))
        {
            $comp_name = $request->input('company_name');
            $file_name = $comp_name . '.' . $request->file('company_logo')->getClientOriginalExtension();
            $public_path = base_path() . '/public/';
            $image_path = '/images/companies/';
            $request->file('image')->move($public_path . $image_path, $file_name);
            $company->company_logo = $image_path . $file_name;
        }

        $company->save();

        return redirect()->route('company_profile.index')->with('success', 'Company Profile updated successfully');
    }
}
