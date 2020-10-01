@extends('Layout.app')
@section('content')
    <table id="myTable" class="table-bordered">
        <a id="addServices" class="btn btn-info">ADD SERVICES</a>
        <thead>
        <th>ID</th>
        <th>IMAGE</th>
        <th>NAME</th>
        <th>DESCRIPTION</th>
        <th>LINK</th>
        <th>EDIT</th>
        <th>DELETE</th>
        </thead>
        <tbody id="serviceTableBody">

        </tbody>
    </table>

    {{--    Add Service modal--}}
    <div class="modal fade" id="addServiceModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h5 class="modal-title" id="exampleModalLabel">Add New</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <h1 id="status"></h1>
                <div class="modal-body">
                    <h1 id="status" class="p-3"></h1>
                    <div id="header" class="mb-2"></div>
                    <input type="text" id="addServiceName" class="form-control mb-4" placeholder="Name">
                    <textarea id="addServiceDes" class="form-control mb-4" placeholder="Description"></textarea>
                    <input type="text" id="addServiceLink" class="form-control mb-4" placeholder="Service link">
                    <input type="text" id="addServiceImage" class="form-control mb-4" placeholder="Image link">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                    <button id="addServiceButton" type="button" class="btn btn-primary btn-sm">Add</button>
                </div>
            </div>
        </div>
    </div>

    {{--    populate modal--}}

    <div class="modal fade" id="populateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <h1 id="status"></h1>
                <div class="modal-body">
                    <h1 id="status" class="p-3"></h1>
                    <div id="header" class="mb-2"></div>
                    <input type="text" id="populateNameId" class="form-control mb-4" placeholder="Name">
                    <textarea id="populateDesId" class="form-control mb-4" placeholder="Desc"></textarea>
                    <input type="text" id="populateImageLink" class="form-control mb-4" placeholder="Image link">
                    <input type="text" id="populateServiceLink" class="form-control mb-4" placeholder="Service link">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                    <button id="updateServiceButton" type="button" class="btn btn-primary btn-sm">Save</button>
                </div>
            </div>
        </div>
    </div>

    <!--add Confirm Modal -->

    <div class="modal fade" id="addServiceConfirmModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <h4 class="p-5">Do you want to Save?</h4>
                    <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Cancel</button>
                    <button id="confirmServiceAdd" type="button" class="btn btn-primary btn-sm">Save</button>
                </div>
            </div>
        </div>
    </div>


    <!--Edit Confirm Modal -->

    <div class="modal fade" id="editConfrimModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <h3 id="confirmStatus"></h3>
                    <h4 class="p-5">Do you want to Change?</h4>
                    <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
                    <button id="confirmUpdate" type="button" class="btn btn-primary btn-sm">Yes</button>
                </div>
            </div>
        </div>
    </div>

    <!--Delete Confirm Modal -->

    <div class="modal fade" id="deleteServiceModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <h4 id="serviceHiddenInput"></h4>
                    <h4 class="p-5">Do you want to Delete?</h4>
                    <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">No</button>
                    <button id="confirmServiceDelete" type="button" class="btn btn-danger btn-sm">Yes</button>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        getServicesList();
    </script>
@endsection
<script>

    function getServicesList() {
        axios.get('/getServicesList')
            .then(function (response) {
                if (response.status == 200) {
                    let result = response.data;
                    $.each(result, function (i) {
                        $("<tr>").html(
                            "<td>" + result[i].id + "</td>" +
                            "<td>" + result[i].service_image + "</td>" +
                            "<td>" + result[i].service_name + "</td>" +
                            "<td>" + result[i].service_des + "</td>" +
                            "<td>" + result[i].service_link + "</td>" +
                            "<td>" + "<a data-id=" + result[i].id + " class='btn btn-primary btn-sm editButton'>Edit</a>" + "</td>" +
                            "<td>" + "<a data-id=" + result[i].id + " class='btn btn-danger  btn-sm deleteButton'>Delete</a>" + "</td>"
                        ).appendTo("#serviceTableBody");
                    });

                    //Edit Button
                    $(".editButton").click(function () {
                        let id = $(this).data('id');
                        populateData(id);
                        $('#status').html(id);
                        $('#populateModal').modal('show');
                    });
                    //Delete Button
                    $('.deleteButton').click(function (){
                        let id = $(this).data('id');
                        $('#serviceHiddenInput').html(id);
                        $('#deleteServiceModal').modal('show');
                    });

                } else {

                }

            }).catch(function (error) {
        });

        //Add Services
        $('#addServices').click(function (){
            $('#addServiceModal').modal('show');
        });

        $('#addServiceButton').click(function (){

            $('#addServiceConfirmModal').modal('show');
        });
        $('#confirmServiceAdd').click(function (){
            let addServiceName     =  $('#addServiceName').val();
            let addServiceDes      =  $('#addServiceDes').val();
            let addServiceLink     =  $('#addServiceLink').val();
            let addServiceImage    =  $('#addServiceImage').val();
            addServices(addServiceName,addServiceDes,addServiceLink,addServiceImage);
        });


        // Add Services Method
        function addServices(addServiceName,addServiceDes,addServiceLink,addServiceImage){
            axios.post('/addServices',{
            addServiceName:addServiceName,
            addServiceDes:addServiceDes,
            addServiceLink:addServiceLink,
            addServiceImage:addServiceImage
        }).
        then(function (response){
                if(response.data == 1){
                    alert('Data has been added');
                }
                else{
                    alert('Data failed  to delete');
                }
        })
        .catch(function (error){

        });

}







        //Delete Confrim Service
        $('#confirmServiceDelete').click(function (){
            let id =  $('#serviceHiddenInput').html();
           deleteServiceData(id);
        });

        //Delete Service Method
        function deleteServiceData(id){
            axios.post('/deleteServiceData',{
                id:id
            }).
            then(function (response){

                       if(response.data == 1){
                           alert('Data Successfully Deleted');
                       }
                       else{
                           alert('Data failed to delete');
                       }
            }).
            catch(function (error){

            })
        }

        //Populate Data in modal
        function populateData(id) {
            axios.post('/populateData', {
                id: id
            }).then(function (response) {
                if (response.status == 200) {
                    let result = response.data;

                    $('#populateNameId').val(result.service_name);
                    $('#populateDesId').val(result.service_des);
                    $('#populateServiceLink').val(result.service_link);
                    $('#populateImageLink').val(result.service_image);
                }
            }).catch(function () {
                alert('From Service data failed to retreieve');
            });
        }

        $('#updateServiceButton').click(function () {

            let id = $('#status').html();
            $('#confirmStatus').html(id);
            $('#editConfrimModal').modal('show');

        });
        $('#confirmUpdate').click(function () {
            let id = $('#confirmStatus').html();
            let updateName = $('#populateNameId').val();
            let updateDes = $('#populateDesId').val();
            let updateServiceLink = $('#populateServiceLink').val();
            let updateImageLink = $('#populateImageLink').val();
            updateServiceData(id, updateName, updateDes, updateServiceLink, updateImageLink);
        });

        //Update Service Data
        function updateServiceData(id, updateName, updateDes, updateServiceLink, updateImageLink) {
            axios.post('/updateServiceData', {
                id: id,
                updateName: updateName,
                updateDes: updateDes,
                updateServiceLink: updateServiceLink,
                updateImageLink: updateImageLink
            }).then(function (response) {
                if (response.status == 200) {
                    alert('Data updated Successfully');
                } else {
                    alert('Data failed to update');
                }
            })
                .catch(function (error) {

                });
        }

    }


</script>