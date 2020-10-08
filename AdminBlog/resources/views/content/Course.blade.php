@extends('Layout.app')
@section('content')
    <table id="myTable" class="table-bordered">
        <a id="addCourses" class="btn btn-info">ADD Courses</a>
        <thead>
        <th>ID</th>
        <th>NAME</th>
        <th>DESCRIPTION</th>
        <th>COURSE FEE</th>
        <th>TOTAL CLASS</th>
        <th>TOTAL ENROLL</th>
        <th>IMAGE</th>
        <th>LINK</th>
        <th>EDIT</th>
        <th>DELETE</th>
        </thead>
        <tbody id="courseTableBody">

        </tbody>
    </table>


    {{--Edit Modal--}}
    <div class="modal fade" id="courseEditModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <h1 id="editId"></h1>
                <div class="modal-body">
                    <h1 id="courseStatus" class="p-3"></h1>
                    <div id="header" class="mb-2"></div>
                    <div class="row p-3">
                        <div class="col col-md-6">
                            <input type="text" id="courseName" class="form-control mb-4" placeholder="Name">
                            <input type="text" id="courseFee" class="form-control mb-4" placeholder="Fee">
                            <input type="text" id="courseTotalClass" class="form-control mb-4"
                                   placeholder="Total Class">
                        </div>
                        <div class="col col-md-6">
                            <input type="text" id="courseEnroll" class="form-control mb-4" placeholder="Enroll">
                            <input type="text" id="courseLink" class="form-control mb-4" placeholder="Link">
                        </div>
                        <textarea id="courseDescription" class="form-control mb-4 "
                                  placeholder="Description"></textarea>
                        <input type="file" id="courseEditImage" class="form-control mb-4">
                        <img id="courseEditImagePreview" src="{{asset('/image/loader/default-image.jpg')}}" class="imagePreview" alt="">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                    <button id="courseUpdateButton" type="button" class="btn btn-primary btn-sm">Save</button>
                </div>
            </div>
        </div>
    </div>


    <!--Edit Confirm Modal -->

    <div class="modal fade" id="courseConfirmModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <h4 id="courseConfirmStatus"></h4>
                    <h4 class="p-5">Do you want to Change?</h4>
                    <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
                    <button id="courseConfirmButton" type="button" class="btn btn-primary btn-sm">Yes</button>
                </div>
            </div>
        </div>
    </div>

    {{--delete confrim modal--}}
    <div class="modal fade" id="courseDeleteConfrimModel" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <input id="hiddenInput" type="hidden"/>
            <div class="modal-content">
                <div class="modal-body text-center">
                    <h4 id="courseDeleteModelStatus"></h4>
                    <h4 class="p-5">Do you want to Delete?</h4>
                    <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">No</button>
                    <button id="courseDeleteConfirmButton" type="button" class="btn btn-danger btn-sm">Yes</button>
                </div>
            </div>
        </div>
    </div>

    {{--    Add modal--}}
    <div class="modal fade" id="addCoursesModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h5 class="modal-title" id="exampleModalLabel">Add New</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <h1 id="addCoursesStatus"></h1>
                <div class="modal-body">
                    <h1 id="status" class="p-3"></h1>
                    <div id="header" class="mb-2"></div>
                    <div class="row p-3">
                        <div class="col col-md-6">
                            <input type="text" id="addCourseName" class="form-control mb-4" placeholder="Name"/>
                            <input type="text" id="addCourseFee" class="form-control mb-4" placeholder="Fee"/>
                            <input type="text" id="addCourseTotalClass" class="form-control mb-4"
                                   placeholder="Total Class"/>
                        </div>

                        <div class="col col-md-6">
                            <input type="text" id="addCourseTotalEnroll" class="form-control mb-4"
                                   placeholder="Total Enroll"/>
                            <input type="text" id="addCourseLink" class="form-control mb-4" placeholder="Course Link"/>
                        </div>
                        <textarea id="addCoursesDescription" class="form-control mb-4" placeholder="Desc"></textarea>
                        <input type="file" id="addCourseImage" class="form-control mb-4">
                        <img id="addImagePreview" class="imagePreview"
                             src="{{asset('/image/loader/default-image.jpg')}}">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                    <button id="addCoursesButton" type="button" class="btn btn-primary btn-sm">Add</button>
                </div>
            </div>
        </div>
    </div>

    {{--    add confirm modal--}}
    <div class="modal fade" id="addCourseConfirmModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <h4 class="p-5">Are you sure?</h4>
                    <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
                    <button id="addCoursesConfirmButton" type="button" class="btn btn-primary btn-sm">Yes</button>
                </div>
            </div>
        </div>
    </div>
