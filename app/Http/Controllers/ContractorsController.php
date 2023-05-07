<?php

namespace App\Http\Controllers;

use App\Models\Contractors;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ContractorsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['page_title'] = "Contractors Management - 3d Lider";
        $data['contracts'] = Contractors::where('status', 1)->get();
        return view('contracts.contract_list', $data);
    }

    public function contractor_form($id = false)
    {
        $data['page_title'] = "Add Contractor - 3d Lider";
        if ($id) {
            $data['contractor'] = Contractors::where('contract_id', $id)->first(); //Staff::where
        } else {
            $data['contractor'] = false;
        }
        return view('contracts.contractor_form', $data);
    }


    public function save_contract(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "sap_contract_number" => "required",
            "contract_description" => "required",
            "area" => "required",
            "contract_inspector" => "required",
            "contract_validity_from" => "required",
            "contract_validity_until" => "required",
            "no_of_personnel" => "required",
            "no_of_vehicles" => "required",
            "controlled_substances" => "required",
            "contract_assigned_company" => "required",
        ]);
        if ($validator->passes()) {

            try {
                $contract = Contractors::updateOrCreate(
                    [
                        'contract_id' => $request->contract_id,
                    ], [
                    "sap_contract_number" => $request->sap_contract_number,
                    "contract_description" => $request->contract_description,
                    "area" => $request->area,
                    "contract_inspector" => $request->contract_inspector,
                    "contract_validity_from" => $request->contract_validity_from,
                    "contract_validity_until" => $request->contract_validity_until,
                    "no_of_personnel" => $request->no_of_personnel,
                    "no_of_vehicles" => $request->no_of_vehicles,
                    "controlled_substances" => $request->controlled_substances,
                    "contract_assigned_company" => $request->contract_assigned_company,
                    "added_by" => \auth()->user()->user_id
                ]);
                if ($contract->wasRecentlyCreated) {
                    $response['status'] = "Success";
                    $response['result'] = "Contract Add Successfully";
                } else {
                    $response['status'] = "Success";
                    $response['result'] = "Contract Updated Successfully";
                }
            } catch (\Exception $ex) {
                $response['status'] = "Failure!";
                $response['result'] = $ex;
            }
        } else {
            $response['status'] = "Validator!";
            $response['result'] = $validator->errors()->toJson();
        }
        return response()->json($response);
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
    public function show(Contractors $contractors)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contractors $contractors)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contractors $contractors)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    function delete_contract(Request $request)
    {
    dd($request->all());
    }
}
