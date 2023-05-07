<div class="card">
    <div class="card-header">
        <h4 class="card-title">Add Vehicles</h4>
    </div>
    <div class="card-content">
        <div class="card-body">
            <form class="form" id="technical_inspection">
                @csrf
                <div class="form-body">
                    <h4 class="form-section mt-3">Technical inspection</h4>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <h5>Inspection No. <span class="required">*</span></h5>
                                        <div class="controls">
                                            <input type="text" value="{{$vehicle_data ? $vehicle_data->inspection_num: ''}}" name="inspection_num" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <h5>Inspection Date <span class="required">*</span></h5>
                                        <div class="controls">
                                            <input type="date" value="{{$vehicle_data ? $vehicle_data->inspection_date: ''}}" name="text" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <h5>Expiration date <span class="required">*</span></h5>
                                        <div class="controls">
                                            <input type="date" value="{{$vehicle_data ? $vehicle_data->expiration_date: ''}}" name="expiration_date" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <h5>Observation</h5>
                                        <div class="controls">
                                            <input type="text" value="{{$vehicle_data ? $vehicle_data->observation_inspection: ''}}" name="observation_inspection" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h4 class="form-section mt-3">Sure</h4>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <h5>Policy No <span class="required">*</span></h5>
                                        <div class="controls">
                                            <input type="text" value="{{$vehicle_data ? $vehicle_data->policy_num: ''}}" name="policy_num" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <h5>Type of insurance <span class="required">*</span></h5>
                                        <div class="controls">
                                            <select name="type_of_insurance" class="form-control" required>
                                                <option selected disabled>Please Select</option>
                                                <option {{$vehicle_data ? ($vehicle_data->type_of_insurance=='Seguro Social Obligatorio' ? 'selected' : '') : ''}} value="Seguro Social Obligatorio">Seguro Social Obligatorio</option>
                                                <option {{$vehicle_data ? ($vehicle_data->type_of_insurance=='seg. RC. General' ? 'selected' : '') : ''}} value="seg. RC. General">seg. RC. General</option>
                                                <option {{$vehicle_data ? ($vehicle_data->type_of_insurance=='Seguro de Vida' ? 'selected' : '') : ''}} value="Seguro de Vida">Seguro de Vida</option>
                                                <option {{$vehicle_data ? ($vehicle_data->type_of_insurance=='Seg. Contra Accidentes Personales' ? 'selected' : '') : ''}} value="Seg. Contra Accidentes Personales">Seg. Contra Accidentes Personales</option>
                                                <option {{$vehicle_data ? ($vehicle_data->type_of_insurance=='Seg. RC. Por la Carga Transportada' ? 'selected' : '') : ''}} value="Seg. RC. Por la Carga Transportada">Seg. RC. Por la Carga Transportada</option>
                                                <option {{$vehicle_data ? ($vehicle_data->type_of_insurance=='Seg. RC. Patronal' ? 'selected' : '') : ''}} value="Seg. RC. Patronal">Seg. RC. Patronal</option>
                                                <option {{$vehicle_data ? ($vehicle_data->type_of_insurance=='Seg. RC. de Automöviles ylo Embarcaciones' ? 'selected' : '') : ''}} value="Seg. RC. de Automöviles ylo Embarcaciones">Seg. RC. de Automöviles ylo Embarcaciones</option>
                                                <option {{$vehicle_data ? ($vehicle_data->type_of_insurance=='Seg. RC. de Aeronavegaciön' ? 'selected' : '') : ''}} value="Seg. RC. de Aeronavegaciön">Seg. RC. de Aeronavegaciön</option>
                                                <option {{$vehicle_data ? ($vehicle_data->type_of_insurance=='eg.Todo Riesgo en Relaciön con los Equipos TREC' ? 'selected' : '') : ''}} value="eg.Todo Riesgo en Relaciön con los Equipos TREC">eg.Todo Riesgo en Relaciön con los Equipos TREC</option>
                                                <option {{$vehicle_data ? ($vehicle_data->type_of_insurance=='eg. Rotura de Maquinaria' ? 'selected' : '') : ''}} value="eg. Rotura de Maquinaria">eg. Rotura de Maquinaria</option>
                                                <option {{$vehicle_data ? ($vehicle_data->type_of_insurance=='Seg.Transporte de Equipos y Materiales' ? 'selected' : '') : ''}} value="Seg.Transporte de Equipos y Materiales">Seg.Transporte de Equipos y Materiales</option>
                                                <option {{$vehicle_data ? ($vehicle_data->type_of_insurance=='.Todo Riesgo de Construcciön y Montaje"' ? 'selected' : '') : ''}} value=".Todo Riesgo de Construcciön y Montaje">.Todo Riesgo de Construcciön y Montaje</option>
                                                <option {{$vehicle_data ? ($vehicle_data->type_of_insurance=='Seg. RC. Profesional' ? 'selected' : '') : ''}} value="Seg. RC. Profesional">Seg. RC. Profesional</option>
                                                <option {{$vehicle_data ? ($vehicle_data->type_of_insurance=='Seg.de Automotores' ? 'selected' : '') : ''}} value="Seg.de Automotores">Seg.de Automotores</option>
                                                <option {{$vehicle_data ? ($vehicle_data->type_of_insurance=='Seg. Pérdida de Beneficios Anticipada' ? 'selected' : '') : ''}} value="Seg. Pérdida de Beneficios Anticipada">Seg. Pérdida de Beneficios Anticipada</option>
                                                <option {{$vehicle_data ? ($vehicle_data->type_of_insurance=='Seguro de Transporte Maritimo' ? 'selected' : '') : ''}} value="Seguro de Transporte Maritimo">Seguro de Transporte Maritimo</option>
                                                <option {{$vehicle_data ? ($vehicle_data->type_of_insurance=='Seg. RC. Poluciön, Contaminaciån y Filtraciön' ? 'selected' : '') : ''}} value="Seg. RC. Poluciön, Contaminaciån y Filtraciön">Seg. RC. Poluciön, Contaminaciån y Filtraciön</option>
                                                <option {{$vehicle_data ? ($vehicle_data->type_of_insurance=='Seg.Todo Riesgo Daöos a la Propiedad' ? 'selected' : '') : ''}} value="Seg.Todo Riesgo Daöos a la Propiedad">Seg.Todo Riesgo Daöos a la Propiedad</option>
                                                <option {{$vehicle_data ? ($vehicle_data->type_of_insurance=='SOAT Accidentes de Transito' ? 'selected' : '') : ''}} value="SOAT Accidentes de Transito">SOAT Accidentes de Transito</option>
                                                <option {{$vehicle_data ? ($vehicle_data->type_of_insurance=='Seg. RC. Cruzada' ? 'selected' : '') : ''}} value="Seg. RC. Cruzada">Seg. RC. Cruzada</option>
                                                <option {{$vehicle_data ? ($vehicle_data->type_of_insurance=='Seg. RC. Contratitas y Subcontratistas' ? 'selected' : '') : ''}} value="Seg. RC. Contratitas y Subcontratistas">Seg. RC. Contratitas y Subcontratistas</option>
                                                <option {{$vehicle_data ? ($vehicle_data->type_of_insurance=='Seg. RC. de Operaciones' ? 'selected' : '') : ''}} value="Seg. RC. de Operaciones">Seg. RC. de Operaciones</option>
                                                <option {{$vehicle_data ? ($vehicle_data->type_of_insurance=='Seg. RC. Contractual' ? 'selected' : '') : ''}} value="Seg. RC. Contractual">Seg. RC. Contractual</option>
                                                <option {{$vehicle_data ? ($vehicle_data->type_of_insurance=='Seg.Todo Riesgo Equipos de Perforaciön' ? 'selected' : '') : ''}} value="Seg.Todo Riesgo Equipos de Perforaciön">Seg.Todo Riesgo Equipos de Perforaciön</option>
                                                <option {{$vehicle_data ? ($vehicle_data->type_of_insurance=='SOAT-C Accidentes de la Construccién' ? 'selected' : '') : ''}} value="SOAT-C Accidentes de la Construccién">SOAT-C Accidentes de la Construccién</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <h5>Insured Amount <span class="required">*</span></h5>
                                        <div class="controls">
                                            <input type="number" value="{{$vehicle_data ? $vehicle_data->insured_amount: ''}}" name="insured_amount" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <h5>Clairvoyance since <span class="required">*</span></h5>
                                        <div class="controls">
                                            <input type="date" value="{{$vehicle_data ? $vehicle_data->clairvoyance_since: ''}}" name="clairvoyance_since" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <h5>Valid until <span class="required">*</span></h5>
                                        <div class="controls">
                                            <input type="date" value="{{$vehicle_data ? $vehicle_data->valid_till: ''}}" name="valid_till" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <h5>Insurance company <span class="required">*</span></h5>
                                        <div class="controls">
                                            <input type="text" value="{{$vehicle_data ? $vehicle_data->insurance_company: ''}}" name="insurance_company" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <h5>Observation</h5>
                                        <div class="controls">
                                            <input type="text" value="{{$vehicle_data ? $vehicle_data->observation_insurance: ''}}" name="observation_insurance" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h4 class="form-section mt-3">Vehicle Relationship</h4>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <h5>Own vehicle <span class="required">*</span></h5>
                                        <div class="controls">
                                            <select name="own_vehicle" class="form-control" required>
                                                <option readonly selected disabled>Select</option>
                                                <option {{$vehicle_data ? ($vehicle_data->own_vehicle=='Yes' ? 'selected' : '') : ''}} value="own_vehicle">Yes</option>
                                                <option {{$vehicle_data ? ($vehicle_data->own_vehicle=='No'? 'selected' : '') : ''}} value="No">No</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <h5>Subcontracting Company <span class="required">*</span></h5>
                                        <div class="controls">
                                            <input type="text" value="{{$vehicle_data ? $vehicle_data->subcontracting_company: ''}}" name="subcontracting_company" class="form-control" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <h5>Discharge date <span class="required">*</span></h5>
                                        <div class="controls">
                                            <input type="date" value="{{$vehicle_data ? $vehicle_data->discharge_date: ''}}" name="discharge_date" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <h5>Certifier <span class="required">*</span></h5>
                                        <div class="controls">
                                            <select name="country" class="form-control" required>
                                                <option readonly selected disabled>Select</option>
                                                <option>Yes</option>
                                                <option>No</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <h5>Team added <span class="required">*</span></h5>
                                        <div class="controls">
                                            <input value="{{$vehicle_data ? $vehicle_data->team_added: ''}}" type="team_added" name="text" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-actions right">
                    <button type="submit" class="btn main_btn">Save & Next</button>
                </div>
            </form>
        </div>
    </div>
</div>
