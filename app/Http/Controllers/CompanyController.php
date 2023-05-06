<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['page_title'] = "Company - 3dlider";
        $data['company'] = Company::where('added_by', Auth::user()->user_id)->first();
        return view('company.add_company',$data);
    }

    public function save(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "country" => "required",
            "department" => "required",
            "city" => "required",
            "address" => "required",
            "phone" => "required",
            "name" => "required",
            "email" => "required|email",
            "position" => "required",
            "inspector_email" => "required|email",
            "fund" => "required",
        ]);
        if($validator->passes()) {
            $data = [
                "country" => $request->country,
                "department" => $request->department,
                "city" => $request->city,
                "address" => $request->address,
                "phone" => $request->phone,
                "name" => $request->name,
                "email" => $request->email,
                "position" => $request->position,
                "inspector_email" => $request->inspector_email,
                "fund" => $request->fund,
                "added_by" => Auth::user()->user_id,
            ];
            if($request->company_id>0){
                Company::where('company_id',$request->company_id)->update($data);
            } else {
                Company::Create($data);
            }
            $response['status'] = "Success";
            $response['result'] = "Updated";
        } else {
            $response['status'] = "Failure!";
            $response['result'] = $validator->errors()->toJson();
        }
        return response()->json($response);
    }
}
