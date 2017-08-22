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
                    @foreach($clients as $client)
                        <tr>
                            <td>{{$client->last_name}}, {{$client->first_name}}</td>
                            <td>{{$client->summary}}</td>
                            <td>{{date_format($client->created_at, 'd F Y')}}</td>
                            <td><a href="{{URL::to('/')}}/admin/{{$client->id}}">Details</a></td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection

