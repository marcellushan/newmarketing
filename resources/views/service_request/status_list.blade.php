@extends('layouts.app') @section('content')
<div class="main container">
    <h2>Service Type: {{$media_name}}</h2>
    <h3>Status: {{ucwords($status)}}</h3>
    <div class="row">
        <div class="col-md-10">
            <h4>
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
                            Submission Date
                        </th>
                    </tr>
                    @foreach($datas as $data)
                        <tr>
                            <td>{{$data->name}}</td>
                            <td>{{$data->details}}</td>
                            <td>{{date_format(new DateTime($data->created_at),'m/d/y')}}</td>
                            <td><a href="{{URL::to('/')}}/{{$view_folder}}/marcom_show/{{$data->id}}">Details</a></td>
                        </tr>
                    @endforeach
                </table>
            </h4>
            </div>
        </div>
    </div>
@endsection