@endsection

<script>
    //Get Courses List
    function getCourseList() {
        axios.get('/getCourseList').then(function (response) {
            if (response.status == 200) {
                let result = response.data;
                $.each(result, function (i) {
                    $('<tr>').html(
                        "<td>" + result[i].id + "</td>" +
                        "<td>" + result[i].course_name + "</td>" +
                        "<td>" + result[i].course_des + "</td>" +
                        "<td>" + result[i].course_fee + "</td>" +
                        "<td>" + result[i].course_total_class + "</td>" +
                        "<td>" + result[i].course_total_enroll + "</td>" +
                        "<td>" +"<img height='100px' width='120px' src="+result[i].course_image+" alt=''>" + "</td>" +
                        "<td>" + result[i].course_link + "</td>" +
                        "<td>" + "<a data-id=" + result[i].id + " class='btn btn-primary btn-sm courseEditButton'   >Edit</a>" + "</td>" +
                        "<td>" + "<a data-id=" + result[i].id + " class='btn btn-danger btn-sm courseDeleteButton'  >Delete</a>" + "</td>"
                    ).appendTo('#courseTableBody');
                });
                //Course Edit
                $('.courseEditButton').click(function () {
                    let id = $(this).data('id');
                    $('#courseStatus').html(id);
                    populateCourseId(id);
                    $('#courseEditModal').modal('show');
                });

                //Course Delete
                $('.courseDeleteButton').click(function () {
                    let id = $(this).data('id');
                    $('#courseDeleteModelStatus').html(id);
                    $('#courseDeleteConfrimModel').modal('show');
                });

                    // $('#myTable').DataTable();
                    // $('.dataTables_length').addClass('bs-select');

            }
        }).catch(function (error) {
            alert("Server Error!");
        });
        //Add Courses
        $('#addCourses').click(function () {
            $('#addCoursesModal').modal('show');
        });
        $('#addCoursesButton').click(function () {
            $('#addCourseConfirmModal').modal('show');
        });
        //Image preview
        $('#addCourseImage').change(function () {
            let reader = new FileReader();
            reader.readAsDataURL(this.files[0]);
            reader.onload = function (event) {
                let src = event.target.result;
                $('#addImagePreview').attr('src', src);
            }
        });

        $('#addCoursesConfirmButton').click(function () {
            let addCourseName = $('#addCourseName').val();
            let addCourseFee = $('#addCourseFee').val();
            let addCourseTotalClass = $('#addCourseTotalClass').val();
            let addCourseTotalEnroll = $('#addCourseTotalEnroll').val();
            let addCourseLink = $('#addCourseLink').val();
            let addCourseImage = $('#addCourseImage').val();
            let addCoursesDescription = $('#addCoursesDescription').val();
            addCoursesData(addCourseName, addCourseFee, addCourseTotalClass, addCourseTotalEnroll, addCourseLink, addCourseImage, addCoursesDescription);
        });


        function addCoursesData(addCourseName, addCourseFee, addCourseTotalClass, addCourseTotalEnroll, addCourseLink, addCourseImage, addCoursesDescription) {
            let file = $('#addCourseImage').prop('files')[0];
            let formData = new FormData();
            formData.append('file', file);
            formData.append('addCourseName', addCourseName);
            formData.append('addCourseFee', addCourseFee);
            formData.append('addCourseTotalClass', addCourseTotalClass);
            formData.append('addCourseTotalEnroll', addCourseTotalEnroll);
            formData.append('addCourseLink', addCourseLink);
            formData.append('addCourseImage', addCourseImage);
            formData.append('addCoursesDescription', addCoursesDescription);
            let config = {
                header: {
                    'content-type': 'multipart/form-data'
                }
            };
            axios.post('/addCoursesData', formData, config).then(function (response) {
                if (response.data == 1) {
                    $('#addCourseConfirmModal').modal('hide');
                    $('#addCoursesModal').modal('hide');
                    alert("Course Successfully Added!")
                } else {
                    $('#addCourseConfirmModal').modal('hide');
                    $('#addCoursesModal').modal('hide');
                    alert("Course failed to Add!")
                }
            }).catch(function (error) {
                alert("Server Error!");
            });
        }

        // Delete Courses
        $('#courseDeleteConfirmButton').click(function () {
            let id = $('#courseDeleteModelStatus').html();
            courseDelete(id);
        });

        function courseDelete(id) {
            axios.post('/courseDelete', {
                id: id
            }).then(function (response) {
                if (response.data == 1) {
                    $('#courseDeleteConfrimModel').modal('hide');
                    alert('Data has been deleted!');
                } else {
                    $('#courseDeleteConfrimModel').modal('hide');
                    alert('Data failed to delete!');
                }
            }).catch(function (error) {
                alert("Server Error!");
            });
        }

        //populate data
        function populateCourseId(id) {
            axios.post('/populateCourseId', {
                id: id
            }).then(function (response) {
                if (response.status == 200) {
                    let result = response.data;
                    $('#courseName').val(result.course_name);
                    $('#courseFee').val(result.course_fee);
                    $('#courseTotalClass').val(result.course_total_class);
                    $('#courseEnroll').val(result.course_total_enroll);
                    $('#courseLink').val(result.course_link);
                    $('#courseEditImagePreview').attr('src',result.course_image);
                    $('#courseDescription').val(result.course_des);
                }
            }).catch(function (error) {
                    alert("Server Error!")
            });
        }
        $('#courseEditImage').change(function(){
            let fileReader = new FileReader();
            fileReader.readAsDataURL(this.files[0]);
            fileReader.onload = function (event){
               let source  = event.target.result;
               $('#courseEditImagePreview').attr('src',source);
            }
        });

        $('#courseUpdateButton').click(function () {
            let id = $('#courseStatus').html();
            $('#courseConfirmStatus').html(id);
            $('#courseConfirmModal').modal('show');
        });
        $('#courseConfirmButton').click(function () {
            let id = $('#courseConfirmStatus').html();
            let courseName = $('#courseName').val();
            let courseFee = $('#courseFee').val();
            let courseTotalClass = $('#courseTotalClass').val();
            let courseEnroll = $('#courseEnroll').val();
            let courseLink = $('#courseLink').val();
            let courseDescription = $('#courseDescription').val();
            updateCourseData(id, courseName, courseFee, courseTotalClass, courseEnroll, courseLink, courseDescription);
        });

        function updateCourseData(id, courseName, courseFee, courseTotalClass, courseEnroll, courseLink, courseDescription) {
            let file = $('#courseEditImage').prop('files')[0];
            let formData = new FormData();
            formData.append('id',id);
            formData.append('file',file);
            formData.append('courseName',courseName);
            formData.append('courseFee',courseFee);
            formData.append('courseTotalClass',courseTotalClass);
            formData.append('courseEnroll',courseEnroll);
            formData.append('courseLink',courseLink);
            formData.append('courseDescription',courseDescription);
            let config = {
                headers:{'content-type':'multipart/form-data'}
            };
            axios.post('/updateCourseData',formData,config).
            then(function (response) {
                console.log(response.data);
                if (response.data == 1) {
                    $('#courseConfirmModal').modal('hide');
                    $('#courseEditModal').modal('hide');
                    alert('Data Updated Successfully!');
                }
            }).catch(function (error) {
                $('#courseConfirmModal').modal('hide');
                $('#courseEditModal').modal('hide');
                alert('Data failed to update!');
            });
        }
    }
</script>
@section('script')
    <script>
        getCourseList();
    </script>
@endsection
