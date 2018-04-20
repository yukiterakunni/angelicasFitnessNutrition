// Navigation Scripts to Show Header on Scroll-Up
jQuery(document).ready(function($) {
    var MQL = 692;

    //primary navigation slide-in effect
    if ($(window).width() < MQL) {
        $('#video_home').css("display","none");
        $('#img_destacada_mobil').css("display","block");
    }  else {
        $('#video_home').css("display","block");
        $('#img_destacada_mobil').css("display","none");
    }
});