$(document).ready(function() {

    loadData();

    $("#signout_btn").click(function(e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: "/challenge/assets/php_db/logout.php",
            success: function(response) {
                if (response == "success") {
                    alert("Your are successfully signed out...");
                    location.replace('/challenge/index.html');
                } else {
                    alert("Sorry, Unexpected error encountered at our side");
                }
            }
        });
    });

    $("#edit_profile_link").click(function(e) {
        e.preventDefault();
        $("#profile_data table tr td p").attr("contenteditable", true);
        $("#profile_data table tr td p").css("color", "cornflowerblue");
        $("#update_btn, #edit_cancel").show();

    });

    $("#update_btn").click(function(e) {
        e.preventDefault();
        jsonobj = {};
        jsonobj["Name"] = $("#name_label").html();
        jsonobj["Degree"] = $("#degree_label").html();
        jsonobj["Dob"] = $("#dob_label").html();
        jsonobj["Email"] = $("#email_label").html();
        jsonobj["Phone"] = $("#phone_label").html();
        jsonobj["Address"] = $("#address_label").html();
        jsonobj["Linkedin"] = $("#linkedin_label").html();
        jsonobj["Github"] = $("#github_label").html();

        $.ajax({
            type: "POST",
            url: "/challenge/assets/php_db/update_profile.php",
            data: {
                object: jsonobj,
                username: $("#username_label").text()
            },
            success: function(response) {
                if (response == 'success') {
                    alert("Successfully Updated")
                    finishUpdate();
                    loadData();
                } else if (response == "session out") {
                    alert("Please Log In");
                    location.replace("/challenge/index.html");
                } else {
                    alert("Error on Updation");
                }
            }
        });
    });

    function finishUpdate() {
        $("#profile_data table tr td p").css("color", "black");
        $("#profile_data table tr td p").attr("contenteditable", false);
        $("#update_btn, #edit_cancel").hide();
    }

    $("#edit_cancel").click(function(e) {
        e.preventDefault();
        finishUpdate();
    })

});


function loadData() {
    $.ajax({
        type: "POST",
        url: "/challenge/assets/php_db/profile_home.php",
        success: function(response) {
            if (response != "failed") {
                resp = response.split('**sep**');
                console.log(resp[1]);

                obj = JSON.parse(resp[1]);
                console.log(obj);
                $("#username_head_tag").text(resp[0]);
                $('#username_label').text(resp[0]);
                $("#user_email").text('@' + obj["Email"]);
                $("#name_label").text(obj["Name"]);
                $("#degree_label").text(obj["Degree"]);
                $("#dob_label").text(obj["Dob"]);
                $("#email_label").text(obj["Email"]);
                $("#phone_label").text(obj["Phone"]);
                $("#address_label").text(obj["Address"]);
                $("#linkedin_label").text(obj["Linkedin"]);
                $("#github_label").text(obj["Github"]);
            } else {
                location.replace("/challenge/index.html");
                alert("Please Sign In");

            }
        }
    });
}