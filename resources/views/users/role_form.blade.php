<div class="container">
    <form id="user_role_form" action="javascript:save_roles();">
        @csrf
        @if(isset($user_role))
            <input type="hidden" name="role_id" value="{{$user_role->role_id}}">
        @endif
        <div class="form-group">
            <label for="role" class="font-weight-bold info">Role Title</label>
            <input type="text" class="form-control" value="{{$user_role!=null? $user_role->title:''}}" name="title" id="title">
        </div>
        <div class="modal-footer">
            <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-outline-info">Save</button>
        </div>
    </form>
</div>