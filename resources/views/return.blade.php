@extends('layouts.app') @section('content')
    @include($view_folder  . '.show')
    @include('partials.client_status')
    @include('partials.previous_comments')
    @include('partials.create_comment')
@endsection
