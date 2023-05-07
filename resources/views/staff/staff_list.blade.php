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
                                        <a href="{{route('staff_form')}}" class="main_btn">Add Staff</a>
                                    </div>
                                    <div class="card-content ">
                                        <div class="card-body card-dashboard table-responsive">
                                            <table class="table table-striped table-bordered file-export">
                                                <thead>
                                                <tr>
                                                    <th>C. Identity</th>
                                                    <th>First Name</th>
                                                    <th>Last name</th>
                                                    <th>Function</th>
                                                    <th>State</th>
                                                    <th>Labor Relationship</th>
                                                    <th>Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($staff_list as $item)
                                                    <tr>
                                                        <td>{{$item->identity_cell}}</td>
                                                        <td>{{$item->first_name}}</td>
                                                        <td>{{$item->last_name}}</td>
                                                        <td>{{$item->func}}</td>
                                                        <td></td>
                                                        <td>{{$item->relationship_with_contractor}}</td>
                                                        <td>
                                                            <div class="btn-group mr-1 mb-1">
                                                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    Action
                                                                </button>
                                                                <div class="dropdown-menu arrow" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 36px, 0px);">
                                                                    <a href="{{route('staff_form_edit',$item->staff_id)}}" class="dropdown-item">Edit</a>
                                                                    <button class="dropdown-item" type="button">Rehire</button>
                                                                    <button class="dropdown-item" type="button">Unsubscribe</button>
                                                                    <button class="dropdown-item" type="button">Contracts</button>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach
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
