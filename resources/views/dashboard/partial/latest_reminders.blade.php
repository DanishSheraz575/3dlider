<div id="chatapp" class="col-12">
    <div class="collection border-none">
        <div class="media-body">
            @foreach($reminders as $reminder)
            <div class="clearfix">
                <a href="{{url("reminder_leads?reminder_id=".$reminder->reminder_id)}}"><h4 class="font-medium-1 primary mt-1 mb-0 mr-auto float-left">{{$reminder->assigned_user->full_name}}</h4><span class="medium-small float-right blue-grey-text text-lighten-3">{{date('h:i',strtotime($reminder->reminder_time))}}</span></a>
            </div>
            <p class="text-muted font-small-3">{{ $reminder->message }}</p>
            @endforeach
        </div>
    </div>
</div>