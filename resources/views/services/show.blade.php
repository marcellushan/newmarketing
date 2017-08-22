@extends('layouts.app') @section('content')
    @if($service_name == 'Press Release')
        @include('press_release.show')
    @endif
    @if($service_name == 'Design and Printing')
        @include('design_printing.show')
    @endif
@endsection
