<div class="card">
    <div class="card-header">
        <h4 class="card-title">Add New Staff</h4>
    </div>
    <div class="card-content">
        <div class="card-body">
            <form class="form" id="labor_form">
                @csrf
                <div class="form-body">
                    <h4 class="form-section mt-3"><i class="ft-eye"></i> Labor data</h4>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <h5>Date of admission<span class="required">*</span></h5>
                                <div class="controls">
                                    <input value="{{$staff_data ? $staff_data->date_of_admission: ''}}" name="date_of_admission" type="date" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <h5>Total Remuneration<span class="required">*</span></h5>
                                <div class="controls">
                                    <input value="{{$staff_data ? $staff_data->total_remuneration: ''}}" name="total_remuneration" type="text" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <h5>Function<span class="required">*</span></h5>
                                <div class="controls">
                                    <input value="{{$staff_data ? $staff_data->func: ''}}" name="func" type="text" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <h5>Health insurance code<span class="required">*</span></h5>
                                <div class="controls">
                                    <input value="{{$staff_data ? $staff_data->health_insurance_code: ''}}" name="health_insurance_code" type="text" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <h5>Type of contract<span class="required">*</span></h5>
                                <div class="controls">
                                    <select name="type_of_contract" class="form-control" required>
                                        <option readonly selected disabled>Select Country</option>
                                        <option value="">Select Contract Type</option>
                                        <option {{$staff_data ? ($staff_data->type_of_contract=='Indefinido' ? 'selected' : '') : ''}} value="Indefinido">Indefinido</option>
                                        <option {{$staff_data ? ($staff_data->type_of_contract=='Plazo Fijo' ? 'selected' : '') : ''}} value="Plazo Fijo">Plazo Fijo</option>
                                        <option {{$staff_data ? ($staff_data->type_of_contract=='Terminaciön de Obra o Servicio' ? 'selected' : '') : ''}} value="Terminaciön de Obra o Servicio">Terminaciön de Obra o Servicio</option>
                                        <option {{$staff_data ? ($staff_data->type_of_contract=='Subcontrataciön de Obra o Servicios' ? 'selected' : '') : ''}} value="Subcontrataciön de Obra o Servicios">Subcontrataciön de Obra o Servicios</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                        </div>
                    </div>
                    <h4 class="form-section mt-3"><i class="ft-mail"></i> Labor Relationship</h4>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <h5>Relationship with the Contractor<span class="required">*</span></h5>
                                <div class="controls">
                                    <select name="relationship_with_contractor" class="form-control" required>
                                        <option selected disabled>Select Country</option>
                                        <option {{$staff_data ? ($staff_data->type_of_contract=='Dependiente' ? 'selected' : '') : ''}} value="Dependiente">Dependiente</option>
                                        <option {{$staff_data ? ($staff_data->type_of_contract=='Subcontratista' ? 'selected' : '') : ''}} value="Subcontratista">Subcontratista</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <h5>Subcontractor Name:</h5>
                                <div class="controls">
                                    <input value="{{$staff_data ? $staff_data->subcontractor_name: ''}}" name="subcontractor_name" type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                    <h4 class="form-section mt-3"><i class="ft-mail"></i>Driver's license</h4>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <h5>License No <span class="required">*</span></h5>
                                <div class="controls">
                                    <input value="{{$staff_data ? $staff_data->license_no: ''}}" name="license_no"  type="text" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <h5>Date of issue<span class="required">*</span></h5>
                                <div class="controls">
                                    <input value="{{$staff_data ? $staff_data->date_of_issue: ''}}" name="date_of_issue"  type="date" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <h5>Date of Expiry<span class="required">*</span></h5>
                                <div class="controls">
                                    <input value="{{$staff_data ? $staff_data->date_of_expiry: ''}}" name="date_of_expiry"  type="date" class="form-control" required>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-actions right">
                    <button type="submit" class="btn main_btn"> Save Changes</button>
                </div>
            </form>
        </div>
    </div>
</div>


