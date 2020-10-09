@extends('Layout.app')
@section('content')
<div class="container">
    <h5 class="p-3">LIST OF COURSES</h5>
    <hr>
        @foreach($result as $data )
            <div class="card mb-3">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="{{$data->course_image}}" class="card-img w-100 h-100" alt="">
                    </div>
                    <div class="col-md-6 ">
                        <div class="card-body text-left p-5">
                            <h5 class="card-title">{{$data->course_name}}</h5>
                            <h6 style="color: coral" >Course Fee: {{$data->course_fee}} BDT</h6>
                            <p class="card-text">{{$data->course_des}}</p>
                            <p class="card-text"><small class="text-muted">Total Class: {{$data->course_total_class}} | Total Enroll: {{$data->course_total_enroll}}</small></p>

                        </div>
                    </div>
                    <div class="col-md-2">
                        <a class="btn btn-danger">ENROLL</a>
                    </div>
                </div>
            </div>
    @endforeach


</div>
@endsection
