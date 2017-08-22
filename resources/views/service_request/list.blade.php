@extends('layouts.app') @section('content')
<div class="main container">
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
                            Submit Date
                        </th>
                       <th>

                        </th>
                    </tr>
                    @foreach($service_requests as $service_request)
                        <tr>
                            <td>{{$service_request->name}}</td>
                            <td>{{$service_request->summary}}</td>
                            <td>{{date_format(new DateTime($service_request->created_at),'m/d/y')}}</td>
                            <td><a href="{{URL::to('/')}}/admin/{{$service_request->id}}">Details</a></td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection

