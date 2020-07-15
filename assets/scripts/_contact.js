/*** CONTACT FORM ******/
$("#contact_form").on("submit", function(ev, frm) {
    ev.preventDefault();

    // alert("elcsipve");

    //get input field values
    var user_name = $("input[name=r_name]").val();
    var user_email = $("input[name=r_email]").val();
    var user_tel = $("input[name=r_tel]").val();
    var user_company = $("input[name=r_company]").val();
    var user_address = $("input[name=r_address]").val();
    var user_msg = $("textarea[name=r_message]").val();
    var user_vehicle = $("input[name=r_vehicle]").val();
    var user_time = $("input[name=r_time]:checked").val();
    // var user_service = $("select[name=r_service]").val();

    var proceed = true;

    if (user_name === "") {
        proceed = false;
    }
    if (user_email === "") {
        proceed = false;
    }

    // if (user_tel === "") {
    //     proceed = false;
    // }

    if ($("input:checkbox[name=r_acceptgdpr]:checked").length < 1) {
        proceed = false;
    }

    //everything looks good! proceed...
    if (proceed) {
        //data to be sent to server
        var post_data = {
            userName: user_name,
            userEmail: user_email,
            userTel: user_tel,
            userCompany: user_company,
            userAddress: user_address,
            userMsg: user_msg,
            userVehicle: user_vehicle,
            userTime: user_time
        };
        $("#contact_submit").addClass("disabled");
        $("#contact_submit").attr("disabled", "disabled");
        // $("#contact_submit").text("Küldés folyamatban");

        //Ajax post data to server
        $.post(
            $("#contact_form").attr("action"),
            post_data,
            function(response) {
                var output = "";

                //load json data from server and output message
                if (response.type === "error") {
                    output = '<p class="itsnotok">' + response.text + "</p>";
                    console.log(response.text);
                } else {
                    output = '<p class="itsok">' + response.text + "</p>";
                    $("#contact_form").addClass("is-alreadysent");
                    $("#successresult").prepend(output);
                    $("#successresult").addClass("is-active");

                    var fn = window.gtag;
                    if (typeof fn === "function") {
                        gtag("event", "sent", {
                            event_category: "form"
                        });
                        console.log("Gtag event fired");
                    } else {
                        console.log("No global gtag defined");
                    }

                    //reset values in all input fields
                    $("#contact_form input").val("");
                    $("#contact_form textarea").val("");
                }
                $("#result")
                    .hide()
                    .html(output)
                    .slideDown();
                $("#contact_submit").removeClass("disabled");
                $("#contact_submit").removeAttr("disabled");
                // $("#contact_submit").text("Pošaljite");
            },
            "json"
        );
    }

    return false;
});

//reset previously set border colors and hide all message on .keyup()
$("#contact_form input, #contact_form textarea, #contact_form #r_acceptgdpr").keyup(function() {
    //$("#contact_form input, #contact_form textarea").css('border-color', '');
    $("#result").slideUp();
    $("#formerror").slideUp();
});

$("#contact_form #r_acceptgdpr").on("change", function() {
    $("#result").slideUp();
    $("#formerror").slideUp();
});
