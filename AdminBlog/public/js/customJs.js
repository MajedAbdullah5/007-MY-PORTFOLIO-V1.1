// // //Project
// // function getProjectData(){
// //     axios.get('/getData')
// //         .then(function (response){
// //         let data = response.data;
// //         if(response.status == 200){
// //             $.each(data,function (i){
// //                 $('<tr>').html(
// //                     "<td>"+data[i].id+"</td>"+
// //                     "<td>"+data[i].project_img+"</td>"+
// //                     "<td>"+data[i].project_name+"</td>"+
// //                     "<td>"+data[i].project_des+"</td>"+
// //                     "<td>"+data[i].project_link+"</td>"+
// //                     "<td>"+"<a  data-id=" +data[i].id+" class='btn btn-primary btn-sm editButton'>Edit</a>"+"</td>"+
// //                     "<td>"+"<a  data-id=" +data[i].id+" class='btn btn-danger btn-sm deleteButton'>Delete</a>"+"</td>"
// //
// //                 ).appendTo('#tableBody');
// //             });
// //             $('.editButton').click(function (){
// //                 let dataId = $(this).data('id');
// //                 populateProjectData(dataId);
// //                 $('#projectEditModel').modal('show');
// //             });
// //             $('.deleteButton').click(function (){
// //                 let Id = $(this).data('id');
// //                 alert(Id);
// //                 deleteId(Id);
// //             });
// //
// //         }
// //         else{
// //                 alert('data not found');
// //         }
// //
// //
// //     }).catch(function (error){
// //         alert('data fetch error');
// //     })
// // }
// // function populateProjectData(dataId){
// //     axios.post('/populateData',{
// //         dataId:dataId
// //     })
// //         .then(function (response){
// //             let data = response.data;
// //             if(response.status == 200){
// //                 $('#projectstatus').html(data[0].id);
// //                 $('#projectnameId').val(data[0].project_name);
// //                 $('#projectdesId').val(data[0].project_des);
// //                 $('#projectLinkId').val(data[0].project_link);
// //                 $('#projectimageLinkId').val(data[0].project_img);
// //             }
// //             else{
// //                 alert('From project section failed to fetch data');
// //             }
// //
// //     }).catch(function (error){
// //
// //         alert('From project section failed to fetch data');
// //     });
// // }
// //
// // $('#updateProjectButton').click(function (){
// //         $('#editProjectConfrimModal').modal('show');
// // });
// //
// // $('#confirmProjectChange').click(function (){
// //     let projectid     =       $('#projectstatus').html();
// //     let projectnameId =       $('#projectnameId').val();
// //     let projectdesId=         $('#projectdesId').val();
// //     let projectLinkId=        $('#projectLinkId').val();
// //     let projectimageLinkId=   $('#projectimageLinkId').val();
// //     updateData(projectid,projectnameId, projectdesId,  projectLinkId, projectimageLinkId);
// // });
// // function updateData(projectid,projectnameId, projectdesId,  projectLinkId, projectimageLinkId){
// //     axios.post('/updateData',{
// //         id: projectid,
// //         nameId:projectnameId,
// //         desId:projectdesId,
// //         projectLinkId:projectLinkId,
// //         imageLinkId:projectimageLinkId
// //     }).then(function (response){
// //         // let result = response.data;
// //         // alert(result.data);
// //         // if(result == 1){
// //         //     alert('data updated');
// //         // }
// //         // else{
// //         //     alert("Can't update data");
// //         // }
// //     }).catch(function (error){
// //
// //     });
// // }
// // function deleteId(dataId){
// //     axios.post('/deleteId',{
// //         id:dataId
// //     }).then(function (response){
// //         if(response.data == 1){
// //             alert('data deleted');
// //         }
// //         else{
// //             alert('Data failed to delete');
// //         }
// //
// //     }).catch(function (error){
// //
// //     });
// // }
// //
// //
// //
// //
// //
// //
// //
// //
// //
// //
// //
// //
// //
// //
// //
// //
// //
// //
// //
// //
// //
// //
// //
// //
// //
// //
// //
// //
// //
// //
// //
// //
// //
// //
// //
// //
// //
// //
// // Courses
//
// //Services
// function getServicesData() {
//     axios.get('/dataService')
//         .then(function (response) {
//             $('#loaderDiv').removeClass('d-none');
//             if (response.status == 200) {
//                 $('#mainDiv').removeClass('d-none');
//                 // $('#loaderDiv').addClass('d-none');
//                 let dataJSON = response.data;
//                 $.each(dataJSON, function (i) {
//                     $("<tr>").html(
//                         // "<td>" + dataJSON[i].id + "</td>" +
//                         // "<td>" + " <img style='width: 120px; height: 80px;' src=" + dataJSON[i].service_image + "></td>" +
//                         // "<td>" + dataJSON[i].service_name + "</td> " +
//                         // "<td>" + dataJSON[i].service_des + "</td>" +
//                         // "<td>" + "<a data-id=" + dataJSON[i].id + " class='btn btn-primary btn-sm editBtn'>" +
//                         // "<i class='far fa-edit'></i>&nbsp;Edit</a></td>" +
//                         // "<td><a data-id=" + dataJSON[i].id + " class='btn btn-danger btn-sm deleteBtn'>" +
//                         // "<i class='far fa-trash-alt'></i>&nbsp;Delete</a></td>"
//
//                         "<td>" + dataJSON[i].id+"</td>" +
//                         "<td>" + dataJSON[i].service_image+"</td>" +
//                         "<td>" + dataJSON[i].service_name+"</td>" +
//                         "<td>" + dataJSON[i].service_des+"</td>" +
//                         "<td>" + "<a data-id=" + dataJSON[i].id + " class='btn btn-primary btn-sm editBtn'>Edit</a>"+"</td>" +
//                         "<td>" + "<a data-id=" + dataJSON[i].id + " class='btn btn-danger btn-sm serviceDeleteBtn'>Delete</a>"+"</td>"
//                         )
//                         .appendTo('#service_table');
//                 });
//
//                 $('.serviceDeleteBtn').click(function () {
//                     let id = $(this).data('id');
//                    $('#serviceHiddenInput').html(id);
//                     $('#deleteConfrimModal').modal('show');
//                     setInterval(function () {
//                         $('#deleteConfrimModal').modal('hide');
//                     }, 5000);
//                 });
//                 $('#confirmDeleteChange').click(function () {
//                     let serviceDelete = $('#serviceHiddenInput').html();
//                     alert(serviceDelete);
//                     deleteService(serviceDelete);
//                 });
//
//
//                 $('.editBtn').click(function () {
//                     let id = $(this).data('id');
//                     $('#editModal').modal('show');
//                     editServiceData(id);
//                 });
//                 $('#myTable').DataTable({"order": false});
//                 $('.dataTables_length').addClass('bs-select');
//
//
//             } else {
//                 $('#loaderDiv').addClass('d-none');
//                 $('#wrongDiv').removeClass('d-none');
//             }
//
//         }).catch(function (error) {
//         $('#loaderDiv').addClass('d-none');
//         $('#wrongDiv').removeClass('d-none');
//     });
// }
//
// $('#updateButton').click(function () {
//     $('#editConfrimModal').modal('show');
//     setInterval(function () {
//         $('#editConfrimModal').modal('hide');
//     }, 5000);
// });
//
//
//
//
// $('#addNew').click(function () {
//     setInterval(function () {
//         $('#addModal').modal('hide');
//     }, 15000);
//     $('#addModal').modal('show');
// });
// $('#addButton').click(function () {
//     var name = $('#addName').val();
//     var des = $('#addDes').val();
//     var img = $('#addImg').val();
//     addNew(name, des, img);
// });
//
//
//
// function deleteService(deleteId) {
//     axios.post('/delete', {
//         serviceToDelete: deleteId
//     }).then(function (response) {
//         alert(response.status);
//         alert(response.data);
//         if (response.data == 1) {
//             alert('data deleted');
//             // $('#sideWarningModalTR').modal('show');
//             // $("#icon").html("<i class='fas fa-check'></i>");
//             // $(".modalbody").css('background-color', '#22bb33');
//             // $('.excl').css('color', 'white');
//             // $('#statusToaster').html("Succesfully Deleted!").css('color', 'White');
//             // setInterval(function () {
//             //     $('#sideWarningModalTR').modal('hide');
//             //     getServicesData();
//             // }, 3000);
//         } else {
//             // $('#sideWarningModalTR').modal('show');
//             // $("#icon").html("<i class='fas fa-times'></i>");
//             // $(".modalbody").css('background-color', '#bb2124');
//             // $('.excl').css('color', 'white');
//             // $('#statusToaster').html("Failed to Delete!").css('color', 'White');
//             // setInterval(function () {
//             //     $('#sideWarningModalTR').modal('hide');
//             // }, 3000);
//         }
//     }).catch(function (error) {
//
//         alert('error');
//
//     })
// }
//
// function addNew(newName, newDes, newImg) {
//     axios.post('/add', {
//         name: newName,
//         des: newDes,
//         img: newImg,
//     })
//         .then(function (response) {
//             if (response.data == 1) {
//                 $('#sideWarningModalTR').modal('show');
//                 $("#icon").html("<i class='fas fa-check'></i>");
//                 $(".modalbody").css('background-color', '#22bb33');
//                 $('.excl').css('color', 'white');
//                 $('#statusToaster').html("Succesfully Added!").css('color', 'White');
//                 setInterval(function () {
//                     $('#sideWarningModalTR').modal('hide');
//                 }, 3000);
//             } else {
//                 $('#sideWarningModalTR').modal('show');
//                 $("#icon").html("<i class='fas fa-times'></i>");
//                 $(".modalbody").css('background-color', '#bb2124');
//                 $('.excl').css('color', 'white');
//                 $('#statusToaster').html("Failed to Add!").css('color', 'White');
//                 setInterval(function () {
//                     $('#sideWarningModalTR').modal('hide');
//                 }, 3000);
//             }
//
//         }).catch(function (error) {
//         $('#sideWarningModalTR').modal('show');
//         $("#icon").html("<i class='fas fa-times'></i>");
//         $(".modalbody").css('background-color', '#bb2124');
//         $('.excl').css('color', 'white');
//         $('#statusToaster').html("Something went wrong!").css('color', 'White');
//         setInterval(function () {
//             $('#sideWarningModalTR').modal('hide');
//         }, 3000);
//
//     });
// }
//
// function editServiceData(editId) {
//     axios.post('/edit', {
//         id: editId
//     })
//         .then(function (response) {
//             var data = response.data;
//             if (response.status == 200) {
//                 $('#header').html(data[0].id);
//                 $('#imageLinkId').val(data[0].service_image);
//                 $('#nameId').val(data[0].service_name);
//                 $('#desId').val(data[0].service_des);
//             } else {
//                 $('#sideWarningModalTR').modal('show');
//                 $("#icon").html("<i class='fas fa-times'></i>");
//                 $(".modalbody").css('background-color', '#bb2124');
//                 $('.excl').css('color', 'white');
//                 $('#statusToaster').html("Something went wrong!").css('color', 'White');
//                 setInterval(function () {
//                     $('#sideWarningModalTR').modal('hide');
//                 }, 3000);
//             }
//         }).catch(function (error) {
//
//     })
// }
//
//
// function updateData(editId, editName, editdes, editImg) {
//     //
//     // if (editName.length == 0) {
//     //     $('#sideWarningModalTR').modal('show');
//     //     $("#icon").html("<i class='fas fa-exclamation-triangle'></i>");
//     //     $(".modalbody").css('background-color', 'orange');
//     //     $('.excl').css('color', 'white');
//     //     $('#statusToaster').html("Name can't be empty").css('color', 'White');
//     //     setInterval(function () {
//     //         $('#sideWarningModalTR').modal('hide');
//     //     }, 3000);
//     //
//     // } else if (editdes.length == 0) {
//     //     $('#sideWarningModalTR').modal('show');
//     //     $(".modalbody").css('background-color', 'orange');
//     //     $('.excl').css('color', 'white');
//     //     $('#statusToaster').html("Please give some information").css('color', 'White');
//     //     setInterval(function () {
//     //         $('#sideWarningModalTR').modal('hide');
//     //     }, 3000);
//     // } else if (editImg.length == 0) {
//     //     $('#sideWarningModalTR').modal('show');
//     //     $(".modalbody").css('background-color', 'orange');
//     //     $('.excl').css('color', 'white');
//     //     $('#statusToaster').html("Please insert an image!").css('color', 'White');
//     //     setInterval(function () {
//     //         $('#sideWarningModalTR').modal('hide');
//     //     }, 3000);
//     // } else {
//
//     axios.post('/update', {
//         id: editId,
//         name: editName,
//         des: editdes,
//         img: editImg,
//     }).then(function (response) {
//         if (response.data == 1) {
//             $('#sideWarningModalTR').modal('show');
//             $("#icon").html("<i class='fas fa-check'></i>");
//             $(".modalbody").css('background-color', '#22bb33');
//             $('.excl').css('color', 'white');
//             $('#statusToaster').html("Succesfully Updated!").css('color', 'White');
//             setInterval(function () {
//                 $('#sideWarningModalTR').modal('hide');
//             }, 3000);
//             getServicesData();
//         } else {
//             $('#sideWarningModalTR').modal('show');
//             $("#icon").html("<i class='fas fa-times'></i>");
//             $(".modalbody").css('background-color', '#bb2124');
//             $('.excl').css('color', 'white');
//             $('#statusToaster').html("Failed to Update!").css('color', 'White');
//             setInterval(function () {
//                 $('#sideWarningModalTR').modal('hide');
//             }, 3000);
//         }
//
//     }).catch(function (error) {
//         alert('Something went wrong');
//     })
//
//
//     // }
// }
