<!doctype html>
<html lang="en">

<head>
    <title>Guvi</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Custom css -->
    <link rel="stylesheet" href="/challenge/assets/css/index.css">

     <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="/challenge/assets/js/jquery-3.4.1.min.js"></script>
    <script src="/challenge/assets/js/index.js"></script>
</head>

<body>
    <div id="modal" class="container shadow-lg rounded">
        <div class="row">
            <div class="col-sm-4 text-center my-auto mx-0.1s">
                <img class="rounded-circle bg-primary" src="assets/images/user.svg" alt="" width="200px">
            </div>
            <div id="signup_section" class="col-sm-8">
                <form id="signup_form" action="">
                    <div class="form-group">
                        <label class="lead" for="Username">Username:</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">@</span>
                            </div>
                            <input type="text" id="signup_uname" class="form-control" required>
                        </div>
                    <label class="small font-weight-bold text-warning"  for="warning">Can't be changed later</label>
                    </div>


                    <div class="row">
                        <div class="form-group col-sm-6">
                            <label class="lead" for="Password">Password:</label>
                            <div></div>
                            <input type="password" id="signup_pwd" class="form-control" required>
                            <small id="helpId" class="text-muted">Must contain atleast 8 characters</small>
                        </div>
                        <div class="form-group col-sm-6">
                            <label class="lead" for="Retype_Password">Retype Password:</label>
                            <input type="password" id="signup_pwdchk" class="form-control" required>
                        </div>
                    </div>


        
                    
                    <button id="signup_btn" class="btn btn-primary container-fluid my-1 ">SIGN UP  
                    <span class="spinner-border-sm mr-3" id="signup_spinner" role="status" aria-hidden="true"></span>
                    </button>
                    <button id="signup_cancel_btn" class="btn btn-secondary container-fluid my-1">Cancel</button>
                    <div class="text-center my-1">
                        <p>Already a member? <a id="signin_link" href="">Sign In</a></p>
                    </div>
                </form>
            </div>
            <div id="signin_section" class="col-sm-8">
                <div class="form-group">
                    <label for="Username">Username:</label>
                    <input type="text" id="signin_uname" class="form-control" required>
                    <br>
                </div>
                <div class="form-group">
                    <label for="Password">Password:</label>
                    <input type="password" id="signin_pwd" class="form-control" required>
                </div>
                <button id="signin_btn" class="btn btn-primary container-fluid my-1">SIGN IN
                <span class="spinner-border-sm mr-3" id="signin_spinner" role="status" aria-hidden="true"></span>
                </button>
                <button id="signin_cancel_btn" type="submit" class="btn btn-secondary container-fluid my-1">Cancel</button>
                <div class="text-center my-1">
                    <p>Create Account <a id="signup_link" href="">Sign Up</a></p>
                </div>
            </div>
        </div>
    </div>

   

</body>

</html>