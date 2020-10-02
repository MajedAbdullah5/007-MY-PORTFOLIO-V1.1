@extends('Layout.app')
@section('content')

    <table id="myTable" class="table-bordered">
        <thead>
        <th>ID</th>
        <th>NAME</th>
        <th>EMAIL</th>
        <th>MESSAGE</th>
        <th>DELETE</th>
        </thead>
        <tbody id="messageTableBody">

        </tbody>
    </table>
    {{--delete confrim modal--}}
    <div class="modal fade" id="messgaeDeleteConfirmModal" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <input id="hiddenInput" type="hidden"/>
            <div class="modal-content">
                <div class="modal-body text-center">
                    <h4 id="messgaeDeleteConfirmStatus"></h4>
                    <h4 class="p-5">Do you want to Delete?</h4>
                    <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">No</button>
                    <button id="messgaeDeleteConfirmButton" type="button" class="btn btn-danger btn-sm">Yes</button>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        getMessageList();
    </script>
@endsection
<script>
    function getMessageList() {
        axios.get('/getMessageList').then(function (response) {
            let result = response.data;
            $.each(result, function (i) {
                $('<tr>').html(
                    "<td>" + result[i].id + "</td>" +
                    "<td>" + result[i].message_name + "</td>" +
                    "<td>" + result[i].message_email + "</td>" +
                    "<td>" + result[i].message_message + "</td>" +
                    "<td>" + "<a data-id=" + result[i].id + " class='btn btn-danger btn-sm messageDeleteButton'>Delete</a>" + "</td>"
                ).appendTo('#messageTableBody');
            });
            $('.messageDeleteButton').click(function () {
                let id = $(this).data('id');
                $('#messgaeDeleteConfirmStatus').html(id);
                $('#messgaeDeleteConfirmModal').modal('show');
            });
            $('#messgaeDeleteConfirmButton').click(function () {
                let id = $('#messgaeDeleteConfirmStatus').html();
                deleteMessage(id);
            });
        }).catch(function () {

        });

        function deleteMessage(id) {
            axios.post('/deleteMessage', {
                id: id
            }).then(function (response) {
                if (response.data == 1) {
                    alert("Message has been deleted!");
                }
            }).catch(function () {
                alert("Message failed to delete!");
            });
        }

    }
</script>
