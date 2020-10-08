<h3 class="text-center p-5">PROJECT</h3>
<div id="testimonial">

    <div class="owl-carousel owl-theme">
        @foreach($projectKey as $project)
            <div class="item">
                <div class="testimonial">
                    <div class="card">
                        <div class="card-body">
                            <img alt="image/classroom.png" src="{{$project->project_image}}">
                            <div class="card-title">
                                <h1>{{$project->project_name}}</h1>
                            </div>
                            <div class="card-text">
                                {{$project->project_des}}
                            </div>
                            <a href="{{url('/projectView')}}/{{$project->id}}" class="btn btn-outline-danger viewProject">View</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

</div>
@endsection



