@extends('layouts.app') @section('content')
<div class="main container">
    <h2>Press Releases</h2>
    All {{count($datas)}}
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
                            Status
                        </th>
                        <th>
                            Due Date
                        </th>
                        <th>

                        </th>
                    </tr>
                    @foreach($datas as $data)
                        <tr>
                            <td>{{$data->last_name}}, {{$data->first_name}}</td>
                            <td>{{$data->significant}}</td>
                            <td>{{$data->status}}</td>
                            <td>{{$data->due_date}}</td>
                            <td><a href="{{URL::to('/')}}/press_releases/{{$data->id}}">Details</a></td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
Received
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
                            Status
                        </th>
                        <th>
                            Due Date
                        </th>
                        <th>

                        </th>
                    </tr>
                    @foreach($recieveds as $recieved)
                        <tr>
                            <td>{{$recieved->last_name}}, {{$recieved->first_name}}</td>
                            <td>{{$recieved->significant}}</td>
                            <td>{{$recieved->status}}</td>
                            <td>{{$recieved->due_date}}</td>
                            <td><a href="{{URL::to('/')}}/press_releases/{{$recieved->id}}">Details</a></td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
    @if(count($progresses) > 0)
    In Progress
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
                            Status
                        </th>
                        <th>
                            Due Date
                        </th>
                        <th>

                        </th>
                    </tr>
                    @foreach($recieveds as $recieved)
                        <tr>
                            <td>{{$recieved->last_name}}, {{$recieved->first_name}}</td>
                            <td>{{$recieved->significant}}</td>
                            <td>{{$recieved->status}}</td>
                            <td>{{$recieved->due_date}}</td>
                            <td><a href="{{URL::to('/')}}/press_releases/{{$recieved->id}}">Details</a></td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
    @endif
@endsection

