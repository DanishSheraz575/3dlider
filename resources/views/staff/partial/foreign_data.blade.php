<div class="card">
    <div class="card-header">
        <h4 class="card-title">Add New Staff</h4>
    </div>
    <div class="card-content">
        <div class="card-body">
            <form class="form" id="foreign_form">
                @csrf
                <div class="form-body">
                    <h4 class="form-section mt-3"><i class="ft-flag"></i> Foreign Personal Data</h4>
                    <div class="row">
                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h5>Residence Type</h5>
                                        <div class="controls">
                                            <select name="residence_type" required class="form-control">
                                                <option selected disabled>Please Select</option>
                                                <option {{$staff_data ? ($staff_data->residence_type=='Visa de Objeto Determinado' ? 'selected' : '') : ''}} value="Visa de Objeto Determinado">Visa de Objeto Determinado</option>
                                                <option {{$staff_data ? ($staff_data->residence_type=='Residencia Definitiva' ? 'selected' : '') : ''}} value="Residencia Definitiva">Residencia Definitiva</option>
                                                <option {{$staff_data ? ($staff_data->residence_type=='Visa Mültiple' ? 'selected' : '') : ''}} value="Visa Mültiple">Visa Mültiple</option>
                                                <option {{$staff_data ? ($staff_data->residence_type=='Visa de Trånsito' ? 'selected' : '') : ''}} value="Visa de Trånsito">Visa de Trånsito</option>
                                                <option {{$staff_data ? ($staff_data->residence_type=='Visas Diplomåtica y Oficial' ? 'selected' : '') : ''}} value="Visas Diplomåtica y Oficial">Visas Diplomåtica y Oficial</option>
                                                <option {{$staff_data ? ($staff_data->residence_type=='Visa de Turismo' ? 'selected' : '') : ''}} value="Visa de Turismo">Visa de Turismo</option>
                                                <option {{$staff_data ? ($staff_data->residence_type=='Visa de Estudiante' ? 'selected' : '') : ''}} value="Visa de Estudiante">Visa de Estudiante</option>
                                                <option {{$staff_data ? ($staff_data->residence_type=='Visa de Cortesia' ? 'selected' : '') : ''}} value="Visa de Cortesia">Visa de Cortesia</option>
                                                <option {{$staff_data ? ($staff_data->residence_type=='Visa Mercosur' ? 'selected' : '') : ''}} value="Visa Mercosur">Visa Mercosur</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h5>Awarded from:</h5>
                                        <div class="controls">
                                            <input type="date" required value="{{$staff_data ? $staff_data->awarded_from: ''}}" name="awarded_from" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h5>Awarded until:</h5>
                                        <div class="controls">
                                            <input type="date" required value="{{$staff_data ? $staff_data->awarded_until: ''}}" name="awarded_until" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h5>Valid Passport :</h5>
                                        <div class="controls">
                                            <input type="date" required value="{{$staff_data ? $staff_data->valid_passport: ''}}" name="valid_passport" class="form-control">
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


