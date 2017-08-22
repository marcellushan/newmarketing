<div class="row">
    <div class="title col-md-10">{{$service_name}}</div>
</div>
<div class="row">
    <div class="col-sm-3 category">Details</div>
    <div class="col-sm-8 item">
        {{$service_type->details}}
    </div>
</div><p></p>
<div class="row">
    <div class="col-sm-3 category">Target Audience</div>
    <div class="col-sm-8 item">{{$service_type->audience}}</div>
</div><p></p>
<div class="row">
    <div class="col-sm-3 category">Date</div>
    <div class="col-sm-8 item">{{$service_type->date_needed}}</div>
</div><p></p>
<div class="row">
    <div class="col-sm-3 category">Area of Assistance</div>
    <div class="col-sm-8 item">{{$service_type->assistance}}</div>
</div><p></p>


@if($service_type->other)
    <div class="row">
        <div class="col-sm-3 category">Other Details</div>
        <div class="col-sm-8 item">{{$service_type->other}}</div>
    </div>
    @endif
</div>
</div>
</div>
