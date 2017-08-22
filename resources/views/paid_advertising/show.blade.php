<div class="row">
    <div class="title col-md-10">{{$service_name}}</div>
</div>
<div class="row">
    <div class="col-sm-3 category">What do you want to advertise?</div>
    <div class="col-sm-8 item">
        {{$service_type->details}}
    </div>
</div><p></p>
<div class="row">
    <div class="col-sm-3 category">Target Audience</div>
        <div class="col-sm-8 item">{{$service_type->audience}}</div>
</div><p></p>
<div class="row">
    <div class="col-sm-3 category">Purpose</div>
    <div class="col-sm-8 item">{{$service_type->purpose}}</div>
</div><p></p>
<div class="row">
    <div class="col-sm-3 category">How/where/when</div>
    <div class="col-sm-8 item">{{$service_type->details}}</div>
</div><p></p>
<div class="row">
    <div class="col-sm-3 category">Options</div>
    <div class="col-sm-8 item">{{$service_type->advertising}}</div>
</div>
@if($service_type->other)
<div class="row">
    <div class="col-sm-3 category">Other Details</div>
    <div class="col-sm-8 item">{{$service_type->other}}</div>
</div>
@endif

<div class="row">
    <div class="col-sm-3 category">Budget</div>
    <div class="col-sm-8 item">${{$service_type->budget}}</div>
</div>
</div>
</div>
</div>
