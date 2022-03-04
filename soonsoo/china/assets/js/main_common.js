

$(document).ready(function () {

    var curr_tabs = 'tab-1';

    jQuery(".sec4_cont_bg ul").children("li").on("click", function () {
        var thisContents = jQuery(this).attr("contents");
        console.log(jQuery("#" + thisContents).is(":visible"));
        if (jQuery("#" + thisContents).is(":visible")) {
            jQuery("#" + thisContents).hide();
        } else {
            jQuery(".sec4_cont_bg").children(".com_pop").hide();
            jQuery("#" + thisContents).show();
        }
    });


   

    jQuery("#tabs-menu").children("li").on("click", function () {
        var thisContents = jQuery(this).attr("contents");
        console.log(jQuery("#" + thisContents).is(":visible"));
        if (jQuery("#" + thisContents).is(":visible")) {
            jQuery("#" + thisContents).hide();
            $('.sec2_none').show();
        } else {
            jQuery(".tabs_content_wrap").children(".tabs-content").hide();
            jQuery("#" + thisContents).show();
            $('.sec2_none').hide();
        }

    });
    
    
    
});

