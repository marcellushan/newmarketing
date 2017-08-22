@extends('layouts.app') @section('content')
<div class="main container">
    <h1 class="wrapper">Marketing Communications Service Form</h1>
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
         <div class="row">
            <h3 class="col-md-4 col-md-offset-1">First name
                <span class="item">{{$data->first_name}}</span>
            </h3>
            <h3 class="col-md-3">Last name
                <span class="item">{{$data->last_name}}</span>
            </h3>
             <h3 class="col-md-4">Department
                 <span class="item">{{$data->department}}</span>
             </h3>
        </div>
    <div class="row">
        <h3 class="col-md-4 col-md-offset-1">Email Address
            <span class="item">{{$data->email}}</span>
        </h3>
        <h3 class="col-md-3">Phone
            <span class="item">{{$data->phone}}</span>
        </h3>
        <h3 class="col-md-4">Request Due Date
            <span class="item">{{$data->due_date}}</span>
        </h3>
    </div>

    <br>
    <h3 align="center">Brief Project Summary</h3>
    <h3 class="item">{{$data->summary}}</h3>

    @if($press_release)
        @include('press_release.client')
    @endif

    @if($design_printing)
        @include('design_printing.client')
    @endif


    @if($photography)
        <h2 align="center">Photography</h2>
        <h3 align="center">What/who do you need photographed?</h3>
        <h3 class="item wrapper">{{$photography->requirements}}</h3>
        <h3 align="center">Location</h3>
        <h3 class="item wrapper">{{$photography->location}}</h3>
        <h3 align="center">How/where will you use the photos?</h3>
        <h3 class="item wrapper">{{$photography->use}}</h3>
        <h3 align="center">Shoot date</h3>
        <h3 class="item wrapper">{{$photography->requested_date}}</h3>
        <h3 align="center">Start time</h3>
        <h3 class="item wrapper">{{$photography->start}}</h3>
        <h3 align="center">End time</h3>
        <h3 class="item wrapper">{{$photography->end}}</h3>
    @endif

    @if($videography)
        <h2 align="center">Videography</h2>
        <h3 align="center">What/who do you need video of?</h3>
        <h3 class="item">{{$videography->requirements}}</h3>
        <h3 align="center">Audience</h3>
        <h3 class="item" align="center">
            @if($videography->students) Students @endif
            @if($videography->faculty_staff) Faculty/Staff @endif
            @if($videography->community) Community @endif
            @if($videography->alumni) Alumni @endif
        </h3>
        <h3 align="center">Please provide details and purpose for video.</h3>
        <h3 class="item">{{$videography->purpose}}</h3>
        <h3 align="center">How/where will you use the video?</h3>
        <h3 class="item">{{$videography->use}}</h3>
    @endif

    @if($paid_advertising)
        <h2 align="center">Paid Advertising</h2>
        <h3 align="center">What do you want to advertise?</h3>
        <h3 class="item">{{$paid_advertising->ad_event}}</h3>
        <h3 align="center">Audience</h3>
        <h3 class="item" align="center">
            @if($paid_advertising->students) Students @endif
            @if($paid_advertising->faculty_staff) Faculty/Staff @endif
            @if($paid_advertising->community) Community @endif
            @if($paid_advertising->alumni) Alumni @endif
        </h3>
        <h3 align="center">Please provide details and purpose for advertisement.</h3>
        <h3 class="item">{{$paid_advertising->purpose}}</h3>
        <h3 align="center">How/where/when do you see the advertisement
            being used?</h3>
        <h3 class="item">{{$paid_advertising->details}}</h3>
        <h3 align="center">Which advertising options seem appropriate?</h3>
        <h3 class="item" align="center">
            @if($paid_advertising->social_media) Social Media @endif
            @if($paid_advertising->print) Print @endif
            @if($paid_advertising->billboard) Billboard @endif
            @if($paid_advertising->digital) Digital @endif
            @if($paid_advertising->other) Other @endif
        </h3>
        <h3 align="center">Budget</h3>
        <h3 class="item wrapper">${{money_format('%i', $paid_advertising->budget)}}</h3>


    @endif

    @if($presentation)
        <h2 align="center">Presentation/Interview Preparation</h2>
        <h3 align="center">Where are you presenting or being interviewed and
            on what topic?</h3>
        <h3 class="item">{{$presentation->topic}}</h3>
        <h3 align="center">Audience</h3>
        <h3 class="item" align="center">
            @if($presentation->students) Students @endif
            @if($presentation->faculty_staff) Faculty/Staff @endif
            @if($presentation->community) Community @endif
            @if($presentation->alumni) Alumni @endif
        </h3>
        <h3 align="center">When is this presentation or interview taking place?</h3>
        <h3 class="item">{{$presentation->presentation_date}}</h3>
        <h3 align="center">Please check the areas you would like assistance in:</h3>
        <h3 class="item">{{$presentation->area}}</h3>

    @endif

    @if($social_media)
        <h2 class="wrapper">Social Media</h2>
        <h3 class="wrapper">Request Type</h3>
        <h3 class="item wrapper">{{$social_media->media_type}}</h3>
        <h3 class="wrapper">Audience</h3>
        <h3 class="item wrapper" >
            @if($social_media->students) Students @endif
            @if($social_media->faculty_staff) Faculty/Staff @endif
            @if($social_media->community) Community @endif
            @if($social_media->alumni) Alumni @endif
        </h3>
        @if($social_media->media_type=="Starting New Page")
            <h3 class="wrapper">What is the Purpose of the page?</h3>
            <h3 class="item wrapper">{{$social_media->purpose}}</h3>
            <h3 class="wrapper">Who will manage the page?</h3>
            <h3 class="item wrapper">{{$social_media->name}}</h3>
            <h3 class="item wrapper">{{$social_media->email}}</h3>
            <h3 class="item wrapper">{{$social_media->phone}}</h3>
            <h3 class="item wrapper">{{$social_media->department}}</h3>
            <h3 class="wrapper">Which social media network are you interested in?</h3>
            <h3 class="item wrapper" >
                @if($social_media->facebook) Facebook @endif
                @if($social_media->twitter) Twitter @endif
                @if($social_media->instagram) Instagram @endif
                @if($social_media->youtube) YouTube @endif
            </h3>
            <h3 class="wrapper">How would you reach your target audience?</h3>
            <h3 class="item wrapper">{{$social_media->how}}</h3>
        @else
            <h3 class="wrapper">What does the post need to say?</h3>
            @if($social_media->facebook_text)
                <h3 class="wrapper">Facebook</h3>
                <h3 class="item wrapper">{{$social_media->facebook_text}}</h3>
            @endif
            @if($social_media->twitter_text)
                <h3 class="wrapper">Facebook</h3>
                <h3 class="item wrapper">{{$social_media->twitter_text}}</h3>
            @endif
            @if($social_media->image)
                <h3 class="wrapper">Graphics</h3>
                <h3 class="item wrapper"><a href="{{$social_media->image}}">Link</a></h3>
            @endif
        @endif
    @endif
    @if($event)
        <h2 align="center">Event Aid</h2>
        <h3 align="center">GHC Event? <span class="item">@if($event->GHC) Yes @else No @endif</span> </h3>
        <h3 class="wrapper">Event Name</h3>
        <h3 class="item wrapper">{{$event->name}}</h3>
        <h3 class="wrapper">Event Date and Time</h3>
        <h3 class="item wrapper">{{$event->event_date}} at {{$event->event_time}}</h3>
        <h3 class="wrapper">Display/Promotional Items Needed</h3>
        <h3 class="item wrapper" >
            @if($event->banners) Banners @endif
            @if($event->table_clothes) Table Clothes @endif
            @if($event->magazines) Easels @endif
            @if($event->promo) Promotional Material @endif
            @if($event->signs) Signs @endif
            @if($event->recruitment) Recruitment Materials @endif
            @if($event->other) Other @endif
        </h3>
        @if($event->other)
            <h3 class="wrapper">Other Details</h3>
            <h3 class="item wrapper">{{$event->other_details}}</h3>
        @endif
        @if($event->pickup_name)
            <h3 class="wrapper">
            Who will be in charge of picking up these items, using them, and returning them?
                </h3>
            <div class="row">
                <h3 class="col-md-7 col-md-offset-4">Name
                    <span class="item">{{$event->pickup_name}}</span>
                </h3>
                <h3 class="col-md-7 col-md-offset-4">Email
                    <span class="item">{{$event->pickup_email}}</span>
                </h3>
                <h3 class="col-md-7 col-md-offset-4">Phone
                    <span class="item">{{$event->pickup_phone}}</span>
                </h3>
                <h3 class="col-md-7 col-md-offset-4">Department
                    <span class="item">{{$event->pickup_department}}</span>
                </h3>
            </div>
        @endif
        {{--<h3 class="item">{{$presentation->topic}}</h3>--}}
        {{--<h3 align="center">Audience</h3>--}}
        {{--<h3 class="item" align="center">--}}
            {{--@if($presentation->students) Students @endif--}}
            {{--@if($presentation->faculty_staff) Faculty/Staff @endif--}}
            {{--@if($presentation->community) Community @endif--}}
            {{--@if($presentation->alumni) Alumni @endif--}}
        {{--</h3>--}}
        {{--<h3 align="center">When is this presentation or interview taking place?</h3>--}}
        {{--<h3 class="item">{{$presentation->presentation_date}}</h3>--}}
        {{--<h3 align="center">Please check the areas you would like assistance in:</h3>--}}
        {{--<h3 class="item">{{$presentation->area}}</h3>--}}
        event
    @endif


   <div class="row">
       <div class="col-md-3 col-md-offset-4">
    <button type="button" class="btn btn-success btn-lg">Submit</button>
           </div>
       <div class="col-md-3">
    {!! Form::open(['url' => 'clients/' . $data->id, 'method' => 'delete']) !!}
    <button type="submit" class="btn btn-success btn-lg">Cancel</button>
    </div>
   </div>
    {!! Form::close() !!}

                            <p>
@endsection
