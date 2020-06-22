$(document).ready(function() {

    //V A R I A B L E S
    let radioBtnsAttr = ['Δωμάτια', 'Εστιατόριο', 'Market','Bar', 'Κοινόχρηστη Κουζίνα', 'Κοινόχρηστο Σίδερο', 'Τροχόσπιτα', 'Τουαλέτες για άτομα με ειδ. ανάγκες', 'Beach Volley', 'Tennis', 'Football 5x5', 'Ping-Pong', 'Μπάσκετ', 'Πισίνα', 'Visa', 'Master', 'Other Cards'],
        $colAttrTitle = {
            'id_user': 'ID',
            'username': 'Username',
            'password': 'Password',
            'email': 'Email',
            'created_at': 'Created at',
            'email_camping': 'Email Camping',
            'website': 'Website',
            'tel': 'Τηλέφωνο',
            'postcode': 'ΤΚ',
            'area_gr': 'Περιοχή',
            'name_gr': 'Όνομα Κάμπινγκ',
            'address_gr': 'Διεύθυνση',
            'city_gr': 'Πόλη / Νησί',
            'name_en': 'Name Camping',
            'address_en': 'Address',
            'city_en': 'City / Island',
            'distance_sea': 'Απόσταση από τη θάλασσα (σε m)',
            'places': 'Αρ. Θέσεων',
            'area_sq': 'Έκταση (σε τμ)',
            'room': 'Δωμάτια',
            'restaurant': 'Εστιατόριο',
            'market': 'Market',
            'bar': 'Bar',
            'cooking_facil': 'Κοινόχρηστη Κουζίνα',
            'ironic_facil': 'Κοινόχρηστο Σίδερο',
            'hanticapped_people': 'Τουαλέτες για άτομα με ειδ. ανάγκες',
            'mobil_home': 'Τροχόσπιτα',
            'beach_volley': 'Beach Volley',
            'tennis': 'Tennis',
            'football_5x5': 'Football 5x5',
            'ping_pong': 'Ping-Pong',
            'basket': 'Μπάσκετ',
            'pool': 'Πισίνα',
            'description_en': 'Description',
            'description_gr': 'Περιγραφή',
            'visa': 'Visa',
            'master': 'Master',
            'other_card': 'Other Cards'
        },
        $titleTable = {
            'id_user': 'users',
            'username': 'users',
            'password': 'users',
            'email': 'users',
            'created_at': 'users',
            'email_camping': 'contact_info_campings',
            'website': 'contact_info_campings',
            'tel': 'contact_info_campings',
            'postcode': 'contact_info_campings',
            'area_gr': 'contact_info_campings',
            'name_gr': 'campings_gr',
            'address_gr': 'campings_gr',
            'city_gr': 'campings_gr',
            'name_en': 'campings_en',
            'address_en': 'campings_en',
            'city_en': 'campings_en',
            'distance_sea': 'facilities',
            'places': 'facilities',
            'area_sq': 'facilities',
            'room': 'facilities',
            'restaurant': 'facilities',
            'market': 'facilities',
            'bar': 'facilities',
            'cooking_facil': 'facilities',
            'ironic_facil': 'facilities',
            'hanticapped_people': 'facilities',
            'mobil_home': 'facilities',
            'beach_volley': 'sports_facilities',
            'tennis': 'sports_facilities',
            'football_5x5': 'sports_facilities',
            'ping_pong': 'sports_facilities',
            'basket': 'sports_facilities',
            'pool': 'sports_facilities',
            'description_en': 'descriptions',
            'description_gr': 'descriptions',
            'visa': 'cards',
            'master': 'cards',
            'other_card': 'cards'
        };

    //F U N C T I O N S
    function fillModalEditInfo(sel){

        let titleEditedInfo = sel.parent().parent().prev().children('.p-title-edited-info').text(),
            updateInfo = $.trim(sel.parent().children('.update-info').text()),
            updateInfoDescription = $.trim(sel.parent().children('.update-info').text());

        $('.modal-edit-info .label-updated-info').text(titleEditedInfo);

        if(titleEditedInfo === 'Περιοχή'){

            $('.modal-edit-info input[name="update-info"]').css('display', 'none'); // "update-info-area"
            $('.modal-edit-info #update-description').css('display', 'none');
            $('.modal-edit-info #update-area').css('display', 'block');

            for(let i = 0; i < 13; i++){

                if($('.modal-edit-info option:eq(' + i + ')').text() === updateInfo){

                    $('.modal-edit-info option:eq(' + i + ')').attr('selected', true);
                }
            }

        }else if(titleEditedInfo === 'Περιγραφή' || titleEditedInfo === 'Description'){

            $('.modal-edit-info input[name="update-info"]').css('display', 'none');
            $('.modal-edit-info #update-area').css('display', 'none');
            $('.modal-edit-info #update-description').css('display', 'block').val(updateInfo);

        }else if($.inArray(titleEditedInfo, radioBtnsAttr) > -1){

            if(updateInfo === 'Ναι'){

                updateInfo = '1';

            }else if(updateInfo === 'Όχι'){

                updateInfo = '0';
            }

            for(let i = 0; i < 2; i++){

                if($('.modal-edit-info .radio-btn:eq(' + i + ')').val() === updateInfo){

                    $('.modal-edit-info .radio-btn').attr('checked', false);
                    $('.modal-edit-info .radio-btn:eq(' + i + ')').attr('checked', true);
                    break;
                }

            }

        }else{

            $('.modal-edit-info #update-area').css('display', 'none');
            $('.modal-edit-info #update-description').css('display', 'none');
            $('.modal-edit-info input[name="update-info"]').css('display', 'block').attr('value', updateInfo);
        }

        for(let i in $colAttrTitle) {

            if ($colAttrTitle[i] === titleEditedInfo) {

                $('.modal-edit-info input[name="hidden-updated-col"]').attr('value', i);
                $('.modal-edit-info input[name="hidden-table"]').attr('value', $titleTable[i]);
                break;
            }
        }
    }


   $('.dashboard-main .btn-edit-info').click(function() {

       fillModalEditInfo($(this));

   });

});
