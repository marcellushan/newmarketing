@extends('layouts.app') @section('content')
<div class="main container">
    <h1 align="center">{{$media_name}}</h1>
    @if(count($receiveds) > 0)
    <button id="received_button" class="btn-info btn-lg">Click to show Received</button><h2>Total:{{count($receiveds)}}</h2>
        <div id="received">
            <h2>Received</h2>
        <p></p>Total number of requests:{{count($receiveds)}}<p></p>
        <div class="row">
            <div class="col-md-10">
                <div class="table-responsive">
                    <table class="table">
                        <tr>
                            <th>
                                Name
                            </th>
                            <th>
                                Summary
                            </th>
                            <th>
                               Date Received
                            </th>
                            <th>

                            </th>
                        </tr>
                        @foreach($receiveds as $received)
                            <tr>
                                <td>{{$received->last_name}}, {{$received->first_name}}</td>
                                <td>{{$received->details}}</td>
                                <td>{{substr($received->created_at,0,10) }}</td>
                                <td><a href="{{URL::to('/')}}/{{$view_folder}}/marcom_show/{{$received->id}}">Specifics</a></td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
    @endif
    @if(count($progresses) > 0)
        <button id="progress_button"  class="btn-default btn-lg">Click to show In Progress Requests</button>
        <p></p>Total number of requests:{{count($progresses)}}<p></p>
        <div id="progress">
            <div class="row">
                <div class="col-md-10">
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th>
                                    Name
                                </th>
                                <th>
                                    Summary
                                </th>
                                <th>

                                </th>
                            </tr>
                            @foreach($progresses as $progress)
                                <tr>
                                    <td>{{$progress->last_name}}, {{$progress->first_name}}</td>
                                    <td>{{$progress->details}}</td>
                                    <td><a href="{{URL::to('/')}}/{{$view_folder}}/marcom_show/{{$progress->id}}">Specifics</a></td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    @endif
    @if(count($informations) > 0)
        <button id="information_button"  class="btn-danger btn-lg">Click to show Requests Awaiting Information</button>
        <p></p>Total number of requests:{{count($informations)}}<p></p>
        <div id="information">
            Awaiting Information
            <div class="row">
                <div class="col-md-10">
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th>
                                    Name
                                </th>
                                <th>
                                    Summary
                                </th>
                                <th>

                                </th>
                            </tr>
                            @foreach($informations as $information)
                                <tr>
                                    <td>{{$information->last_name}}, {{$information->first_name}}</td>
                                    <td>{{$information->details}}</td>
                                    <td><a href="{{URL::to('/')}}/{{$view_folder}}/marcom_show/{{$information->id}}">Specifics</a></td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    @endif
    @if(count($reviews) > 0)
        <button id="review_button"  class="btn-warning btn-lg">Click to show Requests Awaiting Review</button>
        <p></p>Total number of requests:{{count($reviews)}}<p></p>
        <div id="review">
            <div class="row">
                <div class="col-md-10">
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th>
                                    Name
                                </th>
                                <th>
                                    Summary
                                </th>
                                <th>
                                </th>
                            </tr>
                            @foreach($reviews as $review)
                                <tr>
                                    <td>{{$review->last_name}}, {{$review->first_name}}</td>
                                    <td>{{$review->details}}</td>
                                    <td><a href="{{URL::to('/')}}/{{$view_folder}}/marcom_show/{{$review->id}}">Specifics</a></td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    @endif

    @if(count($cancelleds) > 0)
        <button id="review_button"  class="btn-warning btn-lg">Click to show Cancelled Requests</button>
        <p></p>Total number of requests:{{count($cancelleds)}}<p></p>
        <div id="review">
            <div class="row">
                <div class="col-md-10">
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th>
                                    Name
                                </th>
                                <th>
                                    Summary
                                </th>
                                <th>
                                </th>
                            </tr>
                            @foreach($cancelleds as $cancelled)
                                <tr>
                                    <td>{{$cancelled->last_name}}, {{$cancelled->first_name}}</td>
                                    <td>{{$cancelled->details}}</td>
                                    <td><a href="{{URL::to('/')}}/{{$view_folder}}/marcom_show/{{$cancelled->id}}">Specifics</a></td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    @endif

    @if(count($completes) > 0)
        <button id="complete_button" class="btn-success btn-lg">Click to show Completed Requests</button>
        <p>Total Number of Requests:{{count($completes)}}<p></p>
        <div id="complete">
            <div class="row">
                <div class="col-md-10">
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th>
                                    Name
                                </th>
                                <th>
                                    Summary
                                </th>
                                <th>

                                </th>
                            </tr>
                            @foreach($completes as $complete)
                                <tr>
                                    <td>{{$complete->last_name}}, {{$complete->first_name}}</td>
                                    <td>{{$complete->details}}</td>
                                    <td><a href="{{URL::to('/')}}/{{$view_folder}}/marcom_show/{{$complete->id}}">Specifics</a></td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
@endif

<button id="all_button"  class="btn-info btn-lg">Click to show All Requests</button>
<p>Total Number of Requests:{{count($datas)}}<p></p>
<div id="all">
<div class="row">
<div class="col-md-10">
<div class="table-responsive">
<table class="table">
<tr>
<th>
Name
</th>
<th>
Details
</th>
<th>

</th>
</tr>
@foreach($datas as $data)
<tr>
<td>{{$data->last_name}}, {{$data->first_name}}</td>
<td>{{$data->details}}</td>
<td><a href="{{URL::to('/')}}/{{$view_folder}}/marcom_show/{{$data->id}}">Specifics</a></td>
</tr>
@endforeach
</table>
</div>
</div>
</div>
</div>
@endsection

