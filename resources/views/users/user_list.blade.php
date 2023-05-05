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
                        <div style="justify-content: space-between" class="card-header">
                            <h4>Users List
                                <a href="javascript:show_form();" class="btn btn-outline-info float-right">
                                    <span>Add New</span>
                                </a>
                            </h4>

                        </div>
                        <div  class="card-body w-100">
                            <div class="col-12 mt-4 ">
                                <div class="table-responsive w-100">
                                    <table class="table table-striped table-bordered file-export" id="customer_data_search">
                                        <thead>
                                            <tr>
                                                <th title="Field #1">S.No</th>
                                                <th title="Field #2">Name</th>
                                                <th title="Field #3">Email</th>
                                                <th title="Field #4">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($user_lists as $user_list)
                                            <tr>
                                                <td>{{ $loop->index+1 }}</td>
                                                <td>{{ $user_list->full_name }}</td>
                                                <td>{{ $user_list->email }}</td>
                                                <td>
                                                    <div class="btn-group btn-group-sm">
                                                        <button title="Edit" class="btn btn-info edit_user" id="{{$user_list->user_id}}"><i class="fa fa-edit"></i></button>
                                                        <button title="Delete" class="btn btn-danger" onclick="delete_user(this);" value="{{$user_list->user_id}}"><i class="fa fa-trash"></i></button>
                                                        <button title="Change Password" class="btn btn-success" onclick="change_password(this);" value="{{$user_list->user_id}}"><i class="fa fa-key"></i></button>
                                                    </div>
                                                </td>
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
        </div>
    </div>
    <div class="modal fade" id="change_pass_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg  modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal_label">Change Password</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="javascript:save_changed_password();" method="post" id="change_pass_form">
                    <div class="modal-body">
                        @csrf
                        <div class="form-group">
                            <label for="change_password " class="font-weight-bold text-info">Password</label>
                            <div class="input-group">
                                <div class="input-group-prepend info">
                                    <div class="input-group-text bg-info white"><i class="ft-lock"></i></div>
                                </div>
                                @csrf
                                <input type="text" id="change_password" class="form-control" placeholder="Password" name="password">
                                <input type="hidden" name="user_id" id="cp_user_id" value="">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">
                            Close
                        </button>
                        <button type="submit" class="btn btn-info">
                            Save changes
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
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
        function delete_user(me) {
            let id = me.value;
            let data = new FormData();
            data.append('user_id', id);
            data.append('_token', "{{csrf_token()}}");
            swal({
                title: "Are you sure?",
                text: "Do you really want to delete this user? You will not be able to recover this.",
                icon: "warning",
                buttons: [
                    'No, cancel it!',
                    'Yes, I am sure!'
                ],
                dangerMode: true,
            }).then(function(isConfirm) {
                if (isConfirm) {
                    $(me).closest('tr').fadeOut('slow', function (){
                        $(this).remove();
                    });
                    call_ajax('', '{{route('user_delete')}}', data);
                }
            })
        }
        function change_password(me) {
            $('#cp_user_id').val(me.value);
            $('#change_pass_modal').modal('show');
            $('.modal-backdrop').addClass('d-none');
        }
        function save_changed_password(){
            let data = new FormData($('#change_pass_form')[0]);
            let a = function () {
                $('#change_pass_modal').modal('hide');
            }
            let arr = [a];
            call_ajax_with_functions('', '{{route('change_password')}}', data, arr);
        }
        $('.edit_user').click(function () {
                let data = new FormData();
                data.append('user_id', this.id);
                data.append('_token', '{{csrf_token()}}');
                call_ajax_modal('post', '{{route('user_form')}}', data, 'Edit User');
            });
        function show_form(){
            let data = new FormData();
            data.append('_token', '{{csrf_token()}}');
            call_ajax_modal('post', '{{route('user_form')}}', data, 'Add New User');
        }
        function save_user() {
            if($('#pass').val() !== $('#c_pass').val()){
                $('#pass_response').fadeIn();
                return;
            }
            let form = document.getElementById('user_form');
            let data = new FormData(form);
            let a = function () {
                $('#background_fade_form').modal('hide');
            }
            let b = function() {
                window.location.reload();
            }
            let arr = [a,b];
            call_ajax_with_functions('', '{{route('user_save')}}', data, arr);
        }
        
    </script>
@endsection
