@extends('Layout.app')
@section('content')
    @include('content.banner')
    @include('content.Quote')
    @include('content.service')
    <hr>
    @include('content.course')
    <hr>
    @include('content.project')
    <hr>
    @include('content.Message')
@endsection

