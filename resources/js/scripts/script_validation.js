$(document).ready(function() {

    let $role = $('.main-register input[name="user-role"]');

    function preventSubmit(e) {

        if(!$role.is(':checked')){

            e.preventDefault();
        }

    }

    $('.register-form').on('submit', function (e) {

        preventSubmit(e);
    });

});
