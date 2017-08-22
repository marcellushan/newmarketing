@extends('layouts.app') @section('content')
<div class="main container">
    <h2 align="center">Service Requests</h2>

    <div class="row">
        <div class="col-sm-3 col-sm-offset-2">
            <h3><a href="{{URL::to('/')}}/press_release"> Press Release</a></h3>
        </div>
        <div class="col-sm-3">
            <h3><a href="{{URL::to('/')}}/design_printing">Design and Printing</a></h3>
        </div>
        <div class="col-sm-3">
            <h3><a href="{{URL::to('/')}}/photography">Photography</a></h3>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-3 col-sm-offset-2">
            <h3><a href="{{URL::to('/')}}/videography">Videography</a></h3>
        </div>
        <div class="col-sm-3">
            <h3><a href="{{URL::to('/')}}/paid_advertising">Paid Advertising</a></h3>
        </div>
        <div class="col-sm-3">
            <h3><a href="{{URL::to('/')}}/presentation">Presentation<a</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-3 col-sm-offset-2">
            <h3><a href="{{URL::to('/')}}/social_media">Social Media</a></h3>
        </div>
        <div class="col-sm-3">
            <h3><a href="{{URL::to('/')}}/event">Event Aid</a></h3>
        </div>
    </div>
@endsection

