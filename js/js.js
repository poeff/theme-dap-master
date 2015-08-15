jQuery(document).ready(function($){

    $('.piereg_loginform input[type=text]').addClass('form-control');
    $('.piereg_loginform input[type=textarea]').addClass('form-control');
    $('.piereg_loginform input[type=password]').addClass('form-control');
    $('#wp-submit').removeClass('button button-primary button-large').addClass('btn btn-primary');
    $('.piereg_submit_button input').addClass('btn btn-primary');
    $('#pie_regiser_form input[type=submit]').addClass('btn btn-primary');
    $('.restricted').bind("cut copy paste",function(e) {
        alert('Clipboard has been disabled on this page.');     
        e.preventDefault();
    });

});