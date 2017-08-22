@extends('layouts.app') @section('content')
<div class="main container">
        <h1>Event Aid</h1>
    {{Form::open(array('url' => 'event', 'id' => 'event'))}}

        <h3>
            Is this request for a GHC event?
        </h3>

    <div class="row">
        <div class="col-sm-2">
            Yes
            <input type="radio" name="GHC" value="1">
        </div>
        <div class="col-sm-2">
            No&nbsp;
            <input type="radio" name="GHC" value="0">
        </div>
    </div>
    <h3>
    Event Details
        </h3>
    <div class="row">
        <div class="col-sm-10">
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" name="details">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-5">
            <div class="form-group">
                <label>Date</label>
                <label for="usr"><div class="column_header">Date Needed: </div></label> @include('partials.date_needed')<br>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-5">
            <div class="form-group">
                <label>Time</label>
                @include('partials.start_time')
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-10">
            <div class="form-group">
                <label>Location</label>
                <input type="text" class="form-control" name="location">
            </div>
        </div>
    </div>
    @include('partials.display')
    <div id='other_details'>
    @include('partials.textbox', ['title' => 'Other Details', 'name' => 'other_details','id' => 'event_other_details'])
    </div>
    <div id="pickup">
        <h3>
        Who will be in charge of picking up these items, using them, and returning them?
            </h3>
        <div class="row">
            <div class="col-sm-10">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" name="pickup_name">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-10">
                <div class="form-group">
                    <label>Department</label>
                    @include('partials.departments')
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-10">
                <div class="form-group">
                    <label>Email Address</label>
                    <input type="email" class="form-control" name="pickup_email">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-10">
                <div class="form-group">
                    <label>Phone</label>
                    <input type="text" class="form-control" name="pickup_phone">
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-4">
            <div class="form-group">
                <label>Estimated Attendance</label>
                <input type="text" class="form-control" name="attendance">
            </div>
        </div>
    </div>
    <div id="GHC">
        <div class="row">
            <div class="col-sm-4">
                <div class="form-group">
                    <label>Cost for Attendees</label>
                    <input type="text" class="form-control" name="cost">
                </div>
            </div>
        </div>
        <div class="row">
            <h3 class="col-sm-7">
               Speakers?
            </h3>
        </div>
        <div class="row">
            <div class="col-sm-2 col-sm-offset-5">
                Yes
                <input type="radio" name="speaker" value="1">
            </div>
            <div class="col-sm-2">
                No&nbsp;
                <input type="radio" name="speaker" value="0">
            </div>
        </div>
        @include('partials.textbox', ['title' => 'Speaker bio', 'name' => 'speaker_bio'])

        <div class="row">
            <h3 class="col-sm-7">
                Sponsors
            </h3>
        </div>
        <div class="row">
            <div class="col-sm-2 col-sm-offset-5">
                Yes
                <input type="radio" name="sponsor" value="1">
            </div>
            <div class="col-sm-2">
                No&nbsp;
                <input type="radio" name="sponsor" value="0">
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4 col-sm-offset-4">
                <div class="form-group">
                    <label>Sponsor Website</label>
                    <input type="url" class="form-control" name="sponsor_website">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4 col-sm-offset-4">
                <div class="form-group">
                    <label>RSVP Deadline</label>
                    <input type="date" class="form-control" name="rsvp">
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-3 col-sm-offset-3">
            <div class="form-group">
                <input type="submit" class="btn-default btn-lg" id="confirm">
            </div>
        </div>
    </div>
@endsection
