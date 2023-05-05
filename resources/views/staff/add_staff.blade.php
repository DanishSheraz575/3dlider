@extends("layout.template")
@section("content")
    <div class="main-content">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Add New Staff</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <div class="card-text">
                                    <p class="card-text">Fields (*) are required</p>
                                </div>
                                <form class="form">
                                    <div class="form-body">
                                        <h4 class="form-section mt-3"><i class="ft-user"></i> Personal information</h4>
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <h5>Name <span class="required">*</span></h5>
                                                            <div class="controls">
                                                                <input type="text" name="text" class="form-control"
                                                                       required=""
                                                                       data-validation-required-message="This field is required">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <h5>Last Name <span class="required">*</span></h5>
                                                            <div class="controls">
                                                                <input type="text" name="text" class="form-control"
                                                                       required=""
                                                                       data-validation-required-message="This field is required">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <h5>Identity Cell <span class="required">*</span></h5>
                                                            <div class="controls">
                                                                <input type="number" name="text" class="form-control"
                                                                       required=""
                                                                       data-validation-required-message="This field is required">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <h5>Issued In <span class="required">*</span></h5>
                                                            <div class="controls">
                                                                <input type="text" name="text" class="form-control"
                                                                       required=""
                                                                       data-validation-required-message="This field is required">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <h5>Phone</h5>
                                                            <div class="controls">
                                                                <input type="number" name="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <h5>Sex <span class="required">*</span></h5>
                                                            <div class="controls">
                                                                <select name="country" class="form-control" required
                                                                        data-validation-required-message="This field is required">
                                                                    <option readonly selected disabled>Select Sex
                                                                    </option>
                                                                    <option>Male</option>
                                                                    <option>Female</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <h5>Civil Status <span class="required">*</span></h5>
                                                            <div class="controls">
                                                                <select name="country" class="form-control" required
                                                                        data-validation-required-message="This field is required">
                                                                    <option readonly selected disabled>Select Civil
                                                                        Status
                                                                    </option>
                                                                    <option>Male</option>
                                                                    <option>Female</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <h5>Is foreign <span class="required">*</span></h5>
                                                            <div class="controls">
                                                                <select name="country" class="form-control" required
                                                                        data-validation-required-message="This field is required">
                                                                    <option readonly selected disabled>Select</option>
                                                                    <option>Yes</option>
                                                                    <option>No</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <h5>Place of Birth <span class="required">*</span></h5>
                                                            <div class="controls">
                                                                <input type="text" name="text" class="form-control"
                                                                       required=""
                                                                       data-validation-required-message="This field is required">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <h5>Birthdate <span class="required">*</span></h5>
                                                            <div class="controls">
                                                                <input type="date" name="text" class="form-control"
                                                                       required=""
                                                                       data-validation-required-message="This field is required">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <h5>Nationality <span class="required">*</span></h5>
                                                            <div class="controls">
                                                                <select name="country" class="form-control" required
                                                                        data-validation-required-message="This field is required">
                                                                    <option readonly selected disabled>Select</option>
                                                                    <option>Yes</option>
                                                                    <option>No</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <h5>Profession <span class="required">*</span></h5>
                                                            <div class="controls">
                                                                <select name="country" class="form-control" required
                                                                        data-validation-required-message="This field is required">
                                                                    <option readonly selected disabled>Select</option>
                                                                    <option>Yes</option>
                                                                    <option>No</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <h5>NAU No <span class="required">*</span></h5>
                                                            <div class="controls">
                                                                <input type="number" name="text" class="form-control"
                                                                       required=""
                                                                       data-validation-required-message="This field is required">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">

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

    </script>
@endsection
