@extends("layout.template")
@section("content")
    <div class="main-content">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-12">
                    <section id="file-export">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header d-flex justify-content-between">
                                        <h4 class="card-title">All your staff</h4>
                                        <a href="{{route('vehicle_form')}}" class="main_btn">Add Vehicle</a>
                                    </div>
                                    <div class="card-content ">
                                        <div class="card-body card-dashboard table-responsive">
                                            <table class="table table-striped table-bordered file-export">
                                                <thead>
                                                <tr>
                                                    <th>Plate No.</th>
                                                    <th>Model</th>
                                                    <th>Brand</th>
                                                    <th>Tech Inspection No.</th>
                                                    <th>Insurance Policy No</th>
                                                    <th>Relationship</th>
                                                    <th>Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>Tiger Nixon</td>
                                                    <td>System Architect</td>
                                                    <td>Edinburgh</td>
                                                    <td>61</td>
                                                    <td>2011/04/25</td>
                                                    <td>$320,800</td>
                                                    <td>
                                                        <div class="btn-group mr-1 mb-1">
                                                            <button type="button"
                                                                    class="btn btn-primary dropdown-toggle"
                                                                    data-toggle="dropdown" aria-haspopup="true"
                                                                    aria-expanded="false">
                                                                Action
                                                            </button>
                                                            <div class="dropdown-menu arrow" x-placement="bottom-start"
                                                                 style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 36px, 0px);">
                                                                <button class="dropdown-item" type="button">Edit
                                                                </button>
                                                                <button class="dropdown-item" type="button">Rehire
                                                                </button>
                                                                <button class="dropdown-item" type="button">
                                                                    Cancel
                                                                </button>
                                                                <button class="dropdown-item" type="button">Contracts
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Garrett Winters</td>
                                                    <td>Accountant</td>
                                                    <td>Tokyo</td>
                                                    <td>63</td>
                                                    <td>2011/07/25</td>
                                                    <td>$170,750</td>
                                                    <td>
                                                        <div class="btn-group mr-1 mb-1">
                                                            <button type="button"
                                                                    class="btn btn-primary dropdown-toggle"
                                                                    data-toggle="dropdown" aria-haspopup="true"
                                                                    aria-expanded="false">
                                                                Action
                                                            </button>
                                                            <div class="dropdown-menu arrow" x-placement="bottom-start"
                                                                 style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 36px, 0px);">
                                                                <button class="dropdown-item" type="button">Edit
                                                                </button>
                                                                <button class="dropdown-item" type="button">Rehire
                                                                </button>
                                                                <button class="dropdown-item" type="button">
                                                                    Cancel
                                                                </button>
                                                                <button class="dropdown-item" type="button">Contracts
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
@endsection

@section("footer-scripts")
    <script>

    </script>

@endsection
