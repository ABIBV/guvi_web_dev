<!doctype html>
<html lang="en">

<head>
    <title>Profile</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Google Web Fonts and Icons-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Custom CSS-->
    <link rel="stylesheet" href="/challenge/assets/css/profile.css">
</head>

<body>

    <div class="jumbotron jumbotron-fluid">

        <div class="container col-sm-8 p-1">
      
            <div class="row">
                <div class="col-sm-4 text-center">
                    <img class="rounded-circle   mx-auto  bg-white" src="/challenge/assets/images/user.svg" alt="" width="150px"> 
                    <br>
                    <button id="signout_btn" title="Sign Out" class="btn text-danger my-2">Sign Out</button>
                </div>
                <div class="col-sm-8 ">
                  <div class="container pl-3">
                  <h1 id="username_head_tag" class="display-4">User Name</h1>
                    <p id="user_email" class="lead">
                        @email
                    </p>
                    <a id="edit_profile_link" href="#" class="my-3"> Edit Profile </a>
                  </div>
                    
                </div>
            </div>
        </div>
    </div>

    <div id="profile_data" class="container">
        <table class="table table-responsive-sm table-borderless">
            <tr>
                <th> <label class="lead" for="Username">Username:</label> </th>
                <td> <label id="username_label" class="display-5" for="Username">Username</label> </td>
                <th> <label class="lead" for="Name">Name:</label> </th>
                <td> <p id="name_label" class="display-5" for="Name">Nill</p> </td>
            </tr>
            <tr>
                <th> <label class="lead" for="Degree">Degree:</label> </th>
                <td> <p id="degree_label" class="display-5" for="Degree">Nill</p> </td>
                <th> <label class="lead" for="Dob">Date of Birth:</label> </th>
                <td> <p id="dob_label" class="display-5" for="Dob">Nill</p></td>
            </tr><tr>
                <th>  <label class="lead" for="Email">Email:</label> </th>
                <td> <p id="email_label" class="display-5" for="Email">Nill</p> </td>
                <th> <label class="lead" for="Phone">Phone:</label> </th>
                <td> <p id="phone_label" class="display-5" for="Phone">Nill</p> </td>
            </tr>><tr>
                <th> <label class="lead" for="Address">Address:</labe> </th>
                <td colp="3"> <p id="address_label" class="display-5" for="Address">Nill</p> </td>
            </tr><tr>
                <th> <label class="lead" for="Linkedin">Linkedin:</label> </th>
                <td> <p id="linkedin_label" class="display-5" for="Linkedin">Nill</p> </td>
                <th> <label class="lead" for="Github">Github:</label> </th>
                <td> <p id="github_label" class="display-5" for="Github">Nill</p> </td>
            </tr>
        </table>
        <div class="text-center">
            <button id="update_btn" class="btn btn-primary">Update Profile</button>
            <button id="edit_cancel" class="btn btn-secondary">Cancel</button>
        </div>
    </div>

    <!--Custom JS-->
    <script src="/challenge/assets/js/jquery-3.4.1.min.js"></script>
    <script src="/challenge/assets/js/profile.js"></script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
 <!--   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>