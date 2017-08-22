@extends('layouts.app') @section('content')
    <div class="main container">

<h1><a href="{{URL::to('/')}}/service_request/create"> Create Service Request</a></h1>
<h1><a href="{{URL::to('/')}}/list">View Requests</a></h1>

@endsection