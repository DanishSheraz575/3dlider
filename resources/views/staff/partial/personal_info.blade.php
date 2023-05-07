<div class="card">
    <div class="card-header">
        <h4 class="card-title">Add New Staff</h4>
    </div>
    <div class="card-content">
        <div class="card-body">
            <div class="card-text">
                <p class="card-text">Fields (*) are required</p>
            </div>
            <form class="form" id="personal_form">
                <?=$staff_data ? "<input type='hidden' name='staff_id' value='".$staff_data->staff_id."'/>" : ''?>
                @csrf
                <div class="form-body">
                    <h4 class="form-section mt-3"><i class="ft-user"></i> Personal information</h4>
                    <div class="row">
                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h5>First Name <span class="required">*</span></h5>
                                        <div class="controls">
                                            <input type="text" value="{{$staff_data ? $staff_data->first_name: ''}}" name="first_name" class="form-control" required="" data-validation-required-message="This field is required">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h5>Last Name <span class="required">*</span></h5>
                                        <div class="controls">
                                            <input type="text" value="{{$staff_data ? $staff_data->last_name: ''}}" name="last_name" class="form-control" required="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h5>Identity Cell <span class="required">*</span></h5>
                                        <div class="controls">
                                            <input type="number" value="{{$staff_data ? $staff_data->identity_cell: ''}}" name="identity_cell" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h5>Issued In <span class="required">*</span></h5>
                                        <div class="controls">
                                            <select name="issued_in" class="form-control" required>
                                                <option selected disabled>Please Select</option>
                                                <option {{$staff_data ? ($staff_data->issued_in=='Santa Cruz' ? 'selected' : '') : ''}} value="Santa Cruz">Santa Cruz</option>
                                                <option {{$staff_data ? ($staff_data->issued_in=='Peace' ? 'selected' : '') : ''}} value="Peace">Peace</option>
                                                <option {{$staff_data ? ($staff_data->issued_in=='Cochabamba' ? 'selected' : '') : ''}} value="Cochabamba">Cochabamba</option>
                                                <option {{$staff_data ? ($staff_data->issued_in=='Oruro' ? 'selected' : '') : ''}} value="Oruro">Oruro</option>
                                                <option {{$staff_data ? ($staff_data->issued_in=='potosi' ? 'selected' : '') : ''}} value="Potosi">Potosi</option>
                                                <option {{$staff_data ? ($staff_data->issued_in=='beni' ? 'selected' : '') : ''}} value="Beni">Beni</option>
                                                <option {{$staff_data ? ($staff_data->issued_in=='Pando' ? 'selected' : '') : ''}} value="Pando">Pando</option>
                                                <option {{$staff_data ? ($staff_data->issued_in=='Tarija' ? 'selected' : '') : ''}} value="Tarija">Tarija</option>
                                                <option {{$staff_data ? ($staff_data->issued_in=='chuquisaca' ? 'selected' : '') : ''}} value="chuquisaca">chuquisaca</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h5>Phone</h5>
                                        <div class="controls">
                                            <input type="number" value="{{$staff_data ? $staff_data->phone: ''}}" name="phone" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h5>Gender <span class="required">*</span></h5>
                                        <div class="controls">
                                            <select name="gender" class="form-control" required>
                                                <option selected disabled>Please Select</option>
                                                <option {{$staff_data ? ($staff_data->gender=='Male' ? 'selected' : '') : ''}}>Male</option>
                                                <option {{$staff_data ? ($staff_data->gender=='Female' ? 'selected' : '') : ''}}>Female</option>
                                                <option {{$staff_data ? ($staff_data->gender=='Other' ? 'selected' : '') : ''}} value="Other">Other</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h5>Civil Status <span class="required">*</span></h5>
                                        <div class="controls">
                                            <select name="civil_status" class="form-control" required>
                                                <option selected disabled>Please Select</option>
                                                <option {{$staff_data ? ($staff_data->civil_status=='Married' ? 'selected' : '') : ''}} value="Married">Married</option>
                                                <option {{$staff_data ? ($staff_data->civil_status=='Single' ? 'selected' : '') : ''}} value="Single">Single</option>
                                                <option {{$staff_data ? ($staff_data->civil_status=='Divorced' ? 'selected' : '') : ''}} value="Divorced">Divorced</option>
                                                <option {{$staff_data ? ($staff_data->civil_status=='Widower' ? 'selected' : '') : ''}} value="Widower">Widower</option>
                                                <option {{$staff_data ? ($staff_data->civil_status=='Other' ? 'selected' : '') : ''}} value="Other">Other</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h5>Is foreign <span class="required">*</span></h5>
                                        <div class="controls">
                                            <select id="is_foreign" name="is_foreign" class="form-control" required>
                                                <option selected disabled>Please Select</option>
                                                <option {{$staff_data ? ($staff_data->is_foreign=='Yes' ? 'selected' : '') : ''}} value="Yes">Yes</option>
                                                <option {{$staff_data ? ($staff_data->is_foreign=='No' ? 'selected' : '') : ''}} value="No">No</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h5>Place of Birth <span class="required">*</span></h5>
                                        <div class="controls">
                                            <input type="text" value="{{$staff_data ? $staff_data->place_of_birth: ''}}" name="place_of_birth" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h5>Birthdate <span class="required">* {{ $staff_data->dob}}</span></h5>
                                        <div class="controls">
                                            <input type="date" value="{{$staff_data ? $staff_data->dob: ''}}" name="dob" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h5>Nationality <span class="required">*</span></h5>
                                        <div class="controls">
                                            {{get_countries_ddl($staff_data ? $staff_data->nationality: false , 'nationality')}}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h5>Profession <span class="required">*</span></h5>
                                        <div class="controls">
                                            {{get_profession_ddl($staff_data ? $staff_data->profession: false)}}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h5>NAU No <span class="required">*</span></h5>
                                        <div class="controls">
                                            <input type="number" value="{{$staff_data ? $staff_data->nua_no: ''}}" name="nua_no" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="text-center">
                                <h5><strong>Photo</strong></h5>
                                <div class="pb-3">
                                    <img id="blah" alt="your image" src="{{$staff_data ? url('public/images/staff/'.$staff_data->photo) : url('public/app-assets/img/img.png')}}" width="300" height="300"/>
                                </div>
                                <!--our custom file upload button-->
                                <input  hidden id="upload" type="file" name="photo" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                <label class="main_btn " for="upload">Select Image</label>
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
