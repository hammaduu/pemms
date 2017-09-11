/**
 * Created by Adi on 8/28/2017.
 */

$(document).ready(function(){
    $('input[name="reg_options"]').change(function(){
        var reg_option = this.value;
        if(reg_option == "lab_registration"){
            $("#btn_consultant_reg_opt").hide();
            $("#ind_approval_form").hide();
            $("#consultant_reg_form").hide();
            $("#consultant_firm_reg_form").hide();
            $("#ind_reg_form").hide();
            $("#lab_registration_form").show();
        } else if(reg_option == "industry_approval_application"){
            $("#btn_consultant_reg_opt").hide();
            $("#lab_registration_form").hide();
            $("#consultant_reg_form").hide();
            $("#consultant_firm_reg_form").hide();
            $("#ind_reg_form").hide();
            $("#ind_approval_form").show();
        } else if(reg_option == 'industry_registration'){
            $("#btn_consultant_reg_opt").hide();
            $("#lab_registration_form").hide();
            $("#consultant_reg_form").hide();
            $("#consultant_firm_reg_form").hide();
            $("#ind_approval_form").hide();
            $("#ind_reg_form").show();
        }
        else{
            $("#lab_registration_form").hide();
            $("#ind_approval_form").hide();
            $("#ind_reg_form").hide();
            $("#btn_consultant_reg_opt").show();
        }
    });
    /** CERTIFY BY ANY OTHER ENTITY **/
    $('input[name="consultancy_reg_opt"]').change(function(){
        var certify_option = this.value;
        if(certify_option == "individual_consultant"){
            $("#consultant_reg_form").show();
            $("#consultant_firm_reg_form").hide();
        }
        else{
            $("#consultant_reg_form").hide();
            $("#consultant_firm_reg_form").show();
        }
    });
    /** CERTIFY BY ANY OTHER ENTITY **/
    $('input[name="certify_other"]').change(function(){
        var certify_option = this.value;
        if(certify_option == "no"){
            $("#other_certification_agency").hide();
        }
        else{
            $("#other_certification_agency").show();
        }
    });
    /** CONSULTANT OPTIONS DURING APPROVAL APPLICATION  **/
    $('input[name="consultant_options"]').change(function(){
        var consultant_option = this.value;
        if(consultant_option == "existing_consultant"){
            $("#ind_consultant_details").hide();
            $("#consultant_selection").show();
        } else{
            $("#consultant_selection").hide();
            $("#ind_consultant_details").show();
        }
    });


    /**     **/
    $("#form").on('submit',(function(e) {

        e.preventDefault();
        $.ajax({
            url: "includes/php/upload-image-ajax.php",
            type: "POST",
            data:  new FormData(this),
            contentType: false,
            cache: false,
            processData:false,
            beforeSend : function()
            {
                //$("#preview").fadeOut();
                $("#err").fadeOut();
            },
            success: function(data) {
                /*alert(data);*/
                if(data=='invalid file') {
                    // invalid file format.
                    $("#err").html("Invalid File !").fadeIn();
                } else {
                    // view uploaded file.
                    $("#image").attr('src', data);
                    $("#file_upload_success").modal('show');
                    /* $("#preview").html(data).fadeIn();*/
                    $("#form")[0].reset();
                }
            },
            error: function(e)
            {
                $("#err").html(e).fadeIn();
            }
        });
    }));

});