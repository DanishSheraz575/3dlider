<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class VehiclesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['page_title'] = "Vehicles Management - 3d Lider";
        return view('vehicles.vehicles_list', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function vehicle_form($id = false)
    {
        $data['page_title'] = "Vehicles Management - 3d Lider";
        if($id){
            $data['vehicle_data'] = Vehicle::where('vehicle_id', $id)->first(); //vehicle::where
        } else {
            $data['vehicle_data'] = false;
        }
        return view('vehicles.add_vehicles', $data);
    }

    public function vehicle_features(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "type" => "required",
            "plate_num" => "required",
            "chasis_num" => "required",
            "ability" => "required",
            "year_of_production" => "required",
            "engine_num" => "required",
            "model" => "required",
            "brand" => "required",
            "displacement" => "required",
            "mileage" => "required",
            "unit_type" => "required",
            'photo'=> 'image|mimes:png,gif,jpeg,jpg,webp|max:2048',
        ]);
        if($validator->passes()) {
            $data = [
                "type" => $request->type,
                "plate_num" => $request->plate_num,
                "chasis_num" => $request->chasis_num,
                "ability" => $request->ability,
                "year_of_production" => $request->year_of_production,
                "engine_num" => $request->engine_num,
                "model" => $request->model,
                "brand" => $request->brand,
                "displacement" => $request->displacement,
                "mileage" => $request->mileage,
                "unit_type" => $request->unit_type,
                "added_by" => Auth::user()->user_id,
            ];
            if($request->file('photo')) {
                $name = time() . rand(1, 100) . '.' . $request->file('photo')->extension();
                $request->file('photo')->move(public_path('images/vehicles'), $name);
                $data['photo']=$name;
            }
            if($request->vehicle_id>0){
                Vehicle::where('vehicle_id',$request->vehicle_id)->update($data);
                $vehicle = $request;
            } else {
                $vehicle = Vehicle::Create($data);
            }
            $response['status'] = "Success";
            $response['result'] = $vehicle->vehicle_id;
        } else {
            $response['status'] = "Failure!";
            $response['result'] = $validator->errors()->toJson();
        }
        return response()->json($response);
    }
}
