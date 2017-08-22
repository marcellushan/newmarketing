@extends('layouts.app') @section('content')
    @include('partials.to_marcom')
    @include($view_folder  . '.show')
    @include('partials.accept')
@endsection
