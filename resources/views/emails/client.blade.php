@extends('layouts.app') @section('content')
    <div class="main container">
        <div class="row">
            <div  class="col-sm-10">
            <h3>Thank you for using the Marcom Service Form.</h3><h3>Please keep this email as confirmation. Also, please follow the link below to review the progress of your request and work with our team to complete it.</h3>

               <h3> If you have further questions regarding your request, please direct those to the comment section on your project page by following the link below.</h3>

                <h3>We look forward to working with you.</h3>
                <h3><a href="{{URL::to('/')}}/service_request/{{$data->id}}">Click to view request</a> </h3>
        </div>

    </div>


    </div>
@endsection