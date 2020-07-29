(function($) {})(jQuery); // Fully reference jQuery after this point.

$(document).foundation();

$(document).ready(function() {
    //iFrameResize({ log: true }, ".deltaframe");
});

$(".js-startstrmodal").on("click", function(e) {
});

$(".vehiclecard").on("click", ".startrequest", function(e) {
    if ($(this).closest(".vehiclecard").find('[data-strenabled]').length===1) {
        $("#requestmodal #strradio").css('display','block');
        $("#requestmodal #strradio input[type=checkbox]").prop('disabled',false).prop('checked',false);
        // $('#requestmodal #strradio input[type=checkbox]').siblings('input[type=checkbox]').prop('checked', false);
        $("#requestmodal #ltrradio input[type=checkbox]").prop('disabled',false).prop('checked',false);

    } else {
        $("#requestmodal #strradio").css('display','none');
        $("#requestmodal #ltrradio input[type=checkbox]").prop('checked',true).prop('disabled', true);
        // $('#requestmodal #ltrradio input[type=checkbox]').siblings('input[type=checkbox]').prop('checked', false);
        $("#requestmodal #strradio input[type=checkbox]").prop('checked', false).prop('disabled',true);
    }
    $("#requestmodal .mobilemodal__head h3").text(
        $(this)
            .closest(".vehiclecard")
            .find(".vehiclecard__title")
            .text()
    );
    $("#requestmodal #r_vehicle").val(
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

$(".homecarousel").slick({
    mobileFirst: true,
    infinite: true,
    autoplay: true,
    autoplaySpeed: 3000,
    arrows: false,
    slidesToShow: 1,
    slidesToScroll: 1,
    dots: true,
    adaptiveHeight: true,
    responsive: [
        {
            breakpoint: 1280,
            settings: {
                dots: true,
                arrows: true,
                slidesToShow: 1,
                slidesToScroll: 1,
                adaptiveHeight: true
            }
        }
    ]
});

if ($(".deltaframe").length) {
    iFrameResize(
        {
            log: false
        },
        ".deltaframe"
    );
}
