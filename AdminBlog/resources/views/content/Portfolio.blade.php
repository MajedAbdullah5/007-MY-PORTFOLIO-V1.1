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
    {{---------------------------------------------------EDUCATION-------------------------------------------}}


    {{--start education part here--}}




@endsection
@section('script')
    <script>
        getObjetiveList();
    </script>
@endsection
<script>


    // ---------------------------------------------CAREER OBJECTIVES -----------------------------------

    function getObjetiveList() {
        axios.get('/getObjetiveList').then(function (response) {
            if (response.status == 200) {
                let result = response.data;
                $("<tr>").html(
                    "<td class='p-3'>" + result.objectives + "</td>" +
                    "<td>" + "<a data-id=" + result.id + " id='careerObjectives' class='btn btn-outline-deep-purple'>Update</a>" + "</td>"
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
