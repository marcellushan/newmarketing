@extends('layouts.app') @section('content')
    <div class="main container">
        <div class="row">
            <h2 class="col-sm-10">A Marketing Communications Service Request has been submitted.</h2>
        </div>
        <div class="row">
            <h3 class="col-sm-10">Client: <span class="item">{{$client->name}}</span> </h3>
        </div>
        <div class="row">
            <h3 class="col-sm-10">Type: {{$service_name}}</h3>
        </div>
        <div class="row">
            <h3 class="col-sm-1">Details:</h3>
        </div>
        <div class="row">
            <h4 class="col-sm-10">{{$service_type->details}}</h4>
        </div>
        <div class="row">
            <h3 class="col-sm-10"> <a href="{{URL::to('/')}}/{{$view_folder}}/marcom_show/{{$service_type->id}}">Link to Request</a></h3>
        </div>

    </div>
@endsection