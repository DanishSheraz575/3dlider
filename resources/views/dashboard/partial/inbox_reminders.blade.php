<div id="accordion">
    @foreach($reminders as $key => $reminder)
        <div class="accordion">
            <div class="accordion-header panel_id_{{ $reminder->reminder_id }} collapsed" role="button" data-toggle="collapse" data-target="#panel-body-{{$key}}" aria-expanded="false">
                <h4>Reminder {{ $key+1 }}</h4>
            </div>
            <div class="accordion-body collapse reminder_id_{{ $reminder->reminder_id }}" id="panel-body-{{$key}}" data-parent="#accordion" style="">
                <label for="" class="font-w-700">Reminder Message</label>
                <p class="mb-0">{{ $reminder->message }}</p>
                <div class="row mt-3">
                    <div class="col-4">
                        <label for="" class="font-w-700">Assigned To</label>
                        <p>{{ $reminder->assigned_user->full_name }}</p>
                    </div>
                    <div class="col-4">
                        <label for="" class="font-w-700">Created By</label>
                        <p>{{ $reminder->reminder_added_by->full_name }}</p>
                    </div>
                    <div class="col-4">
                        <label for="" class="font-w-700">Reminder Time</label>
                        <p>{{ $reminder->reminder_time }}</p>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>