<div class="row">
    <div class="title col-md-10">{{$service_name}}</div>
</div>
<div class="row">
    <div class="col-sm-3 category">Media Type</div>
    <div class="col-sm-8 item">
        {{$service_type->request_type}}
    </div>
</div><p></p>
<div class="row">
    <div class="col-sm-3 category">Target Audience</div>
    <div class="col-sm-8 item">{{$service_type->audience}}</div>
</div><p></p>
@if($service_type->request_type=="Starting New Page")
    <div class="row">
        <div class="col-sm-3 category">Page Manager</div>
        <div class="col-sm-8 item">Name:  {{$service_type->name}}</div>
    </div>
    <div class="row">
        <div class="col-sm-3 category"></div>
        <div class="col-sm-8 item">Email:  {{$service_type->email}}</div>
    </div>
    <div class="row">
        <div class="col-sm-3 category"></div>
        <div class="col-sm-8 item">Phone:  {{$service_type->phone}}</div>
    </div>
    <div class="row">
        <div class="col-sm-3 category"></div>
        <div class="col-sm-8 item">Department:  {{$service_type->department}}</div>
    </div><p></p>
    <div class="row">
        <div class="col-sm-3 category">Network Interest</div>
        <div class="col-sm-8 item">{{$service_type->social}}</div>
    </div><p></p>
    <div class="row">
        <div class="col-sm-3 category">Details</div>
        <div class="col-sm-8 item">
            {{$service_type->details}}
        </div>
    </div><p></p>
@else
    @if($service_type->facebook_text)
        <div class="row">
            <div class="col-sm-3 category">Facebook Text</div>
            <div class="col-sm-8 item">
                {{$service_type->facebook_text}}
            </div>
        </div><p></p>
    @endif
    @if($service_type->twitter_text)
        <div class="row">
            <div class="col-sm-3 category">Twitter Text</div>
            <div class="col-sm-8 item">
                {{$service_type->twitter_text}}
            </div>
        </div><p></p>
    @endif
    @if($service_type->image)
        <div class="row">
            <div class="col-sm-3 category">Graphics</div>
            <div class="col-sm-8 item">
                <a href="{{$service_type->image}}">Link</a>
            </div>
        </div><p></p>
    @endif
@endif
</div>
</div>