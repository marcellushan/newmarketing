@extends('layouts.app') @section('content')
<div class="main container">
    <h2>The following requests have been submitted by: {{$user->name}}</h2>
    <div class="row">
        <div class="col-md-10">
            <div class="table-responsive">
                <table class="table">
                    <tr>
                        <th>
                            Summary
                        </th>
                        <th>
                            Submit Date
                        </th>
                       <th>

                        </th>
                    </tr>
                    @foreach($service_requests as $service_request)
                        <tr>
                            <td>{{$service_request->summary}}</td>
                            <td>{{date_format(new DateTime($service_request->created_at),'m/d/y')}}</td>
                            <td><a href="{{URL::to('/')}}/list/{{$service_request->id}}">Details</a></td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection

