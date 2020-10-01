@extends('Layout.app')
@section('content')
    <table class="table-bordered" id="myTable">
        <thead>
            <th>ID</th>
            <th>NAME</th>
            <th>DESCRIPTION</th>
            <th>LINK</th>
            <th>IMAGE</th>
            <th>EDIT</th>
            <th>DELETE</th>
        </thead>
        <tbody id="projectTableBody">
        </tbody>
    </table>

{{--project edit model--}}

    <div class="modal fade" id="projectEditModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <h1 id="projectModalStatus"></h1>
                <div class="modal-body">
                    <h1 id="projectStatus" class="p-3"></h1>
                    <div id="header" class="mb-2"></div>
                    <input type="text" id="projectnameId" class="form-control mb-4" placeholder="Name">
                    <textarea          id="projectdesId" class="form-control mb-4" placeholder="Desc"></textarea>
                    <input type="text" id="projectLinkId" class="form-control mb-4" placeholder="Project link">
                    <input type="text" id="projectimageLinkId" class="form-control mb-4" placeholder="Image link">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                    <button id="updateProjectButton" type="button" class="btn btn-primary btn-sm">Save</button>
                </div>
            </div>
        </div>
    </div>

    <!--Edit Confirm Modal -->

    <div class="modal fade" id="editProjectConfrimModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <h2 id="editProjectConfrimModalStatus"></h2>
                    <h4 class="p-5">Do you want to Change?</h4>
                    <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
                    <button id="confirmProjectChangeButton" type="button" class="btn btn-primary btn-sm">Yes</button>
                </div>
            </div>
        </div>
    </div>
    <!--delete Confirm Modal -->

    <div class="modal fade" id="deleteProjectConfrimModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <h2 id="deleteProjectConfrimModalStatus"></h2>
                    <h4 class="p-5">Do you want to Delete?</h4>
                    <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">No</button>
                    <button id="confirmProjectDeleteButton" type="button" class="btn btn-primary btn-sm">Yes</button>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        getProjectsList();
    </script>
@endsection
<script>
    function getProjectsList(){
        axios.get('/getProjectsList').
        then(function(response){
            if(response.status == 200){
                let result = response.data;
                $.each(result,function (i){
                    $('<tr>').html(
                        "<td>"+result[i].id+"</td>"+
                        "<td>"+result[i].project_name+"</td>"+
                        "<td>"+result[i].project_des+"</td>"+
                        "<td>"+result[i].project_link+"</td>"+
                        "<td>"+result[i].project_image+"</td>"+
                        "<td>"+"<a data-id="+result[i].id+" class='btn btn-primary btn-sm projectEditButton'>Edit<a/>"+"</td>"+
                        "<td>"+"<a data-id="+result[i].id+" class='btn btn-danger btn-sm projectDeleteButton'>Delete</a>"+"</td>"
                    ).appendTo('#projectTableBody');
                });
                //Edit Button
                $('.projectEditButton').click(function (){
                    let id = $(this).data('id');
                    populateProjectData(id);
                    $('#projectModalStatus').html(id);
                    $('#projectEditModel').modal('show');
                });

                //DeleteButton
                $('.projectDeleteButton').click(function (){
                   let id = $(this).data('id');
                   $('#deleteProjectConfrimModal').modal('show');
                   $('#deleteProjectConfrimModalStatus').html(id);
                });
                $('#confirmProjectDeleteButton').click(function (){
                    let id = $('#deleteProjectConfrimModalStatus').html();
                    deleteService(id);
                });
                //Delete Service
                function deleteService(id){
                    axios.post('/deleteService',{
                        id:id
                    }).
                    then(function(response){
                       if(response.data == 1){
                           alert("Service has been deleted!");
                       }
                    }).catch(function(error){
                        alert("Service failed to delete!");
                    });
                }








                //Update project data
                $('#updateProjectButton').click(function (){
                    let id = $('#projectModalStatus').html();
                    $('#editProjectConfrimModalStatus').html(id);
                    $('#editProjectConfrimModal').modal('show');
                });
                $('#confirmProjectChangeButton').click(function (){


                    let id = $('#projectModalStatus').html();
                    $('#editProjectConfrimModalStatus').html(id);
                    let projectnameId= $('#projectnameId').val();
                    let projectdesId= $('#projectdesId').val();
                    let projectLinkId= $('#projectLinkId').val();
                    let projectimageLinkId= $('#projectimageLinkId').val();
                    updateProjectData(id,projectnameId,projectdesId,projectLinkId,projectimageLinkId);

                });

                function updateProjectData(id,projectnameId,projectdesId,projectLinkId,projectimageLinkId){
                    axios.post('/updateProjectData',{
                        id:id,
                        projectnameId:projectnameId,
                        projectdesId:projectdesId,
                        projectLinkId:projectLinkId,
                        projectimageLinkId:projectimageLinkId
                    }).
                    then(function(response){
                        if(response.status== 200){
                            alert("Data has been updated!");
                        }
                        else{
                            alert("Data failed to update!");
                        }
                    }).catch(function(){

                    });
                }












                //Populate Data
                function populateProjectData(id){
                    axios.post('/populateProjectData',{
                        id:id
                    }).then(function(response){
                        if(response.status == 200){
                            let result = response.data;
                            $('#projectnameId').val(result.project_name);
                            $('#projectdesId').val(result.project_des);
                            $('#projectLinkId').val(result.project_link);
                            $('#projectimageLinkId').val(result.project_image);
                        }
                        else{
                            alert('data failed to fetch');
                        }
                    }).catch(function(error){

                    });
                }

            }
        }).
        catch(function(){

        });
    }
</script>
