@extends('Layout.app')
@section('content')

    {{----------------------------------------------CAREER OBJECTIVES---------------------------------------------}}


    <table id="myTable" class="table-bordered ">
        <h6 class="p-3" style="font-weight: bold;">CAREER OBJECTIVES</h6>
        <thead>
        <th>OBJECTIVES</th>
        <th>UPDATE</th>
        </thead>
        <tbody id="myObjectiveTableBody">
        </tbody>
    </table>

    {{--Populate Objectives--}}
    <div class="modal fade" id="populateObjectives" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                    <h1 id="objectiveStatus" class="p-3"></h1>
                    <div id="header" class="mb-2"></div>
                    <textarea type="text" style="min-height: 200px;" id="objectivesId" class="form-control mb-4"
                              placeholder="Type your career objectives here..."></textarea>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                    <button id="populateObjectivesButton" type="button" class="btn btn-primary btn-sm">Save</button>
                </div>
            </div>
        </div>
    </div>

    <!--Edit Confirm Modal -->

    <div class="modal fade" id="objectiveUpdateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <h4 class="p-5">Do you want to Change?</h4>
                    <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
                    <button id="objectiveUpdateButton" type="button" class="btn btn-primary btn-sm">Yes</button>
                </div>
            </div>
        </div>
    </div>
    {{------------------------------------------EDUCATION-------------------------------------------}}

    <table id="myTable" class="table-bordered">
        <h6 class="pt-5" style="font-weight: bold;">EDUCATION</h6>
        <h6 class="p-3"><a id="addEducationButton" class="btn btn-outline-deep-purple">ADD EDUCATION</a></h6>
        <thead>
        <th>DURATION</th>
        <th>INSTITUTE</th>
        <th>CERTIFICATE</th>
        <th>MAJOR</th>
        <th>CGPA</th>
        <th>EDUCATION BOARD</th>
        <th>EDIT</th>
        <th>DELETE</th>
        </thead>
        <tbody id="educationTableBody">
        </tbody>
    </table>



    {{--Education Edit Modal--}}
    <div class="modal fade" id="eduacationEditModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                    <h1 id="eduacationEditStatus" class="p-3"></h1>
                    <div id="header" class="mb-2"></div>
                    <input type="text" id="educationDuration" class="form-control mb-4"
                           placeholder="Education duration (ex:Since 2017-2019)">
                    <input type="text" id="educationInstitute" class="form-control mb-4"
                           placeholder="Education institute (ex:Govt. Iqbal Memorial College)">
                    <input type="text" id="educationCertificate" class="form-control mb-4"
                           placeholder="Education certificate (ex:Higher Secondary Certificate)">
                    <input type="text" id="educationMajor" class="form-control mb-4"
                           placeholder="Education major (ex:Group of science)">
                    <input type="text" id="educationCgpa" class="form-control mb-4"
                           placeholder="CGPA (ex:GPA 3.78 out of 5)">
                    <input type="text" id="educationBoard" class="form-control mb-4"
                           placeholder="Education board (ex:Higher Board of Comilla)">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                    <button id="eduacationEditButton" type="button" class="btn btn-primary btn-sm">Save</button>
                </div>
            </div>
        </div>
    </div>

    <!--Education Edit Confirm Modal -->
    <div class="modal fade" id="educationUpdateConfirmModal" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <h3 id="educationUpdateConfirmModalStatus"></h3>
                    <h4 class="p-5">Do you want to Change?</h4>
                    <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
                    <button id="educationUpdateConfirmButton" type="button" class="btn btn-primary btn-sm">Yes</button>
                </div>
            </div>
        </div>
    </div>



    {{--delete confrim modal--}}
    <div class="modal fade" id="educationDeleteConfirmModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <h2 id="educationDeleteConfirmModalStatus" ></h2>
            <div class="modal-content">
                <div class="modal-body text-center">
                    <h4 class="p-5">Do you want to Delete?</h4>
                    <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">No</button>
                    <button id="educationDeleteConfirmButton" type="button" class="btn btn-danger btn-sm">Yes</button>
                </div>
            </div>
        </div>
    </div>

    {{--Education Add Modal--}}
    <div class="modal fade" id="educationAddModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                    <h1 id="educationAddModalStatus" class="p-3"></h1>
                    <div id="header" class="mb-2"></div>
                    <input type="text" id="educationAddDuration" class="form-control mb-4"
                           placeholder="Education duration (ex:Since 2017-2019)">
                    <input type="text" id="educationAddInstitute" class="form-control mb-4"
                           placeholder="Education institute (ex:Govt. Iqbal Memorial College)">
                    <input type="text" id="educationAddCertificate" class="form-control mb-4"
                           placeholder="Education certificate (ex:Higher Secondary Certificate)">
                    <input type="text" id="educationAddMajor" class="form-control mb-4"
                           placeholder="Education major (ex:Group of science)">
                    <input type="text" id="educationAddCgpa" class="form-control mb-4"
                           placeholder="CGPA (ex:GPA 3.78 out of 5)">
                    <input type="text" id="educationAddBoard" class="form-control mb-4"
                           placeholder="Education board (ex:Higher Board of Comilla)">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                    <button id="educationAddButton" type="button" class="btn btn-primary btn-sm">Save</button>
                </div>
            </div>
        </div>
    </div>

    {{--    add confirm modal--}}
    <div class="modal fade" id="addConfrimModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <h4 class="p-5">Are you sure?</h4>
                    <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
                    <button id="addConfirmButton" type="button" class="btn btn-primary btn-sm">Yes</button>
                </div>
            </div>
        </div>
    </div>
{{---------------------------------------------LANGUAGE-------------------------------------------}}
    <table id="myTable" class="table-bordered">
        <h6 class="pt-5" style="font-weight: bold;">LANGUAGE</h6>
        <h6 class="p-3"><a id="addLanguageButton" class="btn btn-outline-deep-purple">ADD LANGUAGE</a></h6>
        <thead>
        <th>LANGUAGE</th>
        <th>SELECT PROFICIENCY</th>
        <th>EDIT</th>
        <th>DELETE</th>
        </thead>
        <tbody id="languageTableBody">
        </tbody>
    </table>





