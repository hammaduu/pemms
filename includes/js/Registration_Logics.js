/**
 * Created by Dell on 9/7/2017.
 */

$("form.registrationForm").submit(function(event){
    var formId = this.id;
    var isFormValid=false;
    var url = null;
    //disable the default form submission
    //onkeypress='return event.charCode >= 48 && event.charCode <= 57'
    event.preventDefault();
    var formData = new FormData($(this)[0]);
    if(formId=='lab_registration_form'){
        url = "includes/php/processApplications.php?applicationType=newLabRegistration";
        isFormValid = validate_labRegistratioForm();
    }
    else if(formId=='ind_reg_form')
    {
        url = "includes/php/processApplications.php?applicationType=newIndustryRegistration";
        isFormValid = validate_IndustryRegistrationForm();
    }
    if(isFormValid){
        bootbox.confirm({
            message: "Are you sure to submit this application",
            buttons: {
                confirm: {
                    label: 'Submit',
                    className: 'btn-success'
                },
                cancel: {
                    label: 'Cancel',
                    className: 'btn-danger'
                }
            },
            callback: function (result) {
                console.log('This was logged in the callback: ' + result);
                bootbox.hideAll();
                if(result){
                    $.ajax({
                        url: url,
                        type: 'POST',
                        data: formData,
                        async: false,
                        cache: false,
                        contentType: false,
                        processData: false,
                        success: function (response) {
                            var data = jQuery.parseJSON(response);
                            if(data.status == 1){
                                //success response
                                alert(data.message);
                            }else{
                                //failure response
                                alert(data.message);
                                return false;
                            }
                            location.reload();
                        },
                        error: function(data, errorThrown){
                            console.log(errorThrown);
                            location.reload();
                        }
                    });
                    return false;
                }
                else{
                    bootbox.hideAll();
                }
            }
        });
    }
});


//$( "#reg_lab" ).click(function() {
//    var isFormValid = validate_labRegistratioForm();
//});