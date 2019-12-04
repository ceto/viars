(function($) {})(jQuery); // Fully reference jQuery after this point.

$(document).foundation();

$(document).ready(function() {
    //iFrameResize({ log: true }, ".deltaframe");
});

$(".vehiclecard").on("click", ".startrequest", function(e) {
    // console.log(
    //     $(this)
    //         .closest(".vehiclecard")
    //         .find(".vehiclecard__title")
    //         .text()
    // );
    $("#requestmodal .mobilemodal__head h3").text(
        $(this)
            .closest(".vehiclecard")
            .find(".vehiclecard__title")
            .text()
    );
    $("#requestmodal .mobilemodal__head p").html(
        $(this)
            .closest(".vehiclecard")
            .find(".tpers strong")
            .html()
    );
    $("#requestmodal .mobilemodal__head figure img").attr(
        "src",
        $(this)
            .closest(".vehiclecard")
            .find("img")
            .attr("src")
    );
});

iFrameResize(
    {
        log: false
    },
    ".deltaiframe"
);
