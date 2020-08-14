$(document).ready(function() {

    function loginBoxShowHide(){

        if($('.header .toggle-box-login').css('display') === 'none') {

            $('.header .toggle-box-login').fadeIn();

        }else{

            $('.header .toggle-box-login').hide();
        }
    }

    $('.header .btn-login').on('click', function () {

        loginBoxShowHide();
    });
});
