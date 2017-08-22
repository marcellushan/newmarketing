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
                            Due Date
                        </th>
                        <th>

                        </th>
                    </tr>
                    @foreach($datas as $data)
                        <tr>
                            <td>{{$data->last_name}}, {{$data->first_name}}</td>
                            <td>{{$data->summary}}</td>
                            <td>{{$data->due_date}}</td>
                            <td><a href="{{URL::to('/')}}/admin/{{$data->id}}">Details</a></td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection

