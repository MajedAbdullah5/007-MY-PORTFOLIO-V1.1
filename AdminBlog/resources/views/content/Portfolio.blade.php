@extends('Layout.app')
@section('content')
    {{--    ---------------------------------------------------PROFILE PICTURE-------------------------------}}
    <h6 class="p-3" style="font-weight: bold;">UPDATE PROFILE PICTURE</h6>
    <table id="myTable" class="table-bordered">
        <thead>
        <th>PHOTO</th>
        <th>ACTION</th>
        </thead>
        <tbody id="profilePictureTableBody">
        </tbody>
    </table>

    {{--    populate profile picture Modal --}}
    <div class="modal fade" id="updateProfilePictureModal" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h5 class="modal-title" id="exampleModalLabel">Update Profile Picture</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <h1 id="editId"></h1>
                <div class="modal-body">
                    <h1 id="updateProfilePictureModalStatus" class="p-3"></h1>
                    <div id="header" class="mb-2"></div>

                    <input type="file" id="updateProfilePicture" class="form-control mb-4"/>
                    <img id="updateProfilePicturePreview" src="{{asset('/image/loader/default-image.jpg')}}"
                         class="imagePreview">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                    <button id="updateProfilePictureModalButton" type="button" class="btn btn-primary btn-sm">
                        Save
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!--profile picture update Confirm Modal -->
    <div class="modal fade" id="profilePictureUpdateConfirmModal" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <h1 id="profilePictureUpdateConfirmModalStatus"></h1>
                    <h4 class="p-5">Do you want to Change?</h4>
                    <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
                    <button id="profilePictureUpdateConfirmModalButton" type="button" class="btn btn-primary btn-sm">
                        Yes
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- ------------------------------------------------------EMERGENCY CONTACT---------------------------------------- -->
    <table id="myTable" class="table-bordered ">
        <h6 class="p-3" style="font-weight: bold;">EMERGENCY CONTACT</h6>
        <h6 class="p-3"><a id="addContactButton" class="btn btn-outline-deep-purple">ADD EMERGENCY CONTACT</a></h6>
        <thead>
        <th>CONTACT STATUS</th>
        <th>INFORMATION</th>
        <th>EDIT</th>
        <th>DELETE</th>
        </thead>
        <tbody id="emergencyContactTableBody">
        </tbody>
    </table>
    <!-- contact populate modal -->
    <div class="modal fade" id="contactPopulateModal" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalLabel"
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
                    <h1 id="contactPopulateModalStatus" class="p-3"></h1>
                    <div id="header" class="mb-2"></div>

                    <input type="text" id="contactStatus" class="form-control mb-4"
                           placeholder="Contact Status (ex:Phone)"/>
                    <textarea type="text" id="contactInformation" class="form-control mb-4"
                              placeholder="Type Address (ex:01890312202)"></textarea>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                    <button id="contactPopulateModalButton" type="button" class="btn btn-primary btn-sm">
                        Save
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!--contact update Confirm Modal -->
    <div class="modal fade" id="contactUpdateConfirmModal" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <h1 id="contactUpdateConfirmModalStatus"></h1>
                    <h4 class="p-5">Do you want to Change?</h4>
                    <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
                    <button id="contactUpdateConfirmModalButton" type="button" class="btn btn-primary btn-sm">
                        Yes
                    </button>
                </div>
            </div>
        </div>
    </div>

    {{--    contact delete Confirm modal--}}
    <div class="modal fade" id="contactDeleteConfirmModal" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <input id="hiddenInput" type="hidden"/>
            <div class="modal-content">
                <div class="modal-body text-center">
                    <h1 id="contactDeleteConfirmModalStatus"></h1>
                    <h4 class="p-5">Do you want to Delete?</h4>
                    <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">No</button>
                    <button id="contactDeleteConfirmModalButton" type="button" class="btn btn-danger btn-sm">Yes
                    </button>
                </div>
            </div>
        </div>
    </div>

    {{--contact add Modal--}}
    <div class="modal fade" id="addContactModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h5 class="modal-title" id="exampleModalLabel">Add</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <h1 id="editId"></h1>
                <div class="modal-body">
                    <h1 id="addContactModalStatus" class="p-3"></h1>
                    <div id="header" class="mb-2"></div>
                    <input type="text" id="contactAddStatus" class="form-control mb-4"
                           placeholder="Contact Status (ex:Phone)">
                    <textarea type="text" id="contactAddInformation" class="form-control mb-4"
                              placeholder="Type Address (ex:01890312202)"></textarea>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                    <button id="addContactModalButton" type="button" class="btn btn-primary btn-sm">Save</button>
                </div>
            </div>
        </div>
    </div>


    {{-- contact add confirm modal--}}
    <div class="modal fade" id="addContactConfirmModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <h4 class="p-5">Are you sure?</h4>
                    <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
                    <button id="addContactConfirmModalButton" type="button" class="btn btn-primary btn-sm">Yes</button>
                </div>
            </div>
        </div>
    </div>



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

    <!-- Education Edit Confirm Modal -->
    <div class="modal fade" id="educationUpdateConfirmModal" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <h4 class="p-5">Do you want to Change?</h4>
                    <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
                    <button id="educationUpdateConfirmButton" type="button" class="btn btn-primary btn-sm">Yes</button>
                </div>
            </div>
        </div>
    </div>

    {{--delete confrim modal--}}
    <div class="modal fade" id="educationDeleteConfirmModal" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <h2 id="educationDeleteConfirmModalStatus"></h2>
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


    {{--Language populate Modal--}}
    <div class="modal fade" id="languagePopulateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                    <h1 id="languagePopulateModalStatus" class="p-3"></h1>
                    <div id="header" class="mb-2"></div>

                    <input type="text" id="populateLanguage" class="form-control mb-4"
                           placeholder="Type Language (ex:Chinese)">
                    <select class="form-control mb-4" name="proficiency" id="languageProficiency">
                        <option value="Select">Select Proficiency</option>
                        <option value="Native">Native</option>
                        <option value="Intermediate">Intermediate</option>
                        <option value="Good">Good</option>
                        <option value="Poor">Poor</option>
                    </select>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                    <button id="languagePopulateButton" type="button" class="btn btn-primary btn-sm">Save</button>
                </div>
            </div>
        </div>
    </div>

    <!--Edit language Confirm Modal -->
    <div class="modal fade" id="editLanguageConfirmModal" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <h1 id="editLanguageConfirmModalStatus"></h1>
                    <h4 class="p-5">Do you want to Change?</h4>
                    <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
                    <button id="editLanguageConfirmButton" type="button" class="btn btn-primary btn-sm">Yes</button>
                </div>
            </div>
        </div>
    </div>

    {{--language delete confrim modal--}}
    <div class="modal fade" id="languageDeleteConfirmModal" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <input id="hiddenInput" type="hidden"/>
            <div class="modal-content">
                <div class="modal-body text-center">
                    <h1 id="languageDeleteConfirmModalStatus"></h1>
                    <h4 class="p-5">Do you want to Delete?</h4>
                    <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">No</button>
                    <button id="languageDeleteConfirmButton" type="button" class="btn btn-danger btn-sm">Yes</button>
                </div>
            </div>
        </div>
    </div>


    {{--Language Add Modal--}}
    <div class="modal fade" id="addLanguageModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                    <h1 id="addLanguageModalStatus" class="p-3"></h1>
                    <div id="header" class="mb-2"></div>

                    <input type="text" id="addLanguageInputId" class="form-control mb-4"
                           placeholder="Type Language (ex:Chinese)"/>
                    <select class="form-control mb-4" name="proficiency" id="addLanguageProficiency">
                        <option value="Select" {{ old('proficiency') =='Select' ? selected: '' }}>Select Proficiency
                        </option>
                        <option value="Native" {{ old('proficiency') =='Native' ? selected: '' }}>Native</option>
                        <option value="Intermediate" {{ old('proficiency') =='Intermediate' ? selected: '' }}>
                            Intermediate
                        </option>
                        <option value="Good" {{ old('proficiency') =='Good' ? selected: '' }}>Good</option>
                        <option value="Poor" {{ old('proficiency') =='Poor' ? selected: '' }}>Poor</option>
                    </select>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                    <button id="addLanguageSubmitButton" type="button" class="btn btn-primary btn-sm">Save</button>
                </div>
            </div>
        </div>
    </div>

    {{--    add confirm modal--}}
    <div class="modal fade" id="addLanguageConfirmModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <h4 class="p-5">Are you sure?</h4>
                    <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
                    <button id="addLanguageConfirmButton" type="button" class="btn btn-primary btn-sm">Yes</button>
                </div>
            </div>
        </div>
    </div>
    {{---------------------------------------------------SKILLS-------------------------------------------}}
    <table id="myTable" class="table-bordered">
        <h6 class="pt-5" style="font-weight: bold;">ADD SKILLS</h6>
        <h6 class="p-3"><a id="addSkillButton" class="btn btn-outline-deep-purple">ADD SKILLS</a></h6>
        <thead>
        <th>PROGRAMMING LANGUAGE</th>
        <th>LANGUAGE LEVEL</th>
        <th>EDIT</th>
        <th>DELETE</th>
        </thead>
        <tbody id="skillTableBody">
        </tbody>
    </table>

    {{--Skills populate Modal--}}
    <div class="modal fade" id="skillsPopulateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                    <h1 id="skillsPopulateModalStatus" class="p-3"></h1>
                    <div id="header" class="mb-2"></div>

                    <input type="text" id="skillsProgrammingLanguage" class="form-control mb-4"
                           placeholder="Type Language (ex:Java)">
                    <input type="text" id="skillsProgrammingLanguageLevel" class="form-control mb-4"
                           placeholder="Type Level (ex: 70% )">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                    <button id="skillsPopulateButton" type="button" class="btn btn-primary btn-sm">Save</button>
                </div>
            </div>
        </div>
    </div>

    <!--skills Confirm Modal -->
    <div class="modal fade" id="skillsConfirmModal" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <h1 id="skillsConfirmModalStatus"></h1>
                    <h4 class="p-5">Do you want to Change?</h4>
                    <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
                    <button id="skillsConfirmButton" type="button" class="btn btn-primary btn-sm">Yes</button>
                </div>
            </div>
        </div>
    </div>
    {{--skills delete confrim modal--}}
    <div class="modal fade" id="skillsDeleteConfirmModal" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <input id="hiddenInput" type="hidden"/>
            <div class="modal-content">
                <div class="modal-body text-center">
                    <h1 id="skillsDeleteConfirmModalStatus"></h1>
                    <h4 class="p-5">Do you want to Delete?</h4>
                    <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">No</button>
                    <button id="skillsDeleteConfirmButton" type="button" class="btn btn-danger btn-sm">Yes</button>
                </div>
            </div>
        </div>
    </div>

    {{--Skills Add Modal--}}
    <div class="modal fade" id="addSkillsModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                    <h1 id="addSkillsModalStatus" class="p-3"></h1>
                    <div id="header" class="mb-2"></div>
                    <input type="text" id="addSkillsProgrammingLanguage" class="form-control mb-4"
                           placeholder="Type Language (ex:Java)">
                    <input type="text" id="addSkillsProgrammingLanguageLevel" class="form-control mb-4"
                           placeholder="Type Level (ex: 70% )">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                    <button id="addSkillsModalButton" type="button" class="btn btn-primary btn-sm">Save</button>
                </div>
            </div>
        </div>
    </div>
    {{--    add confirm modal--}}
    <div class="modal fade" id="addSkillsConfirmModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <h4 class="p-5">Are you sure?</h4>
                    <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
                    <button id="addSkillsConfirmModalButton" type="button" class="btn btn-primary btn-sm">Yes</button>
                </div>
            </div>
        </div>
    </div>
    {{--    -------------------------------------------------JOB SKILLS------------------------------------------}}
    <table id="myTable" class="table-bordered">
        <h6 class="pt-5" style="font-weight: bold;">JOB SKILLS</h6>
        <h6 class="p-3"><a id="addJobSkillsButton" class="btn btn-outline-deep-purple">ADD JOB SKILLS</a></h6>
        <thead>
        <th>POSITION</th>
        <th>INSTITUTE</th>
        <th>MAJOR</th>
        <th>EDIT</th>
        <th>DELETE</th>
        </thead>
        <tbody id="jobSkillsTableBody">
        </tbody>
    </table>

    {{--    job skill populate modal--}}
    <div class="modal fade" id="jobSkillsPopulateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                    <h1 id="jobSkillsPopulateModalStatus" class="p-3"></h1>
                    <div id="header" class="mb-2"></div>

                    <input type="text" id="jobSkillsPopulateJob" class="form-control mb-4"
                           placeholder="Type Your Status (ex:Facebook,Google)"/>
                    <input type="text" id="jobSkillsPopulateInstitute" class="form-control mb-4"
                           placeholder="Type Your Institute (ex:Back-End Developer,Assistant Director)"/>
                    <input type="text" id="jobSkillsPopulatePosition" class="form-control mb-4"
                           placeholder="Type Your Position (ex:Instructor,Back-End developer)"/>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                    <button id="jobSkillsPopulateModalButton" type="button" class="btn btn-primary btn-sm">Save</button>
                </div>
            </div>
        </div>
    </div>


    <!--Job Skills update Confirm Modal -->
    <div class="modal fade" id="jobSkillsConfirmModal" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <h1 id="jobSkillsConfirmModalStatus"></h1>
                    <h4 class="p-5">Do you want to Change?</h4>
                    <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
                    <button id="jobSkillsConfirmModalButton" type="button" class="btn btn-primary btn-sm">Yes</button>
                </div>
            </div>
        </div>
    </div>
    {{--    job Skill delete Confirm modal--}}
    <div class="modal fade" id="jobSkillsDeleteConfirmModal" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <input id="hiddenInput" type="hidden"/>
            <div class="modal-content">
                <div class="modal-body text-center">
                    <h1 id="jobSkillsDeleteConfirmModalStatus"></h1>
                    <h4 class="p-5">Do you want to Delete?</h4>
                    <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">No</button>
                    <button id="jobSkillsDeleteConfirmModalButton" type="button" class="btn btn-danger btn-sm">Yes
                    </button>
                </div>
            </div>
        </div>
    </div>


    {{--    job skill Add modal--}}
    <div class="modal fade" id="jobSkillsAddModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                    <h1 id="jobSkillsAddModalStatus" class="p-3"></h1>
                    <div id="header" class="mb-2"></div>

                    <input type="text" id="jobSkillsAddJob" class="form-control mb-4"
                           placeholder="Type Your Status (ex:Facebook,Google)"/>
                    <input type="text" id="jobSkillsAddInstitute" class="form-control mb-4"
                           placeholder="Type Your Institute (ex:Back-End Developer,Assistant Director)"/>
                    <input type="text" id="jobSkillsAddPosition" class="form-control mb-4"
                           placeholder="Type Your Position (ex:Instructor,Back-End developer)"/>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                    <button id="jobSkillsAddModalButton" type="button" class="btn btn-primary btn-sm">Save</button>
                </div>
            </div>
        </div>
    </div>
    {{--    job skill add confirm modal--}}
    <div class="modal fade" id="addJobSkillsConfirmModal" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <h4 class="p-5">Are you sure?</h4>
                    <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
                    <button id="addJobSkillsConfirmModalButton" type="button" class="btn btn-primary btn-sm">Yes
                    </button>
                </div>
            </div>
        </div>
    </div>
    {{-----------------------------------------------PERSONAL INFORMATION----------------------------------}}
    <table id="myTable" class="table-bordered">
        <h6 class="pt-5" style="font-weight: bold;">PERSONAL INFORMATION</h6>
        <h6 class="p-3"><a id="addPersonalInformationButton" class="btn btn-outline-deep-purple">ADD PERSONAL
                INFORMATION</a></h6>
        <thead>
        <th>INFORMATION STATUS</th>
        <th>INFORMATION</th>
        <th>EDIT</th>
        <th>DELETE</th>
        </thead>
        <tbody id="personalInformationTableBody">
        </tbody>
    </table>

    {{--    personal Information populate modal--}}
    <div class="modal fade" id="populatePersonalInformationModal" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalLabel"
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
                    <h1 id="populatePersonalInformationModalStatus" class="p-3"></h1>
                    <div id="header" class="mb-2"></div>

                    <input type="text" id="personalInformationStatus" class="form-control mb-4"
                           placeholder="Type Your Status (ex:Father)"/>
                    <input type="text" id="personalInformation" class="form-control mb-4"
                           placeholder="Type Your Institute (ex:Fakhrul Islam)"/>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                    <button id="populatePersonalInformationModalButton" type="button" class="btn btn-primary btn-sm">
                        Save
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!--personal information update Confirm Modal -->
    <div class="modal fade" id="informationUpdateConfirmationModal" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <h1 id="informationUpdateConfirmationModalStatus"></h1>
                    <h4 class="p-5">Do you want to Change?</h4>
                    <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
                    <button id="informationUpdateConfirmationModalButton" type="button" class="btn btn-primary btn-sm">
                        Yes
                    </button>
                </div>
            </div>
        </div>
    </div>
    {{--    personal information delete Confirm modal--}}
    <div class="modal fade" id="personalDeleteConfirmModal" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <input id="hiddenInput" type="hidden"/>
            <div class="modal-content">
                <div class="modal-body text-center">
                    <h1 id="personalDeleteConfirmModalStatus"></h1>
                    <h4 class="p-5">Do you want to Delete?</h4>
                    <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">No</button>
                    <button id="personalDeleteConfirmButton" type="button" class="btn btn-danger btn-sm">Yes
                    </button>
                </div>
            </div>
        </div>
    </div>
    {{--    personal Information add modal--}}
    <div class="modal fade" id="addPersonalInformationModal" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalLabel"
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
                    <h1 id="addPersonalInformationModalStatus" class="p-3"></h1>
                    <div id="header" class="mb-2"></div>

                    <input type="text" id="addInformationStatus" class="form-control mb-4"
                           placeholder="Type Your Status (ex:Father)"/>
                    <input type="text" id="addInformation" class="form-control mb-4"
                           placeholder="Type Your Institute (ex:Fakhrul Islam)"/>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                    <button id="addPersonalInformationModalButton" type="button" class="btn btn-primary btn-sm">Save
                    </button>
                </div>
            </div>
        </div>
    </div>
    {{--    personal information add confirm modal--}}
    <div class="modal fade" id="addPersonalInformationConfirmModal" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <h4 class="p-5">Are you sure?</h4>
                    <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
                    <button id="addPersonalInformationConfirmModalButton" type="button" class="btn btn-primary btn-sm">
                        Yes
                    </button>
                </div>
            </div>
        </div>
    </div>
    {{--    -----------------------------------------------ADDRESS---------------------------------------------------}}
    <table id="myTable" class="table-bordered">
        <h6 class="pt-5" style="font-weight: bold;">ADDRESS</h6>
        <h6 class="p-3"><a id="addAddressButton" class="btn btn-outline-deep-purple">ADD ADDRESS</a></h6>
        <thead>
        <th>ADDRESS STATUS</th>
        <th>ADDRESS</th>
        <th>EDIT</th>
        <th>DELETE</th>
        </thead>
        <tbody id="addressTableBody">
        </tbody>
    </table>


    {{--    address  populate modal--}}
    <div class="modal fade" id="addressPopulateModal" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalLabel"
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
                    <h1 id="addressPopulateModalStatus" class="p-3"></h1>
                    <div id="header" class="mb-2"></div>

                    <input type="text" id="addressInformationStatus" class="form-control mb-4"
                           placeholder="Address Status (ex:Present Address)"/>
                    <textarea type="text" id="addressInformation" class="form-control mb-4"
                              placeholder="Type Address (ex:Dagonbhuiyan,Feni,Bangladesh)"></textarea>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                    <button id="addressPopulateModalButton" type="button" class="btn btn-primary btn-sm">
                        Save
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!--address update Confirm Modal -->
    <div class="modal fade" id="addressUpdateConfirmModal" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <h1 id="addressUpdateConfirmModalStatus"></h1>
                    <h4 class="p-5">Do you want to Change?</h4>
                    <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
                    <button id="addressUpdateConfirmModalButton" type="button" class="btn btn-primary btn-sm">
                        Yes
                    </button>
                </div>
            </div>
        </div>
    </div>

    {{--    address delete Confirm modal--}}
    <div class="modal fade" id="addressDeleteConfirmModal" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <input id="hiddenInput" type="hidden"/>
            <div class="modal-content">
                <div class="modal-body text-center">
                    <h1 id="addressDeleteConfirmModalStatus"></h1>
                    <h4 class="p-5">Do you want to Delete?</h4>
                    <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">No</button>
                    <button id="addressDeleteConfirmModalButton" type="button" class="btn btn-danger btn-sm">Yes
                    </button>
                </div>
            </div>
        </div>
    </div>

    {{--    address add modal--}}
    <div class="modal fade" id="addAddressModal" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h5 class="modal-title" id="exampleModalLabel">Add Address</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <h1 id="addAddressModalStatus" class="p-3"></h1>
                    <div id="header" class="mb-2"></div>

                    <input type="text" id="addAddressInformationStatus" class="form-control mb-4"
                           placeholder="Address Status (ex:Present Address)"/>
                    <textarea type="text" id="addAddressInformation" class="form-control mb-4"
                              placeholder="Type Address (ex:Dagonbhuiyan,Feni,Bangladesh)"></textarea>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                    <button id="addAddressModalButton" type="button" class="btn btn-primary btn-sm">
                        Save
                    </button>
                </div>
            </div>
        </div>
    </div>
    {{-- address add confirm modal--}}
    <div class="modal fade" id="addAddressConfirmModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <h4 class="p-5">Are you sure?</h4>
                    <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
                    <button id="addAddressConfirmModalButton" type="button" class="btn btn-primary btn-sm">Yes</button>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('script')
    <script>
        getObjetiveList();
        getEducationList();
        getLanguageList();
        getSkillsList();
        getJobSkillsList();
        getPersonalInformationList();
        getAddressList();
        getEmergencyContactList();
        showProfilePic();
    </script>
