$(document).ready(function() {
    let passwordVerification = $('#pass').attr('value');
    $('#pass').on('keyup', function (){
        if($(this).val().length < 6) {
            $("#pass_length_check").text('Enter atleast 6 characters, you have entered ' + $(this).val().length);
        }
        else {
            $('#pass_length_check').hide();
        }
    });
});


