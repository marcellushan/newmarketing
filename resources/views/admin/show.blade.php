@extends('layouts.app') @section('content')
<div class="main container">
    <h1 class="wrapper">Marketing Communications Service Form</h1>
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
         <div class="row">
            <h3 class="col-md-4 col-md-offset-2">First name
                <span class="item">{{$data->first_name}}</span>
            </h3>
            <h3 class="col-md-4">Last name
                <span class="item">{{$data->last_name}}</span>
            </h3>
        </div>
    <div class="row">
        <h3 class="col-md-4 col-md-offset-2">Department
            <span class="item">{{$data->department}}</span>
        </h3>
        <h3 class="col-md-4">Email Address
            <span class="item">{{$data->email}}</span>
        </h3>
    </div>
    <div class="row">
        <h3 class="col-md-4 col-md-offset-2">Phone
            <span class="item">{{$data->phone}}</span>
        </h3>
    </div>
    <br>
    <h3 align="center">Brief Project Summary</h3>
    <h3 class="item">{{$data->summary}}</h3>

    @if($press_release)

        <h2 align="center">Press Release/Media Advisory</h2>
        <h3 align="center">News Type</h3>
        <h3 class="item" align="center">
            @if($press_release->student_feature) Student Feature @endif
            @if($press_release->departmental_news) Departmental News @endif
            @if($press_release->student_news) Student News @endif
            @if($press_release->college_news) College News @endif
            @if($press_release->alumni_feature) Alumni Feature @endif
            @if($press_release->research) Research @endif
            @if($press_release->alumni_news) Alumni News @endif
            @if($press_release->recognition) Recognition @endif
            @if($press_release->employee_feature) Employee Feature @endif
            @if($press_release->award) Award @endif
            @if($press_release->employee_news) Employee News @endif
            @if($press_release->retirement)Retirement @endif

        </h3>
        <h3 align="center">Why is this of significant news value? Briefly describe any key points.</h3>
        <h3 class="item wrapper">{{$press_release->significant}}</h3>
        <h3 align="center">In addition to media, to what other professional and corporate publication should we submit this story?</h3>
        <h3 class="item wrapper">{{$press_release->professional}}</h3>

        <h3 align="center">Did you have any promotional materials
            created for this request by the
            Marcom design team?</h3>
        <h3 class="item wrapper">{{$press_release->promotional}}</h3>
        <h3 align="center">Audience</h3>
        <h3 class="item" align="center">
            @if($press_release->students) Students @endif
            @if($press_release->faculty_staff) Faculty/Staff @endif
            @if($press_release->community) Community @endif
            @if($press_release->alumni) Alumni @endif
        </h3>
        <h3 align="center">Please provide the name, email and
            phone number of the individual(s)
            who should be quoted in this piece or
            recommended to media for answering
            related questions.</h3>
        <h3 class="item wrapper">{{$press_release->quote_names}}</h3>
        <h3 class="item wrapper">{{$press_release->quote_names}}</h3>
        <h3 class="item wrapper">{{$press_release->quote_names}}</h3>
        <h3 align="center">Upload any supporting images/documents
            that are to be included.</h3>
        <h3 class="wrapper"><a href="{{$press_release->image}}" >Link</a></h3>
    @endif

    @if($design_printings)
        <h2 align="center">Design & Printing</h2>
        <h3 align="center">What do you need designed/printed?</h3>
        <h3 class="item">{{$design_printings->needs}}</h3>
        <h3 align="center">Audience</h3>
        <h3 class="item" align="center">
            @if($design_printings->students) Students @endif
            @if($design_printings->faculty_staff) Faculty/Staff @endif
            @if($design_printings->community) Community @endif
            @if($design_printings->alumni) Alumni @endif
        </h3>
        <h3 align="center">Payment Type <span class="item">{{$design_printings->payment_type}}</span> </h3>
        @if($design_printings->payment_type == 'Transfer Funds')
            <h3 align="center">Accounting numbers</h3>
            <h3 class="item wrapper">{{$design_printings->dept}}{{$design_printings->fund}}  {{$design_printings->class}}</h3>
        @endif
        @if($design_printings->payment_type == 'Grant')
            <h3 align="center">Grant Number</h3>
            <h3 class="item wrapper">{{$design_printings->grant_number}}</h3>
        @endif
        <h3 align="center">Job Description</h3>
        <h3 class="item">{{$design_printings->job_description}}</h3>
        <h3 align="center">No. of Copies</h3>
        <h3 class="item wrapper">{{$design_printings->copies}}</h3>
        <h3 align="center">Date Needed</h3>
        <h3 class="item wrapper">{{$design_printings->date_needed}}</h3>
        <h3 align="center">Project Type</h3>
        <h3 class="item wrapper">{{$design_printings->services_needed}}</h3>
        <h3 align="center">Color or Black & White</h3>
        <h3 class="item wrapper">{{$design_printings->color}}</h3>
        <h3 align="center">Attached Document</h3>
        <h3 class="item wrapper"><a href="{{$design_printings->image}}">Link</a> </h3>
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

    @if($event)
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
