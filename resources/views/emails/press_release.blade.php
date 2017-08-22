@extends('layouts.app') @section('content')
    <div class="main container">
        <h1>{{$data->first_name}}</h1>
        <h1>{{$service_type->details}}</h1>
    </div>
@endsection