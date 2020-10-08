@extends('Layout.app')
@section('content')
@foreach($result as $data)

{{--    <h1> {{$data->project_link}}</h1>--}}
    <div class="container p-4">
        <h1>{{$data->id}} | {{$data->project_name}}</h1>
        <div class="row">
            <div class="col-md-12 mb-5">
                <img class="project_image" src="{{$data->project_image}}" alt="">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 mb-5">
                <p>{{$data->project_des}}</p>
            </div>
        </div>
    </div>
@endforeach
@endsection
