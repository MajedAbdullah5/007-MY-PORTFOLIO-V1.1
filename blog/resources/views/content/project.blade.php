<h1 class="text-center p-5">Project</h1>
<div id="testimonial">

    <div class="owl-carousel owl-theme">
        @foreach($projectKey as $project)
        <div class="item">
            <div class="testimonial">
                    <div class="card">
                        <div class="card-body">
                            <img alt="image/classroom.png" src="{{asset('/image/banner/classroom.png')}}">
                            <div class="card-title">
                                <h1>{{$project->project_name}}</h1>
                            </div>
                            <div class="card-text">
                                {{$project->project_des}}
                            </div>
                            <button class="btn btn-outline-danger"><a href="  {{$project->project_link}}">View</a></button>
                        </div>
                    </div>

            </div>

        </div>
        @endforeach
    </div>

</div>