@endsection
@section('script')
    <script>
        getObjetiveList();
        getEducationList();
        getLanguageList();
    </script>
@endsection
<script>
    // --------------------------------------------LANGUAGE-------------------------------------------
function getLanguageList(){
    axios.get('/getLanguageList').
    then(function(response){
        console.log(response.data);

    }).catch(function(){

    });
}









    // ---------------------------------------------EDUCATION-------------------------------------------
    function getEducationList() {
        axios.get('/getEducationList').then(function (response) {
            if (response.status == 200) {
                let result = response.data;
                $.each(result, function (i) {
                    $("<tr>").html(
                        "<td>" + result[i].education_duration + "</td>" +
                        "<td>" + result[i].education_institute + "</td>" +
                        "<td>" + result[i].education_certificate + "</td>" +
                        "<td>" + result[i].education_major + "</td>" +
                        "<td>" + result[i].education_gpa + "</td>" +
                        "<td>" + result[i].education_board + "</td>" +
                        "<td>" + "<a data-id=" + result[i].id + " class='btn btn-outline-info btn-sm educationEditButton'>Edit</a>" + "</td>" +
                        "<td>" + "<a data-id=" + result[i].id+  " class='btn btn-outline-danger btn-sm educationDeleteButton'>Delete</a>" + "</td>"
                    ).appendTo('#educationTableBody');
                });
                //Delete Button
                $('.educationDeleteButton').click(function (){
                    let id = $(this).data('id');
                    $('#educationDeleteConfirmModalStatus').html(id);
                    $('#educationDeleteConfirmModal').modal('show');
                });
                $('#educationDeleteConfirmButton').click(function (){
                  let id = $('#educationDeleteConfirmModalStatus').html();
                  deleteEducation(id);
                });

                //Edit Button
                $('.educationEditButton').click(function () {
                    let id = $(this).data('id');
                    $('#eduacationEditStatus').html(id);
                    $('#eduacationEditModal').modal('show');
                    populateEducationId(id);
                });
                $('#eduacationEditButton').click(function () {
                    let id = $('#eduacationEditStatus').html();
                    $('#educationUpdateConfirmModalStatus').html(id);
                    $('#educationUpdateConfirmModal').modal('show');
                });

                $('#educationUpdateConfirmButton').click(function () {
                    let id = $('#educationUpdateConfirmModalStatus').html();
                    let educationDuration = $('#educationDuration').val();
                    let educationInstitute = $('#educationInstitute').val();
                    let educationCertificate = $('#educationCertificate').val();
                    let educationMajor = $('#educationMajor').val();
                    let educationCgpa = $('#educationCgpa').val();
                    let educationBoard = $('#educationBoard').val();
                    educationUpdate(id, educationDuration, educationInstitute, educationCertificate, educationMajor, educationCgpa, educationBoard);
                });

                //Add Education Button
                $('#addEducationButton').click(function (){
                    $('#educationAddModal').modal('show');
                });
                $('#educationAddButton').click(function (){
                    $('#addConfrimModal').modal('show');
                });
                $('#addConfirmButton').click(function (){
                    let educationDuration = $('#educationAddDuration').val();
                    let educationInstitute = $('#educationAddInstitute').val();
                    let educationCertificate = $('#educationAddCertificate').val();
                    let educationMajor = $('#educationAddMajor').val();
                    let educationCgpa = $('#educationAddCgpa').val();
                    let educationBoard = $('#educationAddBoard').val();
                    addEducation(educationDuration,educationInstitute,educationCertificate,educationMajor,educationCgpa,educationBoard);
                });
            }
        }).catch(function () {

        });
    }
    //Add Education
    function addEducation(educationDuration,educationInstitute,educationCertificate,educationMajor,educationCgpa,educationBoard){
        axios.post('/addEducation',{
            educationDuration:educationDuration,
            educationInstitute:educationInstitute,
            educationCertificate:educationCertificate,
            educationMajor:educationMajor,
            educationCgpa:educationCgpa,
            educationBoard:educationBoard
        }).
        then(function (response){
            if(response.data ==1 ){
                alert('Data Added successfully!');
            }
            else{
                alert('Data failed to add!');
            }
        }).catch(function (){

        });
    }






