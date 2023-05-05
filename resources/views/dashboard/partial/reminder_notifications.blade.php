<div id="accordion">
    @foreach($reminders_notification as $key => $reminders)
        <div class="accordion">
            <div class="accordion-header text-primary font-weight-bold collapsed" role="button" data-toggle="collapse" data-target="#panel_body_{{$key}}" aria-expanded="false">
                <a href="#"><h5>Reminder {{ $key+1 }}</h5></a>
            </div>
            <div class="accordion-body collapse" id="panel_body_{{$key}}" data-parent="#accordion" style="">
                <div class="d-flex justify-content-end mt-n4">
                    <button class="btn btn-success float-right " title="Resolved Reminder!" onclick="template_resolve_reminder({{$reminders->reminder_id}})">Resolve</button>
                    <button class="btn btn-info float-right ml-2" title="Schedule Reminder!" onclick="template_schedule_reminder_form({{$reminders->reminder_id}})">Schedule</button>
                </div>
                <div id="reminder_data_{{$reminders->reminder_id}}">
                <label for="" class="text-primary font-weight-bold">Reminder Message</label>
                <p class="mb-0">{{ $reminders->message }}</p>
                <div class="row mt-3">
                    <div class="col-4">
                        <label for="" class="text-primary font-weight-bold">Assigned To</label>
                        <p>{{ $reminders->assigned_user->full_name }}</p>
                    </div>
                    <div class="col-4">
                        <label for="" class="text-primary font-weight-bold">Created By</label>
                        <p>{{ $reminders->reminder_added_by->full_name }}</p>
                    </div>
                    <div class="col-4">
                        <label for="" class="text-primary font-weight-bold">Reminder Time</label>
                        <p>{{ $reminders->reminder_time }}</p>
                        <a href="{{url("reminder_leads?reminder_id=".$reminders->reminder_id)}}" class="btn btn-primary btn-sm">View Reminder</a>
                    </div>
                </div>
                </div>
                <div class="d-none col-12 reminder_form_{{$reminders->reminder_id}}">
                    <form action="javascript:update_reminder({{$reminders->reminder_id}});" id="update_reminder_form_id_{{$reminders->reminder_id}}">
                        @csrf
                        <div class="col-12">
                            <div class="form-group">
                                <label for="" class="text-primary font-weight-bold">Reminder Message</label>
                                <input type="text"  name="message" class="form-control" value="{{$reminders->message}}">
                            </div>
                            <div class="row">
                                <div class="col-5">
                                    <label for="" class="text-primary font-weight-bold">Assigned User</label>
                                    <select name="user_id" id="user_id" class="form-control">
                                        <option value="">Select Below</option>
                                        @foreach($users as $user)
                                            <option value="{{$user->user_id}}" {{$reminders->user_id==$user->user_id?'selected':''}}>{{$user->full_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-5">
                                    <label for="" class="text-primary font-weight-bold">Reminder Time</label>
                                    <input type="datetime-local" name="reminder_time"  class="form-control" value="{{$reminders->reminder_time}}">
                                </div>
                                <div class="col-2">
                                    <button type="submit" class="btn btn-info mt-4">Submit</button>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    @endforeach
</div>
