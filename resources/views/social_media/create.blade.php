@extends('layouts.app') @section('content')
<div class="main container">
        <h1>Social Media</h1>
    {{Form::open(array('url' => 'social_media','files'=>'true','id'=>'social_media'))}}
       <div class="row">
        <h3 class="col-sm-6">
            Request Type
        </h3>
    </div>
    <div class="row">
        <div class="col-sm-3">
            Post Rotation&nbsp;
            <input type="radio" name="request_type" value="Post Rotation">
        </div>
        <div class="col-sm-3">
            Single Post
            <input type="radio" name="request_type" value="Single Post">
        </div>
        <div class="col-sm-3">
            Starting New Page
            <input type="radio" name="request_type" value="Starting New Page">
        </div>
    </div>
    @include('partials.audience')
    <p></p>
    <div id="post">
    What does the post need to say?
    <div class="row">
        <div class="col-sm-10">
            <div class="form-group">
                <label>Facebook</label>
                <textarea class="form-control" rows="5" name="facebook_text"></textarea>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-10">
            <div class="form-group">
                <label>Twitter</label>
                <textarea class="form-control" rows="5" name="twitter_text"></textarea>
            </div>
        </div>
    </div>

        <div class="row">
            <div class="col-sm-6 col-sm-offset-4">
                <h4>Attach any graphics to accompany the post?</h4>
            </div>
        </div>
    <div class="row">
        <div class="col-sm-6 col-sm-offset-4">
            <h4>{{Form::file('image')}}</h4>
        </div>
    </div>
    </div>
    <div id="new_page">
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
            <div class="form-group">
                <label>What is the purpose of the page?</label>
                <textarea class="form-control" rows="5" name="details"></textarea>
            </div>
        </div>
    </div>
    Who will manage the page?
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" name="name">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                <div class="form-group">
                    <label>Department</label>
                    @include('partials.departments')
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                <div class="form-group">
                    <label>Email Address</label>
                    <input type="email" class="form-control" name="email">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                <div class="form-group">
                    <label>Phone</label>
                    <input type="text" class="form-control" name="phone">
                </div>
            </div>
        </div>
    @include('partials.social')
</div>
       <div class="row">
        <div class="col-sm-3 col-sm-offset-5">
            <div class="form-group">
                <input type="submit" class="btn-default btn-lg" id="confirm">
            </div>
        </div>
    </div>
@endsection
