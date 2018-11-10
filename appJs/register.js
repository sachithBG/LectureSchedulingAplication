
var rqstRslt ="";
////////////////////////////////////

function validatePWD2() {
    var pwd1 = $("#pwd1").val();
    var pwd2 = $("#pwd2").val();
     if (pwd1 == pwd2) {
         $("#pwd2").notify("success", "success",{ position:"right" });
     }
    $.ajax({
        method : "GET",
        url : LogingUserURL,
        aysnc: true,
        data : {
            Email : $('#email').val(),
            Pwd   : $('#pwd1').val(),
        }
    }).done( function (response) {
        rqstRslt = response;

        //console.log(response);alert(response);
    }).fail(function (xhr, aa,error) {
        alert(error);
        rqstRslt = error;
    });

}

function Validate1(text) {
    var nic = $("#nid").val();
    var pattern1 = RegExp("^\[0-9]{9}[-][V]$");

    if (nic.length == 9 ) {
        text.value = (text.value + "-V");
    }
    if (pattern1.test(text.value)) {
        $("#spnNID").notify("success","success",{ position:"right" });
    }else{
        if (!(text.value = text.value.replace(/[^0-9'\n\r.]+/g, ''))) {
            $("#spnNID").notify("~ 123456789-V","error",{position:"right"});
        }
        text.value = text.value.replace(/[^0-9'\n\r.]+/g, '');
    }
    //////////////////////////////////////////////////////////////for data base cheque

};
$('#Register').click(function(){

    var pwd1 = $("#pwd1").val();
    var pwd2 = $("#pwd2").val();

    if (pwd1 != pwd2) {
        $("#pwd2").notify("Password is different", "error",{ position:"right" });
        return false;
    };
       var NID = $('#nid').val();
});
function handle_form_submission()
{
//alert(rqstRslt);
    if (rqstRslt == "OK"){
        $('#pwd1').notify("This Email and Password allready exist","error",{ position:"right" });
        $('.form-container').effect( "shake" , {times:1.5}, 100);
        return false;
    } else {
        // alert('Submit failed, Enter valied information');
       // alert(rqstRslt);
        return true;
    }

    //do not submit the form
}
//////////////////////////////////////////////////////////////////////////////get table
