@extends('layouts.app') @section('content')
    @include("partials.client_info")
    @include($view_folder . '.show')
    @include('partials.status')
    @include('partials.previous_comments')
    @include('partials.create_comment')
@endsection


