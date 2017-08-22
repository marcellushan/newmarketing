@extends('layouts.app') @section('content')
<div class="main container">
    <h1 align="center">{{$media_name}}</h1>
<div class="row">
    <div class="col-md-6 col-md-offset-3">
<h2>
    <table class="table">
        <tr>
            <th>
               Status
            </th>
            <th>
               Total
            </th>

        </tr>
        @if(count($receiveds))
            <tr>
                <td>
                    Received
                </td>
                <td>
                    <a href="{{URL::to('/')}}/{{$view_folder}}/request_status/received" >{{count($receiveds)}}</a>
                </td>
            </tr>
        @endif
        @if(count($progresses))
            <tr>
                <td>
                    In Progress
                </td>
                <td>
                    <a href="{{URL::to('/')}}/{{$view_folder}}/request_status/in progress" >{{count($progresses)}}</a>
                </td>
            </tr>
        @endif
        @if(count($informations))
            <tr>
                <td>
                    Awaiting Information
                </td>
                <td>
                    <a href="{{URL::to('/')}}/{{$view_folder}}/request_status/awaiting information" >{{count($informations)}}</a>
                </td>
            </tr>
        @endif
        @if(count($reviews))
            <tr>
                <td>
                    Awaiting Review
                </td>
                <td>
                    <a href="{{URL::to('/')}}/{{$view_folder}}/request_status/awaiting review" >{{count($reviews)}}</a>
                </td>
            </tr>
        @endif
        @if(count($cancelleds))
            <tr>
                <td>
                    Cancelled
                </td>
                <td>
                    <a href="{{URL::to('/')}}/{{$view_folder}}/request_status/cancelled" >{{count($cancelleds)}}</a>
                </td>
            </tr>
        @endif
        @if(count($completes))
            <tr>
                <td>
                    Complete
                </td>
                <td>
                    <a href="{{URL::to('/')}}/{{$view_folder}}/request_status/complete" >{{count($completes)}}</a>
                </td>
            </tr>
        @endif
        @if(count($feedbacks))
            <tr>
                <td>
                    Customer Feedback
                </td>
                <td>
                    <a href="{{URL::to('/')}}/{{$view_folder}}/request_status/customer feedback" >{{count($feedbacks)}}</a>
                </td>
            </tr>
        @endif
    </table>
</h2>
        </div>
</div>

@endsection

