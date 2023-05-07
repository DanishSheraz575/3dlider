<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;


class StaffController extends Controller
{
    public function index()
    {
        $data['page_title'] = "Staff Management - 3d Lider";
        $data['staff_list'] = Staff::where([
            'status' => 1
        ])->get();
        return view('staff.staff_list', $data);
    }

    public function staff_form($id=false)
    {
        $data['page_title'] = "Staff Management - 3dLider";
        if($id){
            $data['staff_data'] = Staff::where('staff_id', $id)->first(); //Staff::where
        } else {
            $data['staff_data'] = false;
        }
        return view('staff.add_staff', $data);
    }

    public function personal_form(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "first_name" => "required",
            "last_name" => "required",
            "identity_cell" => "required",
            "issued_in" => "required",
            "phone" => "required",
            "gender" => "required",
            "civil_status" => "required",
            "is_foreign" => "required",
            "place_of_birth" => "required",
            "dob" => "required",
            "nationality" => "required",
            "profession" => "required",
            "nua_no" => "required",
            'photo'=> 'image|mimes:png,gif,jpeg,jpg,webp|max:2048',
        ]);
        if($validator->passes()) {
            $data = [
                "first_name" => $request->first_name,
                "last_name" => $request->last_name,
                "identity_cell" => $request->identity_cell,
                "issued_in" => $request->issued_in,
                "phone" => $request->phone,
                "gender" => $request->gender,
                "civil_status" => $request->civil_status,
                "is_foreign" => $request->is_foreign,
                "place_of_birth" => $request->place_of_birth,
                "dob" => $request->dob,
                "nationality" => $request->nationality,
                "profession" => $request->profession,
                "nua_no" => $request->nua_no,
                "added_by" => Auth::user()->user_id,
            ];
            if($request->file('photo')) {
                $name = time() . rand(1, 100) . '.' . $request->file('photo')->extension();
                $request->file('photo')->move(public_path('images/staff'), $name);
                $data['photo']=$name;
                //dd($data);
            }
            if($request->staff_id>0){
                Staff::where('staff_id',$request->staff_id)->update($data);
                $staff = $request;
            } else {
                $staff = Staff::Create($data);
            }
            $response['status'] = "Success";
            $response['result'] = $staff->staff_id;
        } else {
            $response['status'] = "Failure!";
            $response['result'] = $validator->errors()->toJson();
        }
        return response()->json($response);
    }

    public function foreign_form(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "staff_id" => "required",
            "residence_type" => "required",
            "awarded_from" => "required",
            "awarded_until" => "required",
            "valid_passport" => "required",
        ]);
        if($validator->passes()) {
            $data = [
                "residence_type" => $request->residence_type,
                "awarded_from" => $request->awarded_from,
                "awarded_until" => $request->awarded_until,
                "valid_passport" => $request->valid_passport,
            ];
            Staff::where('staff_id',$request->staff_id)->update($data);
            $response['status'] = "Success";
            $response['result'] = "Saved";
        } else {
            $response['status'] = "Failure!";
            $response['result'] = $validator->errors()->toJson();
        }
        return response()->json($response);
    }

    public function labor_form(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "staff_id" => "required",
            "date_of_admission" => "required",
            "func" => "required",
            "type_of_contract" => "required",
            "relationship_with_contractor" => "required",
            "subcontractor_name" => "required",
            "license_no" => "required",
            "date_of_issue" => "required",
            "date_of_expiry" => "required",
        ]);
        if($validator->passes()) {
            $data = [
                "date_of_admission" => $request->date_of_admission,
                "func" => $request->func,
                "type_of_contract" => $request->type_of_contract,
                "relationship_with_contractor" => $request->relationship_with_contractor,
                "subcontractor_name" => $request->subcontractor_name,
                "license_no" => $request->license_no,
                "date_of_issue" => $request->date_of_issue,
                "date_of_expiry" => $request->date_of_expiry,
            ];
            Staff::where('staff_id',$request->staff_id)->update($data);
            $response['status'] = "Success";
            $response['result'] = "Saved";
        } else {
            $response['status'] = "Failure!";
            $response['result'] = $validator->errors()->toJson();
        }
        return response()->json($response);
    }

}
