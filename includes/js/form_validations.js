/**
 * Created by Dell on 9/7/2017.
 */
function confirmPassword(passVal,cnfmPassVal,errorDivId)
{
    var password = $("#"+passVal).val();
    var confirmPassword = $("#"+cnfmPassVal).val();
    var errorDiv = $("#"+errorDivId);

    if(confirmPassword !== password)
    {
        errorDiv.empty();
        errorDiv.append("Password does not match. Please enter same password values");
        $("#"+cnfmPassVal).css("background", "#FFCBCB");
        $("#"+cnfmPassVal).val("");
    }
    else{
        errorDiv.empty();
        $("#"+cnfmPassVal).css("background", "");
    }
}
function validate_labRegistratioForm()
{
    var error_status = 0;
    //Check for Lab Name
    var lab_name_errorMsg = "";
    var lab_name = $("#lab_name").val();

    if (lab_name == "")
    {
        error_status = 1;
        lab_name_errorMsg = "<li style='margin-left: 20px; color: #ff0000;'>Enter Laboratory Name</li>";
        $("#lab_name").css("background", "#FFCBCB");
    }
    else
    {
        lab_name_errorMsg = "";
        $("#lab_name").css("background", "");
    }
    //Check for Lab Address
    var lab_address_errorMsg = "";
    var lab_address = $("#lab_address").val();

    if (lab_address == "")
    {
        error_status = 1;
        lab_address_errorMsg = "<li style='margin-left: 20px; color: #ff0000;'>Enter Laboratory Address</li>";
        $("#lab_address").css("background", "#FFCBCB");
    }
    else
    {
        lab_address_errorMsg = "";
        $("#lab_address").css("background", "");
    }
    //Check for Lab phone number
    var lab_phone_errorMsg = "";
    var lab_phone = $("#lab_phone").val();

    if (lab_phone == "")
    {
        error_status = 1;
        lab_phone_errorMsg = "<li style='margin-left: 20px; color: #ff0000;'>Enter Laboratory Phone Number</li>";
        $("#lab_phone").css("background", "#FFCBCB");
    }
    else
    {
        lab_phone_errorMsg = "";
        $("#lab_phone").css("background", "");
    }
    //Check for Lab Email
    var lab_email_errorMsg = "";
    var lab_email = $("#lab_email").val();

    if (lab_email == "")
    {
        error_status = 1;
        lab_email_errorMsg = "<li style='margin-left: 20px; color: #ff0000;'>Enter Laboratory Email Address</li>";
        $("#lab_email").css("background", "#FFCBCB");
    }
    else
    {
        lab_email_errorMsg = "";
        $("#lab_email").css("background", "");
    }
    //Check for Lab Type %
    var lab_type_errorMsg = "";
    var lab_type = $("#lab_type").val();

    if (lab_type == "")
    {
        error_status = 1;
        lab_type_errorMsg = "<li style='margin-left: 20px; color: #ff0000;'>Select Laboratory Type</li>";
        $("#lab_type").css("background", "#FFCBCB");
    }
    else
    {
        lab_type_errorMsg = "";
        $("#lab_type").css("background", "");
    }
    //Check for Lab Purpose
    var lab_purpose_errorMsg = "";
    var lab_purpose = $("#lab_purpose").val();

    if (lab_purpose == "")
    {
        error_status = 1;
        lab_purpose_errorMsg = "<li style='margin-left: 20px; color: #ff0000;'>Select Laboratory Purpose</li>";
        $("#lab_purpose").css("background", "#FFCBCB");
    }
    else
    {
        lab_purpose_errorMsg = "";
        $("#lab_purpose").css("background", "");
    }
    //Check for other Agency
    var lab_other_certify_name_errorMsg = "";
    var lab_other_certify_name = $("#lab_other_certify_name").val();
    if(document.getElementById("lab_other_certify_name").style.display == "block")
    {
        if (lab_other_certify_name == "")
        {
            error_status = 1;
            lab_other_certify_name_errorMsg = "<li style='margin-left: 20px; color: #ff0000;'>Enter Name of Other Agnecy</li>";
            $("#lab_other_certify_name").css("background", "#FFCBCB");
        }
        else
        {
            lab_other_certify_name_errorMsg = "";
            $("#lab_other_certify_name").css("background", "");
        }
    }
    //Check for contact person Name
    var lab_cp_name_errorMsg = "";
    var lab_cp_name = $("#lab_cp_name").val();

    if (lab_cp_name == "")
    {
        error_status = 1;
        lab_cp_name_errorMsg = "<li style='margin-left: 20px; color: #ff0000;'>Enter Contact Person Name</li>";
        $("#lab_cp_name").css("background", "#FFCBCB");
    }
    else
    {
        lab_cp_name_errorMsg = "";
        $("#lab_cp_name").css("background", "");
    }
    //Check for contact person Email
    var lab_cp_email_errorMsg = "";
    var lab_cp_email = $("#lab_cp_email").val();

    if (lab_cp_email == "")
    {
        error_status = 1;
        lab_cp_email_errorMsg = "<li style='margin-left: 20px; color: #ff0000;'>Enter Contact Person Email</li>";
        $("#lab_cp_email").css("background", "#FFCBCB");
    }
    else
    {
        lab_cp_email_errorMsg = "";
        $("#lab_cp_email").css("background", "");
    }
    //Check for contact person Designation
    var lab_cp_designation_errorMsg = "";
    var lab_cp_designation = $("#lab_cp_designation").val();

    if (lab_cp_designation == "")
    {
        error_status = 1;
        lab_cp_designation_errorMsg = "<li style='margin-left: 20px; color: #ff0000;'>Enter Contact Person Designation</li>";
        $("#lab_cp_designation").css("background", "#FFCBCB");
    }
    else
    {
        lab_cp_designation_errorMsg = "";
        $("#lab_cp_designation").css("background", "");
    }
    //Check for contact person cnic
    var lab_cp_cnic_errorMsg = "";
    var lab_cp_cnic = $("#lab_cp_cnic").val();

    if (lab_cp_cnic == "")
    {
        error_status = 1;
        lab_cp_cnic_errorMsg = "<li style='margin-left: 20px; color: #ff0000;'>Enter Contact Person CNIC</li>";
        $("#lab_cp_cnic").css("background", "#FFCBCB");
    }
    else
    {
        lab_cp_cnic_errorMsg = "";
        $("#lab_cp_cnic").css("background", "");
    }
    //Check for contact person Address
    var lab_cp_address_errorMsg = "";
    var lab_cp_address = $("#lab_cp_address").val();

    if (lab_cp_address == "")
    {
        error_status = 1;
        lab_cp_address_errorMsg = "<li style='margin-left: 20px; color: #ff0000;'>Enter Contact Person Address</li>";
        $("#lab_cp_address").css("background", "#FFCBCB");
    }
    else
    {
        lab_cp_address_errorMsg = "";
        $("#lab_cp_address").css("background", "");
    }
    //Check for contact person Phone
    var lab_cp_phone_errorMsg = "";
    var lab_cp_phone = $("#lab_cp_phone").val();

    if (lab_cp_phone == "")
    {
        error_status = 1;
        lab_cp_phone_errorMsg = "<li style='margin-left: 20px; color: #ff0000;'>Enter Contact Person Phone</li>";
        $("#lab_cp_phone").css("background", "#FFCBCB");
    }
    else
    {
        lab_cp_phone_errorMsg = "";
        $("#lab_cp_phone").css("background", "");
    }
    //Check for Lab Username
    var lab_username_errorMsg = "";
    var lab_username = $("#lab_username").val();

    if (lab_username == "")
    {
        error_status = 1;
        lab_username_errorMsg = "<li style='margin-left: 20px; color: #ff0000;'>Enter Lab Account Username</li>";
        $("#lab_username").css("background", "#FFCBCB");
    }
    else
    {
        lab_username_errorMsg = "";
        $("#lab_username").css("background", "");
    }
    //Check for Lab Password
    var lab_pwd_errorMsg = "";
    var lab_pwd = $("#lab_pwd").val();

    if (lab_pwd == "")
    {
        error_status = 1;
        lab_pwd_errorMsg = "<li style='margin-left: 20px; color: #ff0000;'>Enter Lab Account Password</li>";
        $("#lab_pwd").css("background", "#FFCBCB");
    }
    else
    {
        lab_pwd_errorMsg = "";
        $("#lab_pwd").css("background", "");
    }
    //Check for Lab Confirm Password
    var lab_cnf_pwd_errorMsg = "";
    var lab_cnf_pwd = $("#lab_cnf_pwd").val();

    if (lab_cnf_pwd == "")
    {
        error_status = 1;
        lab_cnf_pwd_errorMsg = "<li style='margin-left: 20px; color: #ff0000;'>Enter Lab Account Password</li>";
        $("#lab_cnf_pwd").css("background", "#FFCBCB");
    }
    else
    {
        lab_cnf_pwd_errorMsg = "";
        $("#lab_cnf_pwd").css("background", "");
    }


    //check Error Status
    if (error_status > 0)
    {
        $("#modalTitle").html("Error");
        $("#modelBody").html(lab_name_errorMsg+lab_address_errorMsg+lab_phone_errorMsg+lab_email_errorMsg+lab_type_errorMsg+lab_purpose_errorMsg+lab_cp_name_errorMsg
            +lab_cp_email_errorMsg+lab_cp_designation_errorMsg+lab_cp_cnic_errorMsg+lab_cp_address_errorMsg+lab_cp_phone_errorMsg+lab_username_errorMsg+lab_pwd_errorMsg+lab_cnf_pwd_errorMsg
        );
        $("#alert_modal").modal();
        //$("#alert_modal .myModelDialog").css("width","40%");
        return false;
    }
    else
    {
        return true;
    }
}

