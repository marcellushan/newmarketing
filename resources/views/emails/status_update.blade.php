@extends('layouts.app') @section('content')
    <div class="main container">
        <div class="row">
            <div  class="col-sm-10">
                <h2>Status Update</h2>

                <h4>Please review the update on your project page for {{$media_name}}.</h4>
                <h4>At this time, you may find that the status of your request has changed and/or one of our team members has left a message that needs your attention in the
                    comment section of your project page.</h4>

                <h4>Please follow the link below to review the update and/or respond to our team in the comment section of your project page.</h4>

                <h3>Status - {{$status}}</h3>
                <h3>Comments</h3>
                <h4>{{$comment->comment or 'No Comments'}}</h4>
                <h3><a href="{{URL::to('/')}}/{{$view_folder}}/customer_show/{{$data->id}}">Click to view request</a> </h3>

            </div>
        </div>

    </div>
@endsection