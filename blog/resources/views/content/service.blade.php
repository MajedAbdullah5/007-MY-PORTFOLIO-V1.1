<div class="Servicecontainer mt-3">
    <div class="row mt-3">
        @foreach($ServiceKey as $key)
        <div class="col col-md-3 p-2">
            <div class="card servicecard">
             <img class="mb-3" style="width: 120px;height: 120px; margin: auto; padding-top: 10px;" src="{{$key->service_image}}">
                <h3 style="color: chocolate;">{{$key->service_name}}</h3>
                <h6>{{$key->service_des}}</h6>
            </div>
        </div>
        @endforeach
    </div>
</div>
