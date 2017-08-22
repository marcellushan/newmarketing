@extends('layouts.app') @section('content')

    <h1><a href="{{URL::to('/')}}/register"> Register to use services</a></h1>

    <h1><a href="{{URL::to('/')}}/admin"> Requests by Customer</a></h1>

    <h1><a href="{{URL::to('/')}}/services_list"> Requests by Service Type</a></h1>

    <h1><a href="{{URL::to('/')}}/service_request/create"> Submit a new Marcom Request</a></h1>

    <h1><a href="{{URL::to('/')}}/list"> Individual Customer Requests</a></h1>
@endsection