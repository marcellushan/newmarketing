@extends('layouts.app') @section('content')
<div class="main container">
        <h1>Videography</h1>
    {{Form::open(array('url' => 'videography','id'=>'videography'))}}
    <div class="row">
        <div class="col-sm-10">
            <div class="form-group">
                <label>What/who do you need a video of?</label>
                <textarea class="form-control" rows="5" name="details" placeholder="required"></textarea>
            </div>
        </div>
    </div>
    @include('partials.audience')
    <div class="row">
        <div class="col-sm-10">
            <div class="form-group">
                <label>Please provide details and purpose for video.</label>
                <textarea class="form-control" rows="5" name="purpose" placeholder="required"></textarea>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-10">
            <div class="form-group">
                <label>How/where will you use the video?</label>
                <textarea class="form-control" rows="5" name="use" placeholder="required"></textarea>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-3 col-sm-offset-5">
            <div class="form-group">
                <input type="submit" class="btn-default btn-sm" id="confirm">
            </div>
        </div>
    </div>
@endsection
