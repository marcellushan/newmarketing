@extends('layouts.app') @section('content')
<div class="main container">
    <h2>Design and Printing</h2>
    <div class="row">
        <div class="col-md-10">
            <div class="table-responsive">
                <table class="table">
                    <tr>
                        <th>
                            Name
                        </th>
                        <th>
                            What needs to be designed or printed.
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
                            <td>{{$data->needs}}</td>
                            <td>{{$data->due_date}}</td>
                            <td><a href="{{URL::to('/')}}/design_printing/{{$data->id}}">Details</a></td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection

