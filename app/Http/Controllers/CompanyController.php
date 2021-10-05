<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\company;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $companies = company::paginate(10);
        return view ('dashboardCompany', ['companies'=>$companies]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $comp = new company;
        $comp->Name = $request->Name;
        $comp->email = $request->email;
     
        $comp->website = $request->website;
         
        if($request->hasfile('logo'))
        {
            $file = $request->file('logo');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('storage/app/public/', $filename);
            $comp->logo = $filename;
        }
        else {
            return $request;
            $comp->logo= '';
        }
        $comp->save();

        return redirect(route('company_index'))->with('status','Company Added');
        
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $company = company::find($id);
        return view('editCompany',['company'=>$company]);
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
        $company = company::find($id);
        $company->Name = $request->Name;
        $company->email = $request->email;
        $company->logo = "asfd";
        $company->website = $request->website;
        $company->save();

        return redirect(route('company_index'))->with('status','Updated');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        company::destroy($id);
        return redirect(route('company_index'))->with('status','deleted');
    }
}
