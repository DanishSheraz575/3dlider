<div class="row">
    <div class="col-12">
        <div class="d-flex justify-content-end mb-n4">
            <button class="btn btn-success float-right " title="Resolved Reminder!" onclick="template_resolve_reminder({{$reminder->reminder_id}})">Resolve</button>
            <button class="btn btn-info float-right ml-2" title="Schedule Reminder!" onclick="template_schedule_reminder_form({{$reminder->reminder_id}})">Schedule</button>
        </div>
        <div id="reminder_data_{{$reminder->reminder_id}}">
        <label for="" class="font-weight-bold primary">Reminder Text </label>
            <p>{{ $reminder->message }}</p>
            <div class="row">
                <div class="col-4">
                    <label for="" class="font-weight-bold primary">Assigned user</label>
                    <p>{{ $reminder->assigned_user->full_name }}</p>
                </div>
                <div class="col-4">
                    <label for="" class="font-weight-bold primary">Added By</label>
                    <p>{{ $reminder->reminder_added_by->full_name }}</p>
                </div>
                <div class="col-4">
                    @if($reminder->customer_id == null)
                        <label for="" class="font-weight-bold primary">Inbox Lead</label>
                        <p>{{ $reminder->inbox_npi_data->full_name }}</p>
                        <a href="{{url("reminder_leads?reminder_id=".$reminder->reminder_id)}}" class="btn btn-primary float-right">View Reminder</a>
                    @else
                        <label for="" class="font-weight-bold primary">Customer</label>
                        <p>{{ $reminder->customer->full_name }}</p>
                        <a href="{{url("reminder_leads?reminder_id=".$reminder->reminder_id)}}" class="btn btn-primary float-right">View Reminder</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <div class="d-none col-12 reminder_form_{{$reminder->reminder_id}}">
        <form action="javascript:update_reminder({{$reminder->reminder_id}});" id="update_reminder_form_id_{{$reminder->reminder_id}}">
            @csrf
            <div class="col-12">
                <div class="form-group">
                    <label for="" class="text-primary font-weight-bold">Reminder Message</label>
                    <input type="text"  name="message" class="form-control" value="{{$reminder->message}}">
                </div>
                <div class="row">
                    <div class="col-5">
                        <label for="" class="text-primary font-weight-bold">Assigned User</label>
                        <select name="user_id" id="user_id" class="form-control">
                            <option value="">Select Below</option>
                            @foreach($users as $user)
                                <option value="{{$user->user_id}}" {{$reminder->user_id==$user->user_id?'selected':''}}>{{$user->full_name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-5">
                        <label for="" class="text-primary font-weight-bold">Reminder Time</label>
                        <input type="datetime-local" name="reminder_time"  class="form-control" value="{{$reminder->reminder_time}}">
                    </div>
                    <div class="col-2">
                        <button type="submit" class="btn btn-info mt-4">Submit</button>
                    </div>
                </div>
            </div>

        </form>
    </div>
</div>
