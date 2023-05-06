<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['page_title'] = "Staff Management - 3d Lider";
        return view('staff.add_staff', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Staff $staff)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Staff $staff)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Staff $staff)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Staff $staff)
    {
        //
    }

    public function personal_form(Request $request)
    {
        $response['status'] = "Success";
        $response['result'] = "Updated";
        return response()->json($response);
    }

    public function foreign_form(Request $request)
    {
        $response['status'] = "Success";
        $response['result'] = "Updated";
        return response()->json($response);
    }

    public function labor_form(Request $request)
    {
        $response['status'] = "Success";
        $response['result'] = "Updated";
        return response()->json($response);
    }

}