@endsection
<script>
    // ---------------------------------------PROFILE PICTURE-------------------------
    function showProfilePic() {
        axios.get('/showProfilePic').then(function (response) {
            if (response.status == 200) {
                let result = response.data;
                $.each(result, function (i) {
                    $("<tr>").html(
                        "<td>" + "<img  height='100px' width='120px' src=" + result[i].photo + ">" + "</td>" +
                        "<td>" + "<a id='profilePictureButton' class='btn btn-outline-deep-purple btn-sm' data-id=" + result[i].id + ">UPDATE</a>" + "</td>"
                    ).appendTo('#profilePictureTableBody');

                });
                $('#profilePictureButton').click(function () {
                    let id = $(this).data('id');
                    $('#updateProfilePictureModalStatus').html(id);
                    $('#updateProfilePictureModal').modal('show');
                    populateProfilePicture(id);
                });
                $('#updateProfilePictureModalButton').click(function () {
                    let id = $('#updateProfilePictureModalStatus').html();
                    $('#profilePictureUpdateConfirmModalStatus').html(id);
                    $('#profilePictureUpdateConfirmModal').modal('show');

                });
                $('#profilePictureUpdateConfirmModalButton').click(function () {
                    let id = $('#profilePictureUpdateConfirmModalStatus').html();
                    updateProfilepicture(id);
                });
            }
        }).catch(function (error) {
            alert('Server Error!');
        });

        // populate image
        function populateProfilePicture(id) {
            axios.post('/populateProfilePicture', {
                id: id
            }).then(function (response) {
                if (response.status == 200) {
                    let result = response.data;
                    $('#updateProfilePicturePreview').attr('src', result[0].photo);
                }
            }).catch(function (response) {
                alert('Server Error!');
            });
        }
        //Image preview
        $('#updateProfilePicture').change(function () {
            let reader = new FileReader();
            reader.readAsDataURL(this.files[0]);
            reader.onload = function (event) {
                let src = event.target.result;
                $('#updateProfilePicturePreview').attr('src', src);
            }
        });

        //Update profile pic
        function updateProfilepicture(id) {
            let file = $('#updateProfilePicture').prop('files')[0];
            let formData = new FormData();
            formData.append('id', id);
            formData.append('file', file);
            axios.post('/updateProfilepicture', formData).then(function (response) {
                if (response.status == 200) {
                    alert('Picture has been updated!');
                    $('#updateProfilePictureModal').modal('hide');
                    $('#profilePictureUpdateConfirmModal').modal('hide');
                } else {
                    alert('Picture failed to update!');
                    $('#updateProfilePictureModal').modal('hide');
                    $('#profilePictureUpdateConfirmModal').modal('hide');
                }
            }).catch(function (error) {
                alert("Server Error!");
            });
        }
    }


    // -------------------------------------EMERGENCY CONTACT---------------------------------------
    function getEmergencyContactList() {
        axios.get('/getEmergencyContactList').then(function (response) {
            if (response.status == 200) {
                let result = response.data;
                $.each(result, function (i) {
                    $("<tr>").html(
                        "<td>" + result[i].contactStatus + "</td>" +
                        "<td>" + result[i].contactInformation + "</td>" +
                        "<td>" + "<a class='btn btn-sm btn-outline-info contactEditButton' data-id=" + result[i].id + ">Edit</a>" + "</td>" +
                        "<td>" + "<a class='btn btn-sm btn-outline-danger contactDeleteButton' data-id=" + result[i].id + ">Delete</a>" + "</td>"
                    ).appendTo('#emergencyContactTableBody');
                });
                $('.contactEditButton').click(function () {
                    let id = $(this).data('id');
                    $('#contactPopulateModalStatus').html(id);
                    $('#contactPopulateModal').modal('show');
                    populateContact(id);
                });
                $('#contactPopulateModalButton').click(function () {
                    let id = $('#contactPopulateModalStatus').html();
                    $('#contactUpdateConfirmModalStatus').html(id);
                    $('#contactUpdateConfirmModal').modal('show');
                });
                $('#contactUpdateConfirmModalButton').click(function () {
                    let id = $('#contactUpdateConfirmModalStatus').html();
                    let contactStatus = $('#contactStatus').val();
                    let contactInformation = $('#contactInformation').val();
                    updateContact(id, contactStatus, contactInformation);
                });
                $('.contactDeleteButton').click(function () {
                    let id = $(this).data('id');
                    $('#contactDeleteConfirmModalStatus').html(id);
                    $('#contactDeleteConfirmModal').modal('show');
                });
                $('#contactDeleteConfirmModalButton').click(function () {
                    let id = $('#contactDeleteConfirmModalStatus').html();
                    deleteContact(id);
                });
                $('#addContactButton').click(function () {
                    $('#addContactModal').modal('show');
                });
                $('#addContactModalButton').click(function () {
                    $('#addContactConfirmModal').modal('show');
                });
                $('#addContactConfirmModalButton').click(function () {
                    let contactStatus = $('#contactAddStatus').val();
                    let contactInformation = $('#contactAddInformation').val();
                    addContact(contactStatus, contactInformation);
                });

            }
        }).catch(function (error) {

        });
    }

    // Add Contact
    function addContact(contactStatus, contactInformation) {
        axios.post('/addContact', {
            contactStatus: contactStatus,
            contactInformation: contactInformation
        }).then(function (response) {
            if (response.data == 1) {
                alert("Data has been added!");
                $('#addContactModal').modal('hide');
                $('#addContactConfirmModal').modal('hide');
            } else {
                alert("Data failed to add!");
                $('#addContactModal').modal('hide');
                $('#addContactConfirmModal').modal('hide');
            }
        }).catch(function (error) {

        });
    }

    //delete contact
    function deleteContact(id) {
        axios.post('/deleteContact', {
            id: id
        }).then(function (response) {
            if (response.data == 1) {
                alert("Data has been deleted!");
                $('#contactDeleteConfirmModal').modal('hide');
            } else {
                alert("Data failed to delete!");
                $('#contactDeleteConfirmModal').modal('hide');
            }

        }).catch(function (error) {

        });
    }

    //update Contact
    function updateContact(id, contactStatus, contactInformation) {
        axios.post('/updateContact', {
            id: id,
            contactStatus: contactStatus,
            contactInformation: contactInformation
        }).then(function (response) {
            if (response.data == 1) {
                alert('Data has been updated!');
                $('#contactPopulateModal').modal('hide');
                $('#contactUpdateConfirmModal').modal('hide');
            } else {
                alert("Data failed to update!");
                $('#contactPopulateModal').modal('hide');
                $('#contactUpdateConfirmModal').modal('hide');
            }
        }).catch(function (error) {
            alert("Server Error!");
        });
    }

    //populate Contact
    function populateContact(id) {
        axios.post('/populateContact', {
            id: id
        }).then(function (response) {
            if (response.status == 200) {
                let result = response.data;
                $('#contactStatus').val(result.contactStatus);
                $('#contactInformation').val(result.contactInformation);
            }
        }).catch(function (error) {

        });
    }


    // ----------------------------------------------------ADDRESS-------------------------------------
    function getAddressList() {
        axios.get('/getAddressList').then(function (response) {
            if (response.status == 200) {
                let result = response.data;
                $.each(result, function (i) {
                    $("<tr>").html(
                        "<td>" + result[i].address_status + "</td>" +
                        "<td>" + result[i].Address + "</td>" +
                        "<td>" + "<a data-id=" + result[i].id + " + class='btn btn-sm btn-outline-info addressEditButton'>Edit</a>" + "</td>" +
                        "<td>" + "<a data-id=" + result[i].id + " + class='btn btn-sm btn-outline-danger addressDeleteButton'>Delete</a>" + "</td>"
                    ).appendTo('#addressTableBody');
                });
                //Delete
                $('.addressDeleteButton').click(function () {
                    let id = $(this).data('id');
                    $('#addressDeleteConfirmModalStatus').html(id);
                    $('#addressDeleteConfirmModal').modal('show');
                });
                $('#addressDeleteConfirmModalButton').click(function () {
                    let id = $('#addressDeleteConfirmModalStatus').html();
                    deleteAddress(id);
                });

                //populate id
                $('.addressEditButton').click(function () {
                    let id = $(this).data('id');
                    $('#addressPopulateModalStatus').html(id);
                    populateAddress(id);
                    $('#addressPopulateModal').modal('show');
                });
                //update
                $('#addressPopulateModalButton').click(function () {
                    let id = $('#addressPopulateModalStatus').html();
                    $('#addressUpdateConfirmModalStatus').html(id);
                    $('#addressUpdateConfirmModal').modal('show');
                });
                $('#addressUpdateConfirmModalButton').click(function () {
                    let id = $('#addressUpdateConfirmModalStatus').html();
                    let addressInformationStatus = $('#addressInformationStatus').val();
                    let addressInformation = $('#addressInformation').val();
                    updateAddress(id, addressInformationStatus, addressInformation);
                });
                $('#addAddressButton').click(function () {

                    $('#addAddressModal').modal('show');

                });
                $('#addAddressModalButton').click(function () {
                    $('#addAddressConfirmModal').modal('show');
                });
                $('#addAddressConfirmModalButton').click(function () {
                    let addressInformationStatus = $('#addAddressInformationStatus').val();
                    let addressInformation = $('#addAddressInformation').val();
                    addAddress(addressInformationStatus, addressInformation);
                });

            }
        }).catch(function (error) {

        });
    }

    // add address
    function addAddress(addressInformationStatus, addressInformation) {
        axios.post('/addAddress', {
            addressInformationStatus: addressInformationStatus,
            addressInformation: addressInformation
        }).then(function (response) {
            if (response.data == 1) {
                alert("Data has been added!");
                $('#addAddressModal').modal('hide');
                $('#addAddressConfirmModal').modal('hide');

            } else {
                alert("Data failed to add!");
                $('#addAddressModal').modal('hide');
                $('#addAddressConfirmModal').modal('hide');

            }
        }).catch(function (error) {
            alert("Server Error!");
        });
    }

    //delete
    function deleteAddress(id) {
        axios.post('/deleteAddress', {
            id: id
        }).then(function (response) {
            if (response.data == 1) {
                alert('Data has been deleted!');
                $('#addressDeleteConfirmModal').modal('hide');
            } else {
                alert('Data failed to delete!');
                $('#addressDeleteConfirmModal').modal('hide');
            }
        }).catch(function (error) {
            alert("Server Error!");
        });
    }

    //update
    function updateAddress(id, addressInformationStatus, addressInformation) {
        axios.post('/updateAddress', {
            id: id,
            addressInformationStatus: addressInformationStatus,
            addressInformation: addressInformation
        }).then(function (response) {
            if (response.data == 1) {
                alert("Data has been updated!");
                $('#addressPopulateModal').modal('hide');
                $('#addressUpdateConfirmModal').modal('hide');
            } else {
                alert('Data failed to update!');
                $('#addressPopulateModal').modal('hide');
                $('#addressUpdateConfirmModal').modal('hide');
            }
        }).catch(function (error) {
            alert("Server Error!");
        });
    }

    //populate
    function populateAddress(id) {
        axios.post('/populateAddress', {
            id: id
        }).then(function (response) {
            if (response.status == 200) {
                let result = response.data;
                $('#addressInformationStatus').val(result.address_status);
                $('#addressInformation').val(result.Address);
            }
        }).catch(function (error) {
            alert("Server Error!");
        });
    }


    // -------------------------------------------------PERSONAL INFORMATION-----------------------------
    function getPersonalInformationList() {
        axios.get('/getPersonalInformationList').then(function (response) {
            if (response.status == 200) {
                let result = response.data;
                $.each(result, function (i) {
                    $("<tr>").html(
                        "<td>" + result[i].information_status + "</td>" +
                        "<td>" + result[i].information + "</td>" +
                        "<td>" + "<a class='btn btn-sm btn-outline-info informationEditButton'   data-id=" + result[i].id + ">Edit</a>" + "</td>" +
                        "<td>" + "<a class='btn btn-sm btn-outline-danger informationDeleteButton' data-id=" + result[i].id + ">Delete</a>" + "</td>"
                    ).appendTo('#personalInformationTableBody');
                });
                $('.informationEditButton').click(function () {
                    let id = $(this).data('id');
                    $('#populatePersonalInformationModalStatus').html(id);
                    $('#populatePersonalInformationModal').modal('show');
                    populatePersonalInformation(id);
                });
                $('#populatePersonalInformationModalButton').click(function () {
                    let id = $('#populatePersonalInformationModalStatus').html();
                    $('#informationUpdateConfirmationModalStatus').html(id);
                    $('#informationUpdateConfirmationModal').modal('show');
                });
                $('#informationUpdateConfirmationModalButton').click(function () {
                    let id = $('#informationUpdateConfirmationModalStatus').html();
                    let personalInformationStatus = $('#personalInformationStatus').val();
                    let personalInformation = $('#personalInformation').val();
                    updatePersonalInformation(id, personalInformationStatus, personalInformation);
                });
                //delete information
                $('.informationDeleteButton').click(function () {
                    let id = $(this).data('id');
                    $('#personalDeleteConfirmModalStatus').html(id);
                    $('#personalDeleteConfirmModal').modal('show');
                });
                $('#personalDeleteConfirmButton').click(function () {
                    let id = $('#personalDeleteConfirmModalStatus').html();
                    deletePersonalInformation(id);
                });
                //Add Data
                $('#addPersonalInformationButton').click(function () {
                    $('#addPersonalInformationModal').modal('show');
                });
                $('#addPersonalInformationModalButton').click(function () {
                    $('#addPersonalInformationConfirmModal').modal('show');
                });
                $('#addPersonalInformationConfirmModalButton').click(function () {
                    let addInformationStatus = $('#addInformationStatus').val();
                    let addInformation = $('#addInformation').val();
                    addPersonalInformation(addInformationStatus, addInformation);
                });
            }
        }).catch(function (error) {
            alert("Server Error!");
        });
    }

    //add information
    function addPersonalInformation(addInformationStatus, addInformation) {
        axios.post('/addPersonalInformation', {
            addInformationStatus: addInformationStatus,
            addInformation: addInformation
        }).then(function (response) {
            if (response.status == 200) {
                alert("Data has been added!");
                $('#addPersonalInformationModal').modal('hide');
                $('#addPersonalInformationConfirmModal').modal('hide');
            } else {
                alert("Data failed to add!");
                $('#addPersonalInformationModal').modal('hide');
                $('#addPersonalInformationConfirmModal').modal('hide');
            }

        }).catch(function (error) {
            alert("Server Error!");
        });
    }

    // delete information
    function deletePersonalInformation(id) {
        axios.post('/deletePersonalInformation', {
            id: id
        }).then(function (response) {
            console.log(response.data);
            if (response.data == 1) {
                alert('Data has been deleted!');
                $('#personalDeleteConfirmModal').modal('hide');
            } else {
                alert('Data failed to delete!');
                $('#personalDeleteConfirmModal').modal('hide');
            }
        }).catch(function (error) {
            alert("Server Error!");
        });
    }

    //update information
    function updatePersonalInformation(id, personalInformationStatus, personalInformation) {
        axios.post('/updatePersonalInformation', {
            id: id,
            personalInformationStatus: personalInformationStatus,
            personalInformation: personalInformation
        }).then(function (response) {
            if (response.data == 1) {
                alert("Data has been updated successfully!")
                $('#populatePersonalInformationModal').modal('hide');
                $('#informationUpdateConfirmationModal').modal('hide');
            } else {
                alert("Data failed to update!")
                $('#populatePersonalInformationModal').modal('hide');
                $('#informationUpdateConfirmationModal').modal('hide');
            }

        }).catch(function (error) {
            alert("Server Error!");
        });
    }

    //populate information
    function populatePersonalInformation(id) {
        axios.post('/populatePersonalInformation', {
            id: id
        }).then(function (response) {
            if (response.status == 200) {
                let result = response.data;
                $('#personalInformationStatus').val(result.information_status);
                $('#personalInformation').val(result.information);
            }


        }).catch(function (error) {
            alert("Server Error!");
        });
    }


    // -------------------------------------------------JOB SKILLS---------------------------------------

    function getJobSkillsList() {
        axios.get('/getJobSkillsList').then(function (response) {
            if (response.status == 200) {
                let result = response.data;
                $.each(result, function (i) {
                    $("<tr>").html(
                        "<td>" + result[i].job + "</td>" +
                        "<td>" + result[i].workplace + "</td>" +
                        "<td>" + result[i].position + "</td>" +
                        "<td>" + "<a data-id=" + result[i].id + " class='btn btn-sm btn-outline-info jobSkillsEditButton'>Edit</a>" + "</td>" +
                        "<td>" + "<a data-id=" + result[i].id + " class='btn btn-sm btn-outline-danger jobSkillsDeleteButton'>Delete</a>" + "</td>"
                    ).appendTo('#jobSkillsTableBody');
                });
                //populate
                $('.jobSkillsEditButton').click(function () {
                    let id = $(this).data('id');
                    $('#jobSkillsPopulateModalStatus').html(id);
                    $('#jobSkillsPopulateModal').modal('show');
                    populateJobSkills(id);
                });
                // update
                $('#jobSkillsPopulateModalButton').click(function () {
                    let id = $('#jobSkillsPopulateModalStatus').html();
                    $('#jobSkillsConfirmModalStatus').html(id);
                    $('#jobSkillsConfirmModal').modal('show');
                });
                $('#jobSkillsConfirmModalButton').click(function () {
                    let id = $('#jobSkillsConfirmModalStatus').html();
                    let jobSkillsPopulateJob = $('#jobSkillsPopulateJob').val();
                    let jobSkillsPopulateInstitute = $('#jobSkillsPopulateInstitute').val();
                    let jobSkillsPopulatePosition = $('#jobSkillsPopulatePosition').val();
                    updateJobSkills(id, jobSkillsPopulateJob, jobSkillsPopulateInstitute, jobSkillsPopulatePosition);
                });
                // delete
                $('.jobSkillsDeleteButton').click(function () {
                    let id = $(this).data('id');
                    $('#jobSkillsDeleteConfirmModalStatus').html(id);
                    $('#jobSkillsDeleteConfirmModal').modal('show');
                });
                $('#jobSkillsDeleteConfirmModalButton').click(function () {
                    let id = $('#jobSkillsDeleteConfirmModalStatus').html();
                    deleteJobSkills(id);
                });
                //Add job skills
                $('#addJobSkillsButton').click(function () {
                    $('#jobSkillsAddModal').modal('show');
                });
                $('#jobSkillsAddModalButton').click(function () {
                    $('#addJobSkillsConfirmModal').modal('show');
                });
                $('#addJobSkillsConfirmModalButton').click(function () {
                    let jobSkillsAddJob = $('#jobSkillsAddJob').val();
                    let jobSkillsAddInstitute = $('#jobSkillsAddInstitute').val();
                    let jobSkillsAddPosition = $('#jobSkillsAddPosition').val();
                    addJobSkills(jobSkillsAddJob, jobSkillsAddInstitute, jobSkillsAddPosition);
                });
            }
        }).catch(function () {

        });
    }

    //Add Job skills
    function addJobSkills(jobSkillsAddJob, jobSkillsAddInstitute, jobSkillsAddPosition) {
        axios.post('/addJobSkills', {
            jobSkillsAddJob: jobSkillsAddJob,
            jobSkillsAddInstitute: jobSkillsAddInstitute,
            jobSkillsAddPosition: jobSkillsAddPosition
        }).then(function (response) {
            if (response.data == 1) {
                alert("Data added successfully!");
                $('#jobSkillsAddModal').modal('hide');
                $('#addJobSkillsConfirmModal').modal('hide');
            } else {
                alert("Data failed to add");
                $('#jobSkillsAddModal').modal('hide');
                $('#addJobSkillsConfirmModal').modal('hide');
            }
        }).catch(function (error) {
            alert("Server Error");
        });
    }


    //delete
    function deleteJobSkills(id) {
        axios.post('/deleteJobSkills', {
            id: id
        }).then(function (response) {
            if (response.data == 1) {
                alert("Data has been deleted!");
                $('#jobSkillsDeleteConfirmModal').modal('hide');
            } else {
                alert("Data failed to delete!");
                $('#jobSkillsDeleteConfirmModal').modal('hide');
            }

        }).catch(function (error) {
            alert("Server Error!");
        });
    }


    //Update Id
    function updateJobSkills(id, jobSkillsPopulateJob, jobSkillsPopulateInstitute, jobSkillsPopulatePosition) {
        axios.post('/updateJobSkills', {
            id: id,
            jobSkillsPopulateJob: jobSkillsPopulateJob,
            jobSkillsPopulateInstitute: jobSkillsPopulateInstitute,
            jobSkillsPopulatePosition: jobSkillsPopulatePosition

        }).then(function (response) {
            if (response.data == 1) {
                alert("Data has been updated!");
                $('#jobSkillsPopulateModal').modal('hide');
                $('#jobSkillsConfirmModal').modal('hide');
            } else {
                alert("Data failed to update");
                $('#jobSkillsPopulateModal').modal('hide');
                $('#jobSkillsConfirmModal').modal('hide');
            }
        }).catch(function (error) {
            alert('Server Error!');
        });
    }

    //populate Id
    function populateJobSkills(id) {
        axios.post('/populateJobSkills', {
            id: id
        }).then(function (response) {
            if (response.status == 200) {
                let result = response.data;
                $('#jobSkillsPopulateJob').val(result.job);
                $('#jobSkillsPopulateInstitute').val(result.workplace);
                $('#jobSkillsPopulatePosition').val(result.position);
            }
        }).catch(function (error) {
            alert("Server Error!");
        });
    }


    // ------------------------------------------------------SKILLS--------------------------------------------
    function getSkillsList() {
        axios.get('/getSkillsList').then(function (response) {
            if (response.status == 200) {
                let result = response.data;
                $.each(result, function (i) {
                    $("<tr>").html(
                        "<td>" + result[i].programming_language + "</td>" +
                        "<td>" + result[i].programming_level + "</td>" +
                        "<td>" + "<a data-id=" + result[i].id + " class='btn btn-sm btn-outline-info skillsEditButton'>Edit</a>" + "</td>" +
                        "<td>" + "<a data-id=" + result[i].id + " class='btn btn-sm btn-outline-danger skillsDeleteButton'>Delete</a>" + "</td>"
                    ).appendTo('#skillTableBody');
                });
                //populate
                $('.skillsEditButton').click(function () {
                    let id = $(this).data('id');
                    $('#skillsPopulateModalStatus').html(id);
                    $('#skillsPopulateModal').modal('show');
                    populateSkills(id);

                });
                //Delete
                $('.skillsDeleteButton').click(function () {
                    let id = $(this).data('id');
                    $('#skillsDeleteConfirmModalStatus').html(id);
                    $('#skillsDeleteConfirmModal').modal('show');
                });
                $('#skillsDeleteConfirmButton').click(function () {
                    let id = $('#skillsDeleteConfirmModalStatus').html();
                    deleteSkills(id);
                });

                //update
                $('#skillsPopulateButton').click(function () {
                    let id = $('#skillsPopulateModalStatus').html();
                    $('#skillsConfirmModalStatus').html(id);
                    $('#skillsConfirmModal').modal('show');
                });
                $('#skillsConfirmButton').click(function () {
                    let id = $('#skillsConfirmModalStatus').html();
                    let skillsProgrammingLanguage = $('#skillsProgrammingLanguage').val();
                    let skillsProgrammingLanguageLevel = $('#skillsProgrammingLanguageLevel').val();
                    updateSkills(id, skillsProgrammingLanguage, skillsProgrammingLanguageLevel);
                });
                //Add skill Button
                $('#addSkillButton').click(function () {
                    $('#addSkillsModal').modal('show');
                });
                $('#addSkillsModalButton').click(function () {
                    $('#addSkillsConfirmModal').modal('show');
                });
                $('#addSkillsConfirmModalButton').click(function () {
                    let skillsProgrammingLanguage = $('#addSkillsProgrammingLanguage').val();
                    let skillsProgrammingLanguageLevel = $('#addSkillsProgrammingLanguageLevel').val();
                    addSkills(skillsProgrammingLanguage, skillsProgrammingLanguageLevel);
                });
            }
        }).catch(function (error) {
            alert("Server Error!");
        });
    }

    //Add Skills
    function addSkills(skillsProgrammingLanguage, skillsProgrammingLanguageLevel) {
        axios.post('/addSkills', {
            skillsProgrammingLanguage: skillsProgrammingLanguage,
            skillsProgrammingLanguageLevel: skillsProgrammingLanguageLevel
        }).then(function (response) {
            if (response.data == 1) {
                alert('Data has been added!');
                $('#addSkillsModal').modal('hide');
                $('#addSkillsConfirmModal').modal('hide');
            } else {
                alert('Data failed to add!');
                $('#addSkillsModal').modal('hide');
                $('#addSkillsConfirmModal').modal('hide');
            }

        }).catch(function (error) {
            alert("Server Error!");
        });
    }

    //Delete Skills
    function deleteSkills(id) {
        axios.post('/deleteSkills', {
            id: id
        }).then(function (response) {
            console.log(response.data);
            if (response.data == 1) {
                alert("Data has been deleted!");
                $('#skillsDeleteConfirmModal').modal('hide');
            } else {
                alert("Data failed to delete!");
                $('#skillsDeleteConfirmModal').modal('hide');
            }
        }).catch(function (error) {
            alert("Server Error!");
        });
    }


    //Populate Skills
    function populateSkills(id) {
        axios.post('/populateSkills', {
            id: id
        }).then(function (response) {
            if (response.status == 200) {
                let result = response.data;
                $('#skillsProgrammingLanguage').val(result.programming_language);
                $('#skillsProgrammingLanguageLevel').val(result.programming_level);
            } else {
                alert('Data failed to fetched');
            }

        }).catch(function (error) {
            alert("Server Error!");
        });
    }

    //Update Skills
    function updateSkills(id, skillsProgrammingLanguage, skillsProgrammingLanguageLevel) {
        axios.post('/updateSkills', {
            id: id,
            skillsProgrammingLanguage: skillsProgrammingLanguage,
            skillsProgrammingLanguageLevel: skillsProgrammingLanguageLevel
        }).then(function (response) {
            if (response.data == 1) {
                alert('Data has been updated successfully!');
                $('#skillsPopulateModal').modal('hide');
                $('#skillsConfirmModal').modal('hide');
            } else {
                alert('Data failed to update!');
                $('#skillsPopulateModal').modal('hide');
                $('#skillsConfirmModal').modal('hide');
            }

        }).catch(function (error) {
            alert("Server Error!");
        });
    }


    // --------------------------------------------LANGUAGE-------------------------------------------
    function getLanguageList() {
        axios.get('/getLanguageList').then(function (response) {
            if (response.status == 200) {
                let result = response.data;
                $.each(result, function (i) {
                    $("<tr>").html(
                        "<td>" + result[i].language + "</td>" +
                        "<td>" + result[i].language_proficiency + "</td>" +
                        "<td>" + "<a data-id=" + result[i].id + " class='btn btn-outline-info btn-sm languageEditButton'>Edit</a>" + "</td>" +
                        "<td>" + "<a data-id=" + result[i].id + " class='btn btn-outline-danger btn-sm languageDeleteButton'>Delete</a>" + "</td>"
                    ).appendTo('#languageTableBody');
                });
                //Edit and Update
                $('.languageEditButton').click(function () {
                    let id = $(this).data('id');
                    $('#languagePopulateModal').modal('show');
                    $('#languagePopulateModalStatus').html(id);
                    languagePopulateModal(id);
                });
                $('#languagePopulateButton').click(function () {
                    let id = $('#languagePopulateModalStatus').html();
                    $('#editLanguageConfirmModalStatus').html(id);
                    $('#editLanguageConfirmModal').modal('show');
                });
                $('#editLanguageConfirmButton').click(function () {
                    let id = $('#editLanguageConfirmModalStatus').html();
                    let populateLanguage = $('#populateLanguage').val();
                    let languageProficiency = $('#languageProficiency').val();
                    updateLanguage(id, populateLanguage, languageProficiency);
                });
                //Delete Button
                $('.languageDeleteButton').click(function () {
                    let id = $(this).data('id');
                    $('#languageDeleteConfirmModalStatus').html(id);
                    $('#languageDeleteConfirmModal').modal('show');
                });
                $('#languageDeleteConfirmButton').click(function () {
                    let id = $('#languageDeleteConfirmModalStatus').html();
                    deleteLanguage(id);
                });

                //Add Button
                $('#addLanguageButton').click(function () {
                    $('#addLanguageModal').modal('show');
                });
                $('#addLanguageSubmitButton').click(function () {
                    $('#addLanguageConfirmModal').modal('show');
                });
                $('#addLanguageConfirmButton').click(function () {
                    let AddLanguage = $('#addLanguageInputId').val();
                    let AddLanguageProficiency = $('#addLanguageProficiency').val();
                    addLanguage(AddLanguage, AddLanguageProficiency);
                });

            }
        }).catch(function (error) {
            alert("Server Error!");
        });

    }

    //Add Language
    function addLanguage(AddLanguage, AddLanguageProficiency) {
        axios.post('/addLanguage', {
            AddLanguage: AddLanguage,
            AddLanguageProficiency: AddLanguageProficiency
        }).then(function (response) {
            if (response.data == 1) {
                alert("Data has been added!");
                $('#addLanguageModal').modal('hide');
                $('#addLanguageConfirmModal').modal('hide');
            } else {
                alert("Data failed to add!");
                $('#addLanguageModal').modal('hide');
                $('#addLanguageConfirmModal').modal('hide');
            }
        }).catch(function (error) {
            alert("Server Error!");
        });
    }

    //Delete Language
    function deleteLanguage(id) {
        axios.post('/deleteLanguage', {
            id: id
        }).then(function (response) {
            if (response.data == 1) {
                alert("Data has been deleted!");
                $('#languageDeleteConfirmModal').modal('hide');
            } else {
                alert("Data failed to delete!");
                $('#languageDeleteConfirmModal').modal('hide');
            }
        }).catch(function (error) {
            alert("Server Error!");
        });
    }

    //Update Language
    function updateLanguage(id, populateLanguage, languageProficiency) {
        axios.post('/updateLanguage', {
            id: id,
            populateLanguage: populateLanguage,
            languageProficiency: languageProficiency
        }).then(function (response) {
            if (response.data == 1) {
                alert('Language has been updated!');
                $('#languagePopulateModal').modal('hide');
                $('#editLanguageConfirmModal').modal('hide');
            } else {
                alert('Language failed to update!');
                $('#languagePopulateModal').modal('hide');
                $('#editLanguageConfirmModal').modal('hide');
            }
        }).catch(function (error) {
            alert("Server Error!")
        });
    }

    //Populate Language
    function languagePopulateModal(id) {
        axios.post('/languagePopulateModal', {
            id: id
        }).then(function (response) {
            if (response.status == 200) {
                let result = response.data;
                $('#populateLanguage').val(result.language);
                $('#languageProficiency').val(result.language_proficiency);
            }
        }).catch(function (error) {
            alert("Server Error!");
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
                        "<td>" + "<a data-id=" + result[i].id + " class='btn btn-outline-danger btn-sm educationDeleteButton'>Delete</a>" + "</td>"
                    ).appendTo('#educationTableBody');
                });
                //Delete Button
                $('.educationDeleteButton').click(function () {
                    let id = $(this).data('id');
                    $('#educationDeleteConfirmModalStatus').html(id);
                    $('#educationDeleteConfirmModal').modal('show');
                });
                $('#educationDeleteConfirmButton').click(function () {
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
                $('#addEducationButton').click(function () {
                    $('#educationAddModal').modal('show');
                });
                $('#educationAddButton').click(function () {
                    $('#addConfrimModal').modal('show');
                });
                $('#addConfirmButton').click(function () {
                    let educationDuration = $('#educationAddDuration').val();
                    let educationInstitute = $('#educationAddInstitute').val();
                    let educationCertificate = $('#educationAddCertificate').val();
                    let educationMajor = $('#educationAddMajor').val();
                    let educationCgpa = $('#educationAddCgpa').val();
                    let educationBoard = $('#educationAddBoard').val();
                    addEducation(educationDuration, educationInstitute, educationCertificate, educationMajor, educationCgpa, educationBoard);
                });
            }
        }).catch(function (error) {
            alert("Server Error!");
        });
    }

    //Add Education
    function addEducation(educationDuration, educationInstitute, educationCertificate, educationMajor, educationCgpa, educationBoard) {
        axios.post('/addEducation', {
            educationDuration: educationDuration,
            educationInstitute: educationInstitute,
            educationCertificate: educationCertificate,
            educationMajor: educationMajor,
            educationCgpa: educationCgpa,
            educationBoard: educationBoard
        }).then(function (response) {
            if (response.data == 1) {
                alert('Data Added successfully!');
                $('#educationAddModal').modal('hide');
                $('#addConfrimModal').modal('hide');
            } else {
                alert('Data failed to add!');
                $('#educationAddModal').modal('hide');
                $('#addConfrimModal').modal('hide');
            }
        }).catch(function () {
            alert("Server Error!");
        });
    }

    //Delete Education
    function deleteEducation(id) {
        axios.post('/deleteEducation', {
            id: id
        }).then(function (response) {
            if (response.data == 1) {
                alert('Data deleted successfully!');
                $('#educationDeleteConfirmModal').modal('hide');
            } else {
                alert('Data failed to delete!');
                $('#educationDeleteConfirmModal').modal('hide');
            }

        }).catch(function () {
            alert("Server Error!")
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
            if (response.status == 200 && response.data == 1) {
                alert("Data has been updated!");
                $('#eduacationEditModal').modal('hide');
                $('#educationUpdateConfirmModal').modal('hide');
            } else {
                alert("Data failed to update!");
                $('#eduacationEditModal').modal('hide');
                $('#educationUpdateConfirmModal').modal('hide');

            }
        }).catch(function (error) {
            alert("Server Error!");
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
        }).catch(function (error) {
            alert("Server Error!");
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
            alert("Server Error!");
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
                $('#populateObjectives').modal('hide');
                $('#objectiveUpdateModal').modal('hide');
            } else {
                alert('Data failed to update!');
                $('#populateObjectives').modal('hide');
                $('#objectiveUpdateModal').modal('hide');
            }

        }).catch(function () {
            alert("Server Error");
        });
    }

    //populate Objectives
    function populateObjectives(id) {
        axios.post('/populateObjectives', {id: id}).then(function (response) {
            if (response.status == 200) {
                let result = response.data;
                $('#objectivesId').val(result.objectives);
            }
        }).catch(function (error) {
            alert("Server Error!");
        });
    }

    // --------------------------------------END CAREER OBJECTIVES------------------------------------------
</script>
