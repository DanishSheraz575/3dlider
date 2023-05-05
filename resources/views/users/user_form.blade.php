<div class="row">
    <div class="col-12">
        <form method="post" id="user_form" action="javascript:save_user();" enctype="multipart/form-data">
            @csrf
            <div class="card1">
                <div class="card-body1" id="add_more_cats_data">
                    <div class="row">
                        @if($user)
                            <input type="hidden" value="{{$user->user_id}}" name="user_id">
                        @endif
                        <div class="col-6">
                            <div class="form-group">
                                <label class="form-check-label font-weight-bold text-info" > Full Name</label>
                                <input name="full_name" value="{{$user ? $user->full_name : ''}}" required type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label class="form-check-label font-weight-bold text-info" >Assign Role</label>
                                <select name="role_id" id="role_id" class="form-control">
                                    <option value="">Select Below</option>
                                    @foreach($user_role as $role)
                                        <option {{isset($user->role_id)?($user->role_id==$role->role_id ? 'selected' : ''):''}} value="{{$role->role_id}}">{{$role->title}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        @if(!$user)
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="form-check-label font-weight-bold text-info">Email</label>
                                    <input name="email" required type="email" class="form-control">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="form-check-label font-weight-bold text-info">Password</label>
                                    <input name="password" id="pass" required type="password" class="form-control">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group mb-0">
                                    <label class="form-check-label font-weight-bold text-info">Confirm Password</label>
                                    <input required id="c_pass" type="password" class="form-control">
                                </div>
                                <div id="pass_response" class="badge-danger p-1 mb-3" style="display: none">Password not matched</div>
                            </div>
                        @endif
                    </div>
                </div>
                <div class="card-footer1 text-right">
                    <button class="btn btn-info mr-1" type="submit">Submit</button>
                    <button class="btn btn-danger" type="reset">Reset</button>
                </div>
            </div>
        </form>
    </div>
</div>
