@extends('Layout.app')
@section('content')
    <h6 class="p-3"><a id="addPhotosButton" class="btn btn-outline-deep-purple">ADD PHOTO</a></h6>
    {{--    <-- contact populate modal -->--}}
    <div class="modal fade" id="addPhotosModal" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h5 class="modal-title" id="exampleModalLabel">Upload Image</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div id="header" class="mb-2"></div>
                    <input type="file" id="imageInput" class="form-control mb-4"
                           placeholder="Select image"/>
                           <img id="imagePreview" class="imagePreview" src="{{asset('/image/loader/default-image.jpg')}}" alt="">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                    <button id="addPhotosModalButton" class="btn btn-primary btn-sm">
                        Save
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row photoRow">
        </div>
    </div>

@endsection
@section('script')
    <script>
        photoOnScroll();
        function photoOnScroll(){
            axios.get('/photoOnScroll').
            then(function(response){
                let result = response.data;
                $.each(result,function (i){
                    $("<div class='col-md-3 p-1 '>").html(
                        "<img class='imageOnScroll' src="+result[i].location+">"
                    ).appendTo('.photoRow');
                });
            }).catch(function(error){

            });
        }
        $('#addPhotosButton').click(function () {
            $('#addPhotosModal').modal('show');
        });
        $('#imageInput').change(function () {
            //File reader is a javaScript object we can read file
            let reader = new FileReader();
            reader.readAsDataURL(this.files[0]);
            reader.onload = function (event) {
                let source = event.target.result;
                $('#imagePreview').attr('src', source);
            };

        });

        $('#addPhotosModalButton').on('click', function () {
            let file = $('#imageInput').prop('files')[0];
            let formData = new FormData();
            formData.append('photo', file);
            axios.post('/addPhotos', formData).then(function (response) {
                if (response.status == 200 && response.data == 1) {
                    $('#addPhotosModal').modal('hide');
                    alert("Picture uploaded!");
                } else {
                    $('#addPhotosModal').modal('hide');
                    alert("Upload Failed!");
                }
            }).catch(function (error) {
                $('#addPhotosModal').modal('hide');
                alert("Upload Failed!");
            });
        });
    </script>
@endsection

