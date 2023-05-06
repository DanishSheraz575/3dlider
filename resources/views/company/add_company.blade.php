@extends("layout.template")
@section("content")
    <div class="main-content">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">My Profile</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <div class="card-text">
                                    <p class="card-text">Fields (*) are required</p>
                                </div>
                                <form class="form" id="company_form">
                                    <input type="hidden" name="company_id" value="{{$company ? $company->company_id: 0}}">
                                    @csrf
                                    <div class="form-body">
                                        <h4 class="form-section mt-3"><i class="ft-eye"></i> Company Data</h4>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <h5>Country <span class="required">*</span></h5>
                                                    <div class="controls">
                                                        <select name="country" class="form-control" required>
                                                            <option readonly selected disabled>Select Country</option>
                                                            <option>Pakistan</option>
                                                            <option>India</option>
                                                        </select>
                                                        <div class="help-block"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <h5>Department <span class="required">*</span></h5>
                                                    <div class="controls">
                                                        <select name="department" class="form-control" required>
                                                            <option readonly selected disabled>Select Department
                                                            </option>
                                                            <option>Pakistan</option>
                                                            <option>India</option>
                                                        </select>
                                                        <div class="help-block"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <h5>City <span class="required">*</span></h5>
                                                    <div class="controls">
                                                        <select name="city" class="form-control" required>
                                                            <option readonly selected disabled>Select City</option>
                                                            <option>Pakistan</option>
                                                            <option>India</option>
                                                        </select>
                                                        <div class="help-block"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <h5>Address <span class="required">*</span></h5>
                                                    <div class="controls">
                                                        <input value="{{$company ? $company->address: ''}}" name="address" type="text" class="form-control" required>
                                                        <div class="help-block"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <h5>Phone <span class="required">*</span></h5>
                                                    <div class="controls">
                                                        <input value="{{$company ? $company->phone: ''}}" name="phone" type="number" class="form-control" required>
                                                        <div class="help-block"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <h4 class="form-section mt-3"><i class="ft-mail"></i> Contact information </h4>
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <h5>Contact Name <span class="required">*</span></h5>
                                                    <div class="controls">
                                                        <input value="{{$company ? $company->name: ''}}" name="name" type="text" class="form-control" required>
                                                        <div class="help-block"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <h5>Email Contact <span class="required">*</span></h5>
                                                    <div class="controls">
                                                        <input name="email" type="email" class="form-control" required>
                                                        <div class="help-block"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <h5>Contact Position <span class="required">*</span></h5>
                                                    <div class="controls">
                                                        <input value="{{$company ? $company->position: ''}}" name="position" type="text" class="form-control" required>
                                                        <div class="help-block"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <h5>Inspector Email <span class="required">*</span></h5>
                                                    <div class="controls">
                                                        <input value="{{$company ? $company->inspector_email: ''}}" name="inspector_email" type="email" class="form-control" required>
                                                        <div class="help-block"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <h5>Health insurance fund <span class="required">*</span></h5>
                                                    <div class="controls">
                                                        <select name="fund" class="form-control" required>
                                                            <option selected disabled>Select Department</option>
                                                            <option></option>
                                                            <option>India</option>
                                                        </select>
                                                        <div class="help-block"></div>
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
                </div>
            </div>
        </div>
    </div>
@endsection
@section("footer-scripts")
    <script>
        $('#company_form').submit(function (e){
            e.preventDefault();
            let data = new FormData($('#company_form')[0]);
            let a = function (){
                window.location.reload();
            }
            let arr = [a];
            call_ajax_with_functions("","{{route('save_company')}}", data, arr);
        });
    </script>
@endsection
