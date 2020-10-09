<div class="container-fluid">
    <h3 class="text-center p-2">COURSES</h3>

    <div class="row">
        <div class="col-md-6">
            <div class="card p-5">
                <i style="color: #f63854;" class="fas fa-book-open fa-7x"></i>
            </div>
        </div>
        <div class="col-md-6">
        @foreach($courseKey as $data )
               <div class="card p-1">
                <span class="text-left card-text"><img  width="100px" src="{{$data->course_image}}"> | {{$data->course_name}}</span>
               </div>

        @endforeach
        </div>
    </div>

    {{--       @foreach($courseKey as $course)--}}
    {{--        <div class="col col-md-4">--}}
    {{--            <div  class="card mb-3 " height="500px">--}}
    {{--                <div class="card-body">--}}
    {{--                <img height="200vh" width="100%" src="{{$course->course_image}}">--}}
    {{--                <div class="card-title">--}}
    {{--                    {{$course->course_name}}--}}
    {{--                </div>--}}
    {{--                    <div class="card-text">--}}
    {{--                        <h5 style="color:coral">{{$course->course_fee}}</h5>--}}
    {{--                    </div>--}}
    {{--                <div class="card-text">--}}
    {{--                    {{$course->course_des}}--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--        @endforeach--}}
</div>

