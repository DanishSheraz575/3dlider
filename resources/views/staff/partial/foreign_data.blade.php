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
                                            <select name="country" class="form-control">
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
                                        <h5>Awarded from:</h5>
                                        <div class="controls">
                                            <input type="date" name="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h5>Awarded until:</h5>
                                        <div class="controls">
                                            <input type="date" name="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h5>Valid Passport :</h5>
                                        <div class="controls">
                                            <input type="date" name="text" class="form-control">
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


