<div class="container">
    <h1 class="text-center p-5">Courses</h1>
    <div class="row">
       @foreach($courseKey as $course)
        <div class="col col-md-4">
            <div  class="card mb-3">
                <div class="card-body">
{{--                <img src="{{$course}}">--}}
                <div class="card-title">
                    {{$course->course_name}}
                </div>
                    <div class="card-text">
                        <h5 style="color:coral">{{$course->course_fee}}</h5>
                    </div>
                <div class="card-text">
                    {{$course->course_des}}
                </div>
            </div>
            </div>
        </div>
        @endforeach
    </div>

</div>
