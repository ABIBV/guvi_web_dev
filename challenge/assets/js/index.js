$(document).ready(function() {

    check_session();


    $("#signup_link").click(function(e) {
        e.preventDefault();
        $("#signup_form").trigger("reset");
        $("#signin_section").hide();
        $("#signup_section").show();

    });

    $("#signin_link").click(function(e) {
        e.preventDefault();
        $("#signup_form").trigger("reset");
        $("#signup_section").hide();
        $("#signin_section").show();
    });

    $("#signup_pwd").on('keyup', function() {
        pwd = $(this).val();
        if (pwd.length < 8) {
            $("#signup_pwd").css('border', '2px solid yellow');
            $("#helpId").css("font-weight", "bolder");
        } else {
            $("#signup_pwd").css('border', '2px solid green');
        }
    });



    $('#signup_pwdchk').on('keyup', function() {
        var pwd = $("#signup_pwd").val();
        var chkpwd = $(this).val();
        if (pwd != '' && chkpwd != '') {
            if (chkpwd == pwd) {
                $("#signup_pwdchk").css('border', '2px solid green');
                $("#signup_pwd").css('border', '2px solid green');

            } else {
                $("#signup_pwdchk").css('border', '2px solid red');
                $("#signup_pwd").css('border', '2px solid red');
            }
        }
    });


    $("#signup_btn").click(function(e) {
        e.preventDefault();
        if (passwordValidate()) {
            uname = $("#signup_name").val();
            pwd = $("#signup_pwd").val();
            if (uname != '' && pwd != '') {
                $.ajax({
                    type: "POST",
                    url: "/challenge/assets/php_db/register.php",
                    data: {
                        username: $("#signup_uname").val(),
                        password: $("#signup_pwd").val()
                    },
                    success: function(response) {
                        if (response == "success") {
                            var uname = $("#signup_uname").val()
                            alert("Account created for " + uname);
                        } else {
                            alert("Username already Exists!");
                        }
                        $("#signup_spinner").removeClass("spinner-border");
                        $("#signup_form").trigger("reset");
                    }
                });
            } else {
                alert("Please fill all the fields");
            }
            $("#signup_spinner").addClass("spinner-border");
        }
    });

    $("#signin_btn").click(function(e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: "/challenge/assets/php_db/login.php",
            data: {
                username: $("#signin_uname").val(),
                password: $("#signin_pwd").val()
            },
            success: function(response) {
                if (response == "success") {
                    location.replace("/challenge/assets/php_db/profile.html");
                } else {
                    alert("Incorrect Username/Password");
                }
                $("#signup_form").trigger("reset");
                $("#signin_spinner").removeClass("spinner-border");
            }
        });
        $("#signin_spinner").addClass("spinner-border");
    });

    $("#signup_cancel_btn").click(function(e) {
        e.preventDefault();
        $("#signup_form").trigger("reset");
    });

});

function passwordValidate() {
    pwd = $("#signup_pwd").val();
    pwdchk = $("#signup_pwdchk").val();
    if (pwd == pwdchk) {
        if (pwd.length >= 8) {
            return true;
        } else {
            alert("Password must be atleast 8 characters");
            return false;
        }
    } else {
        alert("Password doesn't match");
        return false;
    }

}

function check_session() {
    $.ajax({
        type: "POST",
        url: "/challenge/assets/php_db/check_session.php",
        success: function(response) {
            if (response == "success") {
                location.replace("/challenge/assets/php_db/profile.html");
                alert("Welcome Back!!!");
            }
        }
    });
}