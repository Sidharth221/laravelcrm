<?php

namespace App\Http\Controllers;

use App\models\employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = employee::paginate(10);
        return view ('dashboardEmployee', ['employees'=>$employees]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $employee = new employee;
        $employee->FirstName = $request->FirstName;
        $employee->LastName = $request->LastName;
        $employee->company = $request->cmp;
        $employee->email = $request->email;
        $employee->phone = $request->phone;
        
        $employee->save();

        return redirect(route('employee_index'))->with('status','Employee Added');
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
        $employee = employee::find($id);
        return view('editEmployee',['employee'=>$employee]);
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
        $employee = employee::find($id);
        $employee->FirstName = $request->FirstName;
        $employee->LastName = $request->LastName;
        $employee->company = $request->cmp;
        $employee->email = $request->email;
        $employee->phone = $request->phone;
        $employee->save();

        return redirect(route('employee_index'))->with('status','Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        employee::destroy($id);
        return redirect(route('employee_index'))->with('status','Deleted');
    }
}