function validate_IndustryRegistrationForm(){
    var error_status = 0;
    //Check for Industry Name
    var ind_name_errorMsg = "";
    var ind_name = $("#ind_name").val();

    if (ind_name == "")
    {
        error_status = 1;
        ind_name_errorMsg = "<li style='margin-left: 20px; color: #ff0000;'>Enter Industry Name</li>";
        $("#ind_name").css("background", "#FFCBCB");
    }
    else
    {
        ind_name_errorMsg = "";
        $("#ind_name").css("background", "");
    }

    //Check for Industry Description
    var ind_description_errorMsg = "";
    var ind_description = $("#ind_description").val();

    if (ind_description == "")
    {
        error_status = 1;
        ind_description_errorMsg = "<li style='margin-left: 20px; color: #ff0000;'>Enter Industry Name</li>";
        $("#ind_description").css("background", "#FFCBCB");
    }
    else
    {
        ind_description_errorMsg = "";
        $("#ind_description").css("background", "");
    }


    //Check for Industry Type
    var ind_type_errorMsg = "";
    var ind_type = $("#ind_type").val();

    if (ind_type == "%")
    {
        error_status = 1;
        ind_type_errorMsg = "<li style='margin-left: 20px; color: #ff0000;'>Select Industry Type</li>";
        $("#ind_type").css("background", "#FFCBCB");
    }
    else
    {
        ind_type_errorMsg = "";
        $("#ind_type").css("background", "");
    }

    //Check for Industry District
    var ind_district_errorMsg = "";
    var ind_district = $("#ind_district").val();

    if (ind_district == "%")
    {
        error_status = 1;
        ind_district_errorMsg = "<li style='margin-left: 20px; color: #ff0000;'>Select Industry District</li>";
        $("#ind_district").css("background", "#FFCBCB");
    }
    else
    {
        ind_district_errorMsg = "";
        $("#ind_district").css("background", "");
    }

    //Check for Industry Address
    var ind_address_errorMsg = "";
    var ind_address = $("#ind_address").val();

    if (ind_address == "")
    {
        error_status = 1;
        ind_address_errorMsg = "<li style='margin-left: 20px; color: #ff0000;'>Enter Industry Address</li>";
        $("#ind_address").css("background", "#FFCBCB");
    }
    else
    {
        ind_address_errorMsg = "";
        $("#ind_address").css("background", "");
    }

    //Check for Industry Phone
    var ind_phone_errorMsg = "";
    var ind_phone = $("#ind_phone").val();

    if (ind_phone == "")
    {
        error_status = 1;
        ind_phone_errorMsg = "<li style='margin-left: 20px; color: #ff0000;'>Enter Industry Phone</li>";
        $("#ind_phone").css("background", "#FFCBCB");
    }
    else
    {
        ind_phone_errorMsg = "";
        $("#ind_phone").css("background", "");
    }

    //Check for Industry Contact Person Name
    var ind_main_cp_name_errorMsg = "";
    var ind_main_cp_name = $("#ind_main_cp_name").val();

    if (ind_main_cp_name == "")
    {
        error_status = 1;
        ind_main_cp_name_errorMsg = "<li style='margin-left: 20px; color: #ff0000;'>Enter Contact Person Name</li>";
        $("#ind_main_cp_name").css("background", "#FFCBCB");
    }
    else
    {
        ind_main_cp_name_errorMsg = "";
        $("#ind_main_cp_name").css("background", "");
    }

    //Check for Industry Contact Person Email
    var ind_main_cp_email_errorMsg = "";
    var ind_main_cp_email = $("#ind_main_cp_email").val();

    if (ind_main_cp_email == "")
    {
        error_status = 1;
        ind_main_cp_email_errorMsg = "<li style='margin-left: 20px; color: #ff0000;'>Enter Contact Person Email</li>";
        $("#ind_main_cp_email").css("background", "#FFCBCB");
    }
    else
    {
        ind_main_cp_email_errorMsg = "";
        $("#ind_main_cp_email").css("background", "");
    }

    //Check for Industry Contact Person Designation
    var ind_main_cp_designation_errorMsg = "";
    var ind_main_cp_designation = $("#ind_main_cp_designation").val();

    if (ind_main_cp_designation == "")
    {
        error_status = 1;
        ind_main_cp_designation_errorMsg = "<li style='margin-left: 20px; color: #ff0000;'>Enter Contact Person Designation</li>";
        $("#ind_main_cp_designation").css("background", "#FFCBCB");
    }
    else
    {
        ind_main_cp_designation_errorMsg = "";
        $("#ind_main_cp_designation").css("background", "");
    }

    //Check for Industry Contact Person CNIC
    var ind_main_cp_cnic_errorMsg = "";
    var ind_main_cp_cnic = $("#ind_main_cp_cnic").val();

    if (ind_main_cp_cnic == "")
    {
        error_status = 1;
        ind_main_cp_cnic_errorMsg = "<li style='margin-left: 20px; color: #ff0000;'>Enter Contact Person CNIC</li>";
        $("#ind_main_cp_cnic").css("background", "#FFCBCB");
    }
    else
    {
        ind_main_cp_cnic_errorMsg = "";
        $("#ind_main_cp_cnic").css("background", "");
    }

    //Check for Industry Contact Person Address
    var ind_cp_address_errorMsg = "";
    var ind_cp_address = $("#ind_cp_address").val();

    if (ind_cp_address == "")
    {
        error_status = 1;
        ind_cp_address_errorMsg = "<li style='margin-left: 20px; color: #ff0000;'>Enter Contact Person CNIC</li>";
        $("#ind_cp_address").css("background", "#FFCBCB");
    }
    else
    {
        ind_cp_address_errorMsg = "";
        $("#ind_cp_address").css("background", "");
    }

    //Check for Industry Contact Person Phone
    var ind_cp_phone_errorMsg = "";
    var ind_cp_phone = $("#ind_cp_phone").val();

    if (ind_cp_phone == "")
    {
        error_status = 1;
        ind_cp_phone_errorMsg = "<li style='margin-left: 20px; color: #ff0000;'>Enter Contact Person CNIC</li>";
        $("#ind_cp_phone").css("background", "#FFCBCB");
    }
    else
    {
        ind_cp_phone_errorMsg = "";
        $("#ind_cp_phone").css("background", "");
    }

    //Check for Industry Username
    var ind_username_errorMsg = "";
    var ind_username = $("#ind_username").val();

    if (ind_username == "")
    {
        error_status = 1;
        ind_username_errorMsg = "<li style='margin-left: 20px; color: #ff0000;'>Enter Industry Username</li>";
        $("#ind_username").css("background", "#FFCBCB");
    }
    else
    {
        ind_username_errorMsg = "";
        $("#ind_username").css("background", "");
    }

    //Check for Industry Password
    var ind_password_errorMsg = "";
    var ind_password = $("#ind_password").val();

    if (ind_password == "")
    {
        error_status = 1;
        ind_password_errorMsg = "<li style='margin-left: 20px; color: #ff0000;'>Enter Industry Username</li>";
        $("#ind_password").css("background", "#FFCBCB");
    }
    else
    {
        ind_password_errorMsg = "";
        $("#ind_password").css("background", "");
    }

    //Check for Industry Conf Password
    var ind_cnf_password_errorMsg = "";
    var ind_cnf_password = $("#ind_cnf_password").val();

    if (ind_cnf_password == "")
    {
        error_status = 1;
        ind_cnf_password_errorMsg = "<li style='margin-left: 20px; color: #ff0000;'>Enter Industry Username</li>";
        $("#ind_cnf_password").css("background", "#FFCBCB");
    }
    else
    {
        ind_cnf_password_errorMsg = "";
        $("#ind_cnf_password").css("background", "");
    }

    //check Error Status
    if (error_status > 0)
    {
        $("#modalTitle").html("Error");
        $("#modelBody").html(ind_name_errorMsg+ind_description_errorMsg+ind_type_errorMsg+ind_district_errorMsg+ind_address_errorMsg+ind_phone_errorMsg+ind_main_cp_name_errorMsg
            +ind_main_cp_email_errorMsg+ind_main_cp_designation_errorMsg+ind_main_cp_cnic_errorMsg+ind_cp_address_errorMsg+ind_cp_phone_errorMsg+ind_username_errorMsg+ind_password_errorMsg+ind_cnf_password_errorMsg
        );
        $("#alert_modal").modal();
        //$("#alert_modal .myModelDialog").css("width","40%");
        return false;
    }
    else
    {
        return true;
    }

}
