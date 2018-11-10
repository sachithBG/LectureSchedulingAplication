var rqstRslt = "";
$(function () {
    $('input').iCheck({
        checkboxClass: 'icheckbox_square-blue',
        radioClass: 'iradio_square-blue',
        increaseArea: '20%' /* optional */
    });
});
function pressEmail(){
    document.getElementById("tropic1").style.backgroundColor = "WHITE";
    $('#signin').css('background-color', 'BLUE');
    document.getElementById("session").style.webkitTextFillColor = "GREEN";
    getval();
};
function Validate_lg(text) {
    document.getElementById("tropic1").style.backgroundColor = "WHITE";
    $('#signin').css('background-color', 'BLUE');
    document.getElementById("session").style.webkitTextFillColor = "GREEN";
    getval();
   // pwd = text.value;
   // alert(pwd);
    //  $('.form-container').effect( "shake" , {times:1.5}, 250);
};
function getval(){
    $.ajax({
        method : "GET",
        url : LogingUserURL,
        aysnc: true,
        data : {
            Email : $('#EmailLG').val(),
            Pwd   : $('#pwdLG').val(),
        }
    }).done( function (response) {
        rqstRslt = response;
        if (rqstRslt == "OK"){
            $('#pwdLG').notify("success","success",{ position:"right" });
        }
        //console.log(response);alert(response);
    }).fail(function (xhr, aa,error) {
        // console.log(error);alert(error);
        rqstRslt = error;
    });
}
$('#signin').on('click', function () {
    document.getElementById("session").style.webkitTextFillColor = "RED";
    if('clicked'){
        $('#signin').css('background-color', 'red');

    } else {
        $(this).css('background-color', 'blue');

    }
});

function handle_form_submission()
{
//alert(rqstRslt);
    if (rqstRslt == "OK"){
        return true;
    } else {
        $('.form-container').effect( "shake" , {times:1.5}, 100);
        document.getElementById("tropic1").style.backgroundColor = "RED";
        // alert('Submit failed, Enter valied information');
        return false;
    }

    //do not submit the form
}
