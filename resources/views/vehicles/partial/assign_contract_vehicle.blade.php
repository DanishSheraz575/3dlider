<div class="card">
    <div class="card-header">
        <h4 class="card-title">Add New Staff</h4>
    </div>
    <div class="card-content">
        <div class="card-body">
            <form class="form" id="assign_contract">
                @csrf
                <div class="form-body">
                    <h4 class="form-section mt-3"><i class="ft-flag"></i> Assign Contract To Vehicles</h4>
                    <section id="extended">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Action Buttons</h4>
                                    </div>
                                    <div class="card-content">
                                        <div class="card-body table-responsive">
                                            <table class="table text-center">
                                                <thead>
                                                <tr>
                                                    <th>Code</th>
                                                    <th>Description</th>
                                                    <th>Select</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>13904</td>
                                                    <td>John</td>
                                                    <td>
                                                        <div class="custom-control custom-checkbox m-0">
                                                            <input type="checkbox" class="custom-control-input" id="item1">
                                                            <label class="custom-control-label" for="item1"></label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                </div>
                <div class="form-actions right">
                    <button type="submit" class="btn main_btn">Save & Next</button>
                </div>
            </form>
        </div>
    </div>
</div>

