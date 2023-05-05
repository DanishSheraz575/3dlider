@extends('layout.template')
@section("header-scripts")
    <link rel="stylesheet" type="text/css" href="{{asset('public/app-assets/vendors/css/tables/datatable/datatables.min.css')}}">
@endsection
@section('content')
    <div class="main-content">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>User Roles
                            <button type="button" class="btn btn-outline-info add_role float-right">
                                Add Roles
                            </button>
                            </h4>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped table-bordered file-export" id="customer_data_search">
                                <thead>
                                <tr>
                                    <th>S.No</th>
                                    <th>Role Title</th>
                                    <th>Added By</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($user_roles as $key => $role)
                                    <tr>
                                        <td>{{$key+1}}</td>
                                        <td>{{$role->title}}</td>
                                        <td>{{$role->added_by_user->full_name}}</td>
                                        <td><a href="#" class="btn btn-info edit_role" id="{{$role->role_id}}"><i class="fa fa-edit"></i></a> <a
                                                    href="#" class="btn btn-danger delete_role" onclick="delete_user(this)" id="{{$role->role_id}}"><i class="fa fa-trash"></i></a></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@section('footer-scripts')
    <script src="{{asset('public/app-assets/vendors/js/datatable/datatables.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/app-assets/vendors/js/datatable/dataTables.buttons.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/app-assets/vendors/js/datatable/buttons.flash.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/app-assets/vendors/js/datatable/jszip.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/app-assets/vendors/js/datatable/pdfmake.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/app-assets/vendors/js/datatable/vfs_fonts.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/app-assets/vendors/js/datatable/buttons.html5.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/app-assets/vendors/js/datatable/buttons.print.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/app-assets/js/data-tables/datatable-advanced.js')}}" type="text/javascript"></script>
    <script>
        function save_roles() {
            let data = new FormData($('#user_role_form')[0])
            let a = function () {
                window.location.reload();
            }
            let arr = [a]
            call_ajax_with_functions('', "{{route('save_roles')}}", data, arr)
        }
        $('.add_role').click(function () {
            let data = new FormData();
            data.append('_token', '{{csrf_token()}}');
            call_ajax_modal('post', '{{route('role_form')}}', data, 'Add Role');
        });
        $('.edit_role').click(function () {
            let data = new FormData();
            data.append('role_id', this.id);
            data.append('_token', '{{csrf_token()}}');
            call_ajax_modal('post', '{{route('role_form')}}', data, 'Edit Role');
        });
       function delete_user(row) {
            let id = row.id;
            let data = new FormData();
            data.append('role_id', id);
            data.append('_token', "{{csrf_token()}}");
            swal({
                title: "Are you sure?",
                text: "Do you really want to delete this user?",
                icon: "warning",
                buttons: [
                    'No, cancel it!',
                    'Yes, I am sure!'
                ],
                dangerMode: true,
            }).then(function(isConfirm) {
                if (isConfirm) {
                    $(row).closest('tr').fadeOut('slow', function (){
                        $(this).remove();
                    });
                    call_ajax('', '{{route('role_delete')}}', data);
                }
            })
        }
    </script>
@endsection
@endsection