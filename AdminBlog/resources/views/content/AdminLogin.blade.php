   @extends('Layout.app2')
   @section('content')
   <div class="container text-center adminContainer">
       <div class=" adminSecondContainer">
           <h3>ADMIN LOGIN</h3>
           <div class="row adminRow">
               <form action=" " class='loginForm'>
                   <div class="col col-md-6">
                       <img height="170px" src="{{asset('image/banner/contact.jpg')}}">
                   </div>
                   <div class="col col-md-6">
                       <div class="form-group">
                           <input name="userName" value="" class="form-control" type="text" id="adminName"
                               placeholder="NAME" required>
                           <input name="userPass" value="" class="form-control" type="text" id="adminPass"
                               placeholder="PASSWORD" required>
                           <button name="submit" type="submit"
                               class=" form-control d-block btn btn-danger">LOGIN</button>
                       </div>
                   </div>
               </form>
           </div>
       </div>
   </div>
   @endsection
   @section('script')
   <script type="text/javascript">
$('.loginForm').on('submit', function(event) {
    event.preventDefault();
    let formData = $(this).serializeArray();
    let userName = formData[0]['value'];
    let userPass = formData[1]['value'];
    axios.post('/login', {
    user : userName,
    pass : userPass
    }).
    then(function(response) {
            if(response.status == 200 && response.data == 1){
                window.location.href="/";
            }
            else{
                alert("No user found!")
            }
    }).catch(function(error) {

    });


});
   </script>
   @endsection
