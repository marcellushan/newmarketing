<div class="row">
    <div class="title col-md-10">{{$service_name}}</div>
</div>
<div class="row">
    <div class="col-sm-3 category">GHC Event</div>
    <div class="col-sm-8 item">
        @if($service_type->GHC) Yes @else No @endif
    </div>
</div><p></p>
<div class="row">
    <div class="col-sm-3 category">Event Name</div>
    <div class="col-sm-8 item">{{$service_type->details}}</div>
</div><p></p>
<div class="row">
    <div class="col-sm-3 category">Event Date and Time</div>
    <div class="col-sm-8 item">{{$service_type->date_needed}} at {{$service_type->start_time}}</div>
</div><p></p>
<div class="row">
    <div class="col-sm-3 category">Location</div>
    <div class="col-sm-8 item">{{$service_type->location}}</div>
</div><p></p>
@if($service_type->display)
<div class="row">
    <div class="col-sm-3 category">Display/Promotional Items Needed</div>
    <div class="col-sm-8 item">{{$service_type->display}}</div>
</div><p></p>
@endif
@if($service_type->other_details)
    <div class="row">
        <div class="col-sm-3 category">Other Details</div>
        <div class="col-sm-8 item">{{$service_type->other_details}}</div>
    </div><p></p>
@endif
@if($service_type->pickup_name)
    <div class="row">
        <div class="col-sm-3 category">Pickup Person</div>
        <div class="col-sm-8 item">Name:  {{$service_type->pickup_name}}</div>
    </div>
    <div class="row">
        <div class="col-sm-3 category"></div>
        <div class="col-sm-8 item">Email:  {{$service_type->pickup_email}}</div>
    </div>
    <div class="row">
        <div class="col-sm-3 category"></div>
        <div class="col-sm-8 item">Phone:  {{$service_type->pickup_phone}}</div>
    </div>
    <div class="row">
        <div class="col-sm-3 category"></div>
        <div class="col-sm-8 item">Department:  {{$service_type->department}}</div>
    </div><p></p>
@endif
@if($service_type->speaker)
    <div class="row">
        <div class="col-sm-3 category">Speaker Bio</div>
        <div class="col-sm-8 item">{{$service_type->speaker_bio}}</div>
    </div><p></p>
@endif
@if($service_type->sponsor)
    <div class="row">
        <div class="col-sm-3 category">Sponsor Website</div>
        <div class="col-sm-8 item">{{$service_type->sponsor_website}}</div>
    </div><p></p>
@endif
@if($service_type->rsvp)
    <div class="row">
        <div class="col-sm-3 category">RSVP</div>
        <div class="col-sm-8 item">{{$service_type->rsvp}}</div>
    </div><p></p>
    @endif

</div>
</div>
</div>


