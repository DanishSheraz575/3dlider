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
                                    <input value="" name="address" type="date" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <h5>Total Remuneration<span class="required">*</span></h5>
                                <div class="controls">
                                    <input value="" name="address" type="text" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <h5>Function<span class="required">*</span></h5>
                                <div class="controls">
                                    <select name="country" class="form-control" required>
                                        <option readonly selected disabled>Select Country</option>
                                        <option>Pakistan</option>
                                        <option>India</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <h5>Health insurance code<span class="required">*</span></h5>
                                <div class="controls">
                                    <input value="" name="address" type="text" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <h5>Type of contract<span class="required">*</span></h5>
                                <div class="controls">
                                    <select name="country" class="form-control" required>
                                        <option readonly selected disabled>Select Country</option>
                                        <option>Pakistan</option>
                                        <option>India</option>
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
                                    <select name="country" class="form-control" required>
                                        <option readonly selected disabled>Select Country</option>
                                        <option>Pakistan</option>
                                        <option>India</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <h5>Subcontractor Name:</h5>
                                <div class="controls">
                                    <input value="" name="address" type="text" class="form-control">
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
                                    <input value="" name="address" type="text" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <h5>Date of issue<span class="required">*</span></h5>
                                <div class="controls">
                                    <input value="" name="address" type="date" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <h5>Date of Expiry<span class="required">*</span></h5>
                                <div class="controls">
                                    <input value="" name="address" type="date" class="form-control" required>
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