//Delete Education
    function deleteEducation(id){
        axios.post('/deleteEducation',{
            id:id
        }).
        then(function(response){
            if(response.data ==1 ){
                alert('Data deleted successfully!');
            }
            else{
                alert('Data failed to delete!');
            }

        }).catch(function(){

        });
    }

    //Education update
    function educationUpdate(id, educationDuration, educationInstitute, educationCertificate, educationMajor, educationCgpa, educationBoard) {
        axios.post('/educationUpdate', {
            id: id,
            educationDuration: educationDuration,
            educationInstitute: educationInstitute,
            educationCertificate: educationCertificate,
            educationMajor: educationMajor,
            educationCgpa: educationCgpa,
            educationBoard: educationBoard

        }).then(function (response) {
            console.log(response.data);
        }).catch(function () {

        });
    }


    function populateEducationId(id) {
        axios.post('/populateEducationId', {
            id: id
        }).then(function (response) {
            let result = response.data;
            if (response.status == 200) {
                $('#educationDuration').val(result.education_duration);
                $('#educationInstitute').val(result.education_institute);
                $('#educationCertificate').val(result.education_certificate);
                $('#educationMajor').val(result.education_major);
                $('#educationCgpa').val(result.education_gpa);
                $('#educationBoard').val(result.education_board);
            }
        }).catch(function () {

        });
    }

    // ---------------------------------------------CAREER OBJECTIVES -----------------------------------

    function getObjetiveList() {
        axios.get('/getObjetiveList').then(function (response) {
            if (response.status == 200) {
                let result = response.data;
                $("<tr>").html(
                    "<td class='p-3'>" + result.objectives + "</td>" +
                    "<td>" + "<a data-id=" + result.id + " id='careerObjectives' class='btn btn-outline-info'>Update</a>" + "</td>"
                ).appendTo('#myObjectiveTableBody');

                //Populate Button
                $('#careerObjectives').click(function () {
                    let id = $(this).data('id');
                    $('#objectiveStatus').html(id);
                    populateObjectives(id);
                    $('#populateObjectives').modal('show');
                });

                //Update Button
                $('#populateObjectivesButton').click(function () {
                    $('#objectiveUpdateModal').modal('show');
                });
                $('#objectiveUpdateButton').click(function () {
                    let id = $('#objectiveStatus').html();
                    let objectives = $('#objectivesId').val();
                    updateObjectives(id, objectives);
                });
            }
        }).catch(function (error) {

        });
    }

    //Update Button
    function updateObjectives(id, objectives) {
        axios.post('/updateObjectives', {
            id: id,
            objectives: objectives
        }).then(function (response) {
            if (response.data == 1) {
                alert('Data has been updated successfully!');
            } else {
                alert('Data failed to update!');
            }

        }).catch(function () {

        });
    }

    //populate Objectives
    function populateObjectives(id) {
        axios.post('/populateObjectives', {id: id}).then(function (response) {
            if (response.status == 200) {
                let result = response.data;
                $('#objectivesId').val(result.objectives);
            }
        }).catch(function () {

        });
    }

    // --------------------------------------END CAREER OBJECTIVES------------------------------------------
</script>
