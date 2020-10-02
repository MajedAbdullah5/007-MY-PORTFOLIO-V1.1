@extends('Layout.app')

@section('content')
    <div class="container-fluid">
        <div class="container">
            <div class="row text-center p-5">
                <div class="col col-md-12 ">
                    <h1 style="font-weight: bold;">CURRICULUM VITAE</h1>
                </div>
            </div>

            <h6 style="font-weight: bold;">EMERGENCY CONTACT</h6>
            <hr>
            <div class="row">

                <div class="col col-md-2">
                    <h6>Name</h6>
                    <h6>Address</h6>
                    <h6>Mobile</h6>
                    <h6>Email</h6>
                </div>
                <div class="col col-md-2">
                    <h6>:</h6>
                    <h6>:</h6>
                    <h6>:</h6>
                    <h6>:</h6>
                </div>
                <div class="col col-md-6">
                    @foreach($emergencyKey as $data)
                        <h6>{{$data->emergency_name}}</h6>
                        <h6>{{$data->emergency_address}}</h6>
                        <h6>{{$data->emergency_mobile}}</h6>
                        <h6>{{$data->emergency_email}}</h6>
                    @endforeach
                </div>
                <div class="col col-md-2">
                    <img height="150px" width="180px" src="{{asset('/image/banner/classroom.png')}}" alt="">
                </div>
            </div>
            <h6 style="font-weight: bold;">CAREER OBJECTIVES</h6>
            <hr>
            <div class="row">
                <div class="col col-md-12">
                    <p>{{$objectivesKey->objectives}}</p>
                </div>
            </div>
            <h6 style="font-weight: bold;">EDUCATION</h6>
            <hr>
            <div class="row p-3">
                @foreach($education_modelKey as $data)

                    <div class="col col-md-6 p-3">
                        <h6>{{$data->education_duration}}</h6>
                    </div>
                    <div class="col col-md-6 p-3">
                        <span style="font-weight: bold">{{$data->education_institute}}</span><br>
                        {{$data->education_certificate}}
                        {{$data->education_major}} <br>
                        {{$data->education_gpa}}<br>
                        {{$data->education_board}}

                    </div>
                @endforeach
            </div>
            <h6 style="font-weight: bold;">LANGUAGE</h6>
            <hr>
            <div class="row p-2 ">
                @foreach($language_modelKey as $data)

                    <div class="col col-md-4 p-2">
                        <h6>{{$data->language}}</h6>
                    </div>
                    <div class="col col-md-4 p-2">
                        <h6>:</h6>
                    </div>

                    <div class="col col-md-4 p-2">
                        <h6>{{$data->language_proficiency}}</h6>
                    </div>
                @endforeach
            </div>
            <h6 style="font-weight: bold;">SKILLS</h6>
            <hr>
            <div class="row p-2">
                @foreach($programming_skill_modelKey as $data)
                    <div class="col col-md-4 p-2">
                        <h6>{{$data->programming_language}}</h6>
                    </div>
                    <div class="col col-md-4 p-2">
                        <h6>:</h6>
                    </div>
                    <div class="col col-md-4 p-2">
                        <div class="progress" style="height: 40%">
                            <div class="progress-bar" role="progressbar"
                                 style=" width: {{$data->programming_level}}; height: 10px; background-color: #d54855;"
                                 aria-valuenow="" aria-valuemin="0"
                                 aria-valuemax="100">{{$data->programming_level}}</div>

                        </div>
                    </div>
                @endforeach
            </div>
            <h6 style="font-weight: bold;">JOB SKILL</h6>
            <hr>
            <div class="row">
                @foreach($jobSkillModel as $data)
                    <div class="col col-md-4">
                        <h6>{{$data->job}}</h6>
                    </div>
                    <div class="col col-md-4">
                        <h6>:</h6>
                    </div>
                    <div class="col col-md-4">
                        <h6><span style="font-weight: bold">{{$data->workplace}}</span><br>
                            {{$data->position}}
                        </h6>
                    </div>
                @endforeach
            </div>
            <h6 style="font-weight: bold;">PERSONAL INFORMATION</h6>
            <hr>
            <div class="row pb-3">
                @foreach($personal_informationModel as $data)
                    <div class="col col-md-4 ">
                        <h6>{{$data->information_status}}</h6>
                    </div>
                    <div class="col col-md-4 ">
                        <h6>:</h6>
                    </div>
                    <div class="col col-md-4 ">
                        <h6>{{$data->information}}</h6>
                    </div>
                @endforeach
            </div>
            <h6 style="font-weight: bold;">ADDRESS</h6>
            <hr>
            <div class="row">
                @foreach($AddressModel as $data)

                    <div class="col col-md-4">
                        <h6>{{$data->address_status}}</h6>
                    </div>
                    <div class="col col-md-4">
                        <h6>:</h6>
                    </div>
                    <div class="col col-md-4 pb-5">
                        <h6>{{$data->address}}</h6>
                    </div>
                @endforeach
            </div>

        </div>
    </div>
    </div>
@endsection

