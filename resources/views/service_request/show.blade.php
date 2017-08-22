@extends('layouts.app') @section('content')
<div class="main container">
    <h2>Marketing Service Form</h2>
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="row">
            <h3 class="col-lg-4">Submit Date:
                <span class="item">{{date_format($data->created_at, 'd F Y')}}</span>
            </h3>
        </div>
         <div class="row">
            <h3 class="col-lg-6">Name
                <span class="item">{{$user_info->name}}</span>
            </h3>
             <h3 class="col-lg-4">Department
                 <span class="item">{{$data->department}}</span>
             </h3>
        </div>
    <div class="row">
        <h3 class="col-lg-6">Email Address
            <span class="item">{{$user_info->email}}</span>
        </h3>
        <h3 class="col-lg-3">Phone
            <span class="item">{{$data->phone}}</span>
        </h3>
    </div>

    <div class="row">
        <h3 class="col-lg-10">Brief Project Summary</h3>
    </div>
    <div class="row">
        <h3 class="col-sm-9">{{$data->summary}}</h3>
    </div>


    <div class="row">
    @if($press_release)
        <h2  class="col-lg-10 col-lg-offset-3"><a href="{{URL::to('/')}}/press_release/customer_show/{{$press_release->id}}"> Press Release/Media Advisory</a></h2>
    @endif

    @if($design_printing)
        <h2  class="col-lg-10 col-lg-offset-3"><a href="{{URL::to('/')}}/design_printing/customer_show/{{$design_printing->id}}"> Design and Printing</a></h2>
    @endif

    @if($photography)
        <h2  class="col-lg-10 col-lg-offset-3"><a href="{{URL::to('/')}}/photography/customer_show/{{$photography->id}}">Photography</a></h2>
    @endif

    @if($videography)
        <h2  class="col-lg-10 col-lg-offset-3"><a href="{{URL::to('/')}}/videography/customer_show/{{$videography->id}}">Videography</a></h2>
    @endif

    @if($paid_advertising)
        <h2  class="col-lg-10 col-lg-offset-3"><a href="{{URL::to('/')}}/paid_advertising/customer_show/{{$paid_advertising->id}}">Paid Advertising</a></h2>
    @endif

    @if($presentation)
        <h2  class="col-lg-10 col-lg-offset-3"><a href="{{URL::to('/')}}/presentation/customer_show/{{$presentation->id}}"> Presentation</a></h2>
    @endif

    @if($social_media)
        <h2  class="col-lg-10 col-lg-offset-3"><a href="{{URL::to('/')}}/social_media/customer_show/{{$social_media->id}}"> Social Media</a></h2>
    @endif

    @if($event)
        <h2  class="col-lg-10 col-lg-offset-3"><a href="{{URL::to('/')}}/event/customer_show/{{$event->id}}"> Event Aid</a></h2>
    @endif
</div>

@endsection
