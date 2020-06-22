$(document).ready(function() {

    $('.btn-reject-confirm-new-camp').on('click',  function () {

        let $idContactInfoCamping = $('.id-contact-info-camp .id-contact-info-camping').text(),
            $action = $(this).text();

        $('.form-in-modal-confirm-reject-new-camp input[name="action"]').attr('value', $action);
        $('.form-in-modal-confirm-reject-new-camp input[name="id-contact-camping"]').attr('value', $idContactInfoCamping);
    });

});
