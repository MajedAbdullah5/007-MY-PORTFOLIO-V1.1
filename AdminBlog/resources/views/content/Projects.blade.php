@extends('Layout.app')
@section('content')
    <table class="table-bordered" id="myTable">
        <a id="addProjectButton" class="btn btn-info">ADD PROJECT</a>
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
                    <h5 class="modal-title" id="exampleModalLabel">Update Project</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <h1 id="projectModalStatus"></h1>
                <div class="modal-body">
                    <h1 id="projectStatus" class="p-3"></h1>
                    <div id="header" class="mb-2"></div>
                    <input type="text" id="projectnameId" class="form-control mb-4" placeholder="Name" required>
                    <textarea id="projectdesId" class="form-control mb-4" placeholder="Desc" required></textarea>
                    <input type="text" id="projectLinkId" class="form-control mb-4" placeholder="Project link" required>
                    <label for="Updatefiles">Select Images:</label><br>
                    <input type="file" name="Updatefiles[]" id="Updatefiles" class="form-control mb-4" multiple required>
                    <img id="projectImageReview" src="{{asset('/image/loader/default-image.jpg')}}"
                         class="imagePreview">
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

    <div class="modal fade" id="deleteProjectConfrimModal" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalLabel"
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

    {{--Add project--}}
    <div class="modal fade" id="addProjectModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h5 class="modal-title" id="exampleModalLabel">Add Project</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <h1 id="addProjectModalStatus"></h1>
                <div class="modal-body">
                    <h1 id="projectStatus" class="p-3"></h1>
                    <div id="header" class="mb-2"></div>
                    <input type="text" id="addProjectName" class="form-control mb-4" placeholder="Name" required>
                    <textarea id="addProjectDes" class="form-control mb-4" placeholder="Desc" required></textarea>
                    <input type="text" id="addProjectLink" class="form-control mb-4" placeholder="Project link" required>
                    <label for="files">Select Images:</label><br>
                    <input type="file" id="files" name="files[]" multiple required/>
                    <img id="imagePreview" class="imagePreview" src="{{asset('/image/loader/default-image.jpg')}}">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                    <button id="addProjectModalButton" type="button" class="btn btn-primary btn-sm">Save</button>
                </div>
            </div>
        </div>
    </div>

    {{--    add confirm modal--}}
    <div class="modal fade" id="addProjectConfirmModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <h4 class="p-5">Are you sure?</h4>
                    <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
                    <button id="addProjectConfirmButton" type="button" class="btn btn-primary btn-sm">Yes</button>
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
    function getProjectsList() {
        axios.get('/getProjectsList').then(function (response) {
            if (response.status == 200) {
                let result = response.data;
                $.each(result, function (i) {
                    $('<tr>').html(
                        "<td>" + result[i].id + "</td>" +
                        "<td>" + result[i].project_name + "</td>" +
                        "<td>" + result[i].project_des + "</td>" +
                        "<td>" + result[i].project_link + "</td>" +
                        "<td>" + "<img height='100px' width='120px' src=" + result[i].project_image + " alt=''>" + "</td>" +
                        "<td>" + "<a data-id=" + result[i].id + " class='btn btn-primary btn-sm projectEditButton'>Edit<a/>" + "</td>" +
                        "<td>" + "<a data-id=" + result[i].id + " class='btn btn-danger btn-sm projectDeleteButton'>Delete</a>" + "</td>"
                    ).appendTo('#projectTableBody');
                });
                //Edit Button
                $('.projectEditButton').click(function () {
                    let id = $(this).data('id');
                    populateProjectData(id);
                    $('#projectModalStatus').html(id);
                    $('#projectEditModel').modal('show');
                });

                //DeleteButton
                $('.projectDeleteButton').click(function () {
                    let id = $(this).data('id');
                    $('#deleteProjectConfrimModal').modal('show');
                    $('#deleteProjectConfrimModalStatus').html(id);
                });
                $('#confirmProjectDeleteButton').click(function () {
                    let id = $('#deleteProjectConfrimModalStatus').html();
                    deleteService(id);
                });

                //Delete Service
                function deleteService(id) {
                    axios.post('/deleteService', {
                        id: id
                    }).then(function (response) {
                        if (response.data == 1) {
                            alert("Service has been deleted!");
                            $('#deleteProjectConfrimModal').modal('hide');
                        }
                    }).catch(function (error) {
                        $('#deleteProjectConfrimModal').modal('hide');
                        alert("Service failed to delete!");
                    });
                }

                $('#files').on('change', function () {
                    let file = new FileReader();
                    file.readAsDataURL(this.files[0]);
                    file.onload = function (event) {
                        let source = event.target.result;
                        $('#imagePreview').attr('src', source);
                    }
                });

                //Add project data
                $('#addProjectButton').click(function () {
                    $('#addProjectModal').modal('show');
                });
                $('#addProjectModalButton').click(function () {
                    $('#addProjectConfirmModal').modal('show');
                });
                $('#addProjectConfirmButton').click(function () {
                    let addProjectName = $('#addProjectName').val();
                    let addProjectDes = $('#addProjectDes').val();
                    let addProjectLink = $('#addProjectLink').val();
                    addProject(addProjectName, addProjectDes, addProjectLink);
                });

                function addProject(addProjectName, addProjectDes, addProjectLink) {
                    let formData = new FormData();
                    let files = $('#files').prop('files');
                    if (files.length > 11 || files.length < 11) {
                        alert('Please select 11 images.');
                        $('#addProjectConfirmModal').modal('hide');
                    } else {
                        for (let i = 0; i < files.length; i++) {
                            formData.append('files[]', files[i]);
                        }

                        formData.append('addProjectName', addProjectName);
                        formData.append('addProjectDes', addProjectDes);
                        formData.append('addProjectLink', addProjectLink);
                        let config = {
                            headers: {
                                'content-type': 'multipart/form-data'
                            }
                        };
                        axios.post('/addProject', formData, config).then(function (response) {
                            if (response.data == 1) {
                                alert('Project has been added!');
                                $('#addProjectConfirmModal').modal('hide');
                                $('#addProjectModal').modal('hide');

                            } else {
                                alert('Project failed to add!');
                                $('#addProjectConfirmModal').modal('hide');
                                $('#addProjectModal').modal('hide');

                            }
                        }).catch(function () {

                        });
                    }
                }

                //Update project data
                $('#updateProjectButton').click(function () {
                    let id = $('#projectModalStatus').html();
                    $('#editProjectConfrimModalStatus').html(id);
                    $('#editProjectConfrimModal').modal('show');
                });
                $('#confirmProjectChangeButton').click(function () {
                    let id = $('#projectModalStatus').html();
                    $('#editProjectConfrimModalStatus').html(id);
                    let projectnameId = $('#projectnameId').val();
                    let projectdesId = $('#projectdesId').val();
                    let projectLinkId = $('#projectLinkId').val();
                    updateProjectData(id, projectnameId, projectdesId, projectLinkId);

                });

                function updateProjectData(id, projectnameId, projectdesId, projectLinkId) {

                    let formData = new FormData();
                    let file = $('#Updatefiles').prop('files');
                    if (file.length > 11 || file.length < 11) {
                        alert("Please select 11 images.");
                        $('#editProjectConfrimModal').modal('hide');
                    } else {
                        for (let i = 0; i < file.length; i++) {
                            formData.append('Updatefiles[]', file[i]);
                        }
                        formData.append('id', id);
                        formData.append('projectnameId', projectnameId);
                        formData.append('projectdesId', projectdesId);
                        formData.append('projectLinkId', projectLinkId);
                        let config = {
                            headers: {
                                'content-type': 'multipart/form-data'
                            }
                        }
                        axios.post('/updateProjectData', formData, config).then(function (response) {
                            if (response.data == 1) {
                                $('#editProjectConfrimModal').modal('hide');
                                $('#projectEditModel').modal('hide');
                                alert("Data has been updated!");
                            } else {
                                $('#editProjectConfrimModal').modal('hide');
                                $('#projectEditModel').modal('hide');
                                alert("Data failed to update!");
                            }
                        }).catch(function () {

                        });
                    }
                }

                //image review
                $('#Updatefiles').change(function () {
                    let reader = new FileReader();
                    reader.readAsDataURL(this.files[0]);
                    reader.onload = function (event) {
                        let source = event.target.result;
                        $('#projectImageReview').attr('src', source);
                    }
                });


                //Populate Data
                function populateProjectData(id) {
                    axios.post('/populateProjectData', {
                        id: id
                    }).then(function (response) {
                        if (response.status == 200) {
                            let result = response.data;
                            $('#projectnameId').val(result.project_name);
                            $('#projectdesId').val(result.project_des);
                            $('#projectLinkId').val(result.project_link);
                            $('#projectImageReview').attr('src', result.project_image);
                        } else {
                            alert('data failed to fetch');
                        }
                    }).catch(function (error) {

                    });
                }

            }
            //table pagination
            $(document).ready(function () {
                $('#myTable').DataTable();
                $('.dataTables_length').addClass('bs-select');
            });
        }).catch(function () {

        });
    }
</script>
