@extends('layouts.app') @section('content')
    <div class="main container">
        <div class="row">
            <div  class="col-sm-10">
                <h2>Status Update</h2>

                <h4>The status has been updated for a {{$media_name}} project.</h4>

                <h4>Click the link below to review</h4>

                <h3>Status - {{$status}}</h3>
                <h3>Comments</h3>
                <h4>{{$comment->comment or 'No Comments'}}</h4>
                <h3><a href="{{URL::to('/')}}/{{$view_folder}}/marcom_show/{{$data->id}}">Click to view request</a> </h3>

            </div>
        </div>

    </div>
@endsection