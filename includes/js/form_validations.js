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

/***    APPLICATION APPROVAL FORM VALIDATION    ***/
function validate_ApprovalApplicationForm(){
    var error_status = 0;
    //Check for Project Title
    var proj_title_errorMsg = "";
    var proj_title = $("#ind_proj_title").val();

    if (proj_title == "")
    {
        error_status = 1;
        proj_title_errorMsg = "<li style='margin-left: 20px; color: #ff0000;'>Enter Project Title</li>";
        $("#ind_proj_title").css("background", "#FFCBCB");
    }
    else
    {
        proj_title_errorMsg = "";
        $("#ind_proj_title").css("background", "");
    }

    //Check for Project Description
    var proj_description_errorMsg = "";
    var proj_description = $("#ind_proj_description").val();

    if (proj_description == "")
    {
        error_status = 1;
        proj_description_errorMsg = "<li style='margin-left: 20px; color: #ff0000;'>Enter Project Description</li>";
        $("#ind_proj_description").css("background", "#FFCBCB");
    }
    else
    {
        proj_description_errorMsg = "";
        $("#ind_proj_description").css("background", "");
    }


    //Check for Project Objectives
    var proj_objective_errorMsg = "";
    var proj_objective = $("#ind_proj_objective").val();

    if (proj_objective == "")
    {
        error_status = 1;
        proj_objective_errorMsg = "<li style='margin-left: 20px; color: #ff0000;'>Select Project Objectives</li>";
        $("#ind_proj_objective").css("background", "#FFCBCB");
    }
    else
    {
        proj_objective_errorMsg = "";
        $("#ind_proj_objective").css("background", "");
    }

    //Check for Project Industry Type
    var proj_ind_type_errorMsg = "";
    var proj_ind_type = $("#ind_proj_ind_type").val();

    if (proj_ind_type == "%")
    {
        error_status = 1;
        proj_ind_type_errorMsg = "<li style='margin-left: 20px; color: #ff0000;'>Select Industry Type</li>";
        $("#ind_proj_ind_type").css("background", "#FFCBCB");
    }
    else
    {
        proj_ind_type_errorMsg = "";
        $("#ind_proj_ind_type").css("background", "");
    }

    //Check for Project District
    var proj_district_errorMsg = "";
    var proj_district = $("#ind_proj_district").val();

    if (proj_district == "%")
    {
        error_status = 1;
        proj_district_errorMsg = "<li style='margin-left: 20px; color: #ff0000;'>Enter Project District</li>";
        $("#ind_proj_district").css("background", "#FFCBCB");
    }
    else
    {
        proj_district_errorMsg = "";
        $("#ind_proj_district").css("background", "");
    }

    //Check for Project Address
    var proj_address_errorMsg = "";
    var proj_address = $("#ind_proj_address").val();

    if (proj_address == "")
    {
        error_status = 1;
        proj_address_errorMsg = "<li style='margin-left: 20px; color: #ff0000;'>Enter Project Address</li>";
        $("#ind_proj_address").css("background", "#FFCBCB");
    }
    else
    {
        proj_address_errorMsg = "";
        $("#ind_proj_address").css("background", "");
    }

    //Check for Project Cost
    var proj_cost_errorMsg = "";
    var proj_cost = $("#ind_proj_cost").val();

    if (proj_cost == "")
    {
        error_status = 1;
        proj_cost_errorMsg = "<li style='margin-left: 20px; color: #ff0000;'>Enter Project Cost</li>";
        $("#ind_proj_cost").css("background", "#FFCBCB");
    }
    else
    {
        proj_cost_errorMsg = "";
        $("#ind_proj_cost").css("background", "");
    }

    //Check for Project Phone
    var proj_phone_errorMsg = "";
    var proj_phone = $("#ind_proj_phone").val();

    if (proj_phone == "")
    {
        error_status = 1;
        proj_phone_errorMsg = "<li style='margin-left: 20px; color: #ff0000;'>Enter Project Phone</li>";
        $("#ind_proj_phone").css("background", "#FFCBCB");
    }
    else
    {
        proj_phone_errorMsg = "";
        $("#ind_proj_phone").css("background", "");
    }

    //Check for Project Proponent Name
    var propo_name_errorMsg = "";
    var propo_name = $("#ind_propo_name").val();

    if (propo_name == "")
    {
        error_status = 1;
        propo_name_errorMsg = "<li style='margin-left: 20px; color: #ff0000;'>Enter Project Proponent Name</li>";
        $("#ind_propo_name").css("background", "#FFCBCB");
    }
    else
    {
        propo_name_errorMsg = "";
        $("#ind_propo_name").css("background", "");
    }

    //Check for Proponent Address
    var propo_address_errorMsg = "";
    var propo_address = $("#ind_propo_address").val();

    if (propo_address == "")
    {
        error_status = 1;
        propo_address_errorMsg = "<li style='margin-left: 20px; color: #ff0000;'>Enter Proponent Address</li>";
        $("#ind_propo_address").css("background", "#FFCBCB");
    }
    else
    {
        propo_address_errorMsg = "";
        $("#ind_propo_address").css("background", "");
    }

    //Check for Proponent Phone
    var propo_phone_errorMsg = "";
    var propo_phone = $("#ind_propo_phone").val();

    if (propo_phone == "")
    {
        error_status = 1;
        propo_phone_errorMsg = "<li style='margin-left: 20px; color: #ff0000;'>Enter Proponent Phone</li>";
        $("#ind_propo_phone").css("background", "#FFCBCB");
    }
    else
    {
        propo_phone_errorMsg = "";
        $("#ind_propo_phone").css("background", "");
    }

    //Check for Proponent Landline No
    var propo_landline_phone_errorMsg = "";
    var propo_landline_phone = $("#ind_propo_landline_phone").val();

    if (propo_landline_phone == "")
    {
        error_status = 1;
        propo_landline_phone_errorMsg = "<li style='margin-left: 20px; color: #ff0000;'>Enter Proponent Landline No</li>";
        $("#ind_propo_landline_phone").css("background", "#FFCBCB");
    }
    else
    {
        propo_landline_phone_errorMsg = "";
        $("#ind_propo_landline_phone").css("background", "");
    }

    //Check for Proponent CNIC
    var propo_cnic_errorMsg = "";
    var propo_cnic = $("#ind_propo_cnic").val();

    if (propo_cnic == "")
    {
        error_status = 1;
        propo_cnic_errorMsg = "<li style='margin-left: 20px; color: #ff0000;'>Enter Proponent CNIC</li>";
        $("#ind_propo_cnic").css("background", "#FFCBCB");
    }
    else
    {
        propo_cnic_errorMsg = "";
        $("#ind_propo_cnic").css("background", "");
    }

    //Check for Proponent Email
    var propo_email_errorMsg = "";
    var propo_email = $("#ind_propo_email").val();

    if (propo_email == "")
    {
        error_status = 1;
        propo_email_errorMsg = "<li style='margin-left: 20px; color: #ff0000;'>Enter Proponent Email</li>";
        $("#ind_propo_email").css("background", "#FFCBCB");
    }
    else
    {
        propo_email_errorMsg = "";
        $("#ind_propo_email").css("background", "");
    }

    //Check for Project Contact Person Name
    var ind_cp_name_errorMsg = "";
    var ind_cp_name = $("#ind_cp_name").val();

    if (ind_cp_name == "")
    {
        error_status = 1;
        ind_cp_name_errorMsg = "<li style='margin-left: 20px; color: #ff0000;'>Enter Contact Person Name</li>";
        $("#ind_cp_name").css("background", "#FFCBCB");
    }
    else
    {
        ind_cp_name_errorMsg = "";
        $("#ind_cp_name").css("background", "");
    }

    //Check for Project Contact Person Email
    var ind_cp_email_errorMsg = "";
    var ind_cp_email = $("#ind_cp_email").val();

    if (ind_cp_email == "")
    {
        error_status = 1;
        ind_cp_email_errorMsg = "<li style='margin-left: 20px; color: #ff0000;'>Enter Contact Person Email</li>";
        $("#ind_cp_email").css("background", "#FFCBCB");
    }
    else
    {
        ind_cp_email_errorMsg = "";
        $("#ind_cp_email").css("background", "");
    }

    //Check for Project Contact Person Designation
    var ind_cp_designation_errorMsg = "";
    var ind_cp_designation = $("#ind_cp_designation").val();

    if (ind_cp_designation == "")
    {
        error_status = 1;
        ind_cp_designation_errorMsg = "<li style='margin-left: 20px; color: #ff0000;'>Enter Contact Person Designation</li>";
        $("#ind_cp_designation").css("background", "#FFCBCB");
    }
    else
    {
        ind_cp_designation_errorMsg = "";
        $("#ind_cp_designation").css("background", "");
    }

    //Check for Project Contact Person CNIC
    var ind_cp_cnic_errorMsg = "";
    var ind_cp_cnic = $("#ind_cp_cnic").val();

    if (ind_cp_cnic == "")
    {
        error_status = 1;
        ind_cp_cnic_errorMsg = "<li style='margin-left: 20px; color: #ff0000;'>Enter Contact Person CNIC</li>";
        $("#ind_cp_cnic").css("background", "#FFCBCB");
    }
    else
    {
        ind_cp_cnic_errorMsg = "";
        $("#ind_cp_cnic").css("background", "");
    }

    //Check for Project Contact Person Address
    var ind_cp_address_errorMsg = "";
    var ind_cp_address = $("#ind_cp_address").val();

    if (ind_cp_address == "")
    {
        error_status = 1;
        ind_cp_address_errorMsg = "<li style='margin-left: 20px; color: #ff0000;'>Enter Contact Person Address</li>";
        $("#ind_cp_address").css("background", "#FFCBCB");
    }
    else
    {
        ind_cp_address_errorMsg = "";
        $("#ind_cp_address").css("background", "");
    }

    //Check for Project Contact Person Phone
    var ind_cp_phone_errorMsg = "";
    var ind_cp_phone = $("#ind_cp_phone").val();

    if (ind_cp_phone == "")
    {
        error_status = 1;
        ind_cp_phone_errorMsg = "<li style='margin-left: 20px; color: #ff0000;'>Enter Contact Person phone</li>";
        $("#ind_cp_phone").css("background", "#FFCBCB");
    }
    else
    {
        ind_cp_phone_errorMsg = "";
        $("#ind_cp_phone").css("background", "");
    }

    //Check for Consultant Details
    var ind_consultant_details = $("#ind_consultant_details").val();
    var consultant_name_errorMsg = "";
    var consultant_name = $("#consultant_name").val();
    var consultant_email_errorMsg = "";
    var consultant_email = $("#consultant_email").val();
    var consultant_cnic_errorMsg = "";
    var consultant_cnic = $("#consultant_cnic").val();
    var consultant_address_errorMsg = "";
    var consultant_address = $("#consultant_address").val();
    var consultant_phone_errorMsg = "";
    var consultant_phone = $("#consultant_phone").val();
    var consultant_ntn_errorMsg = "";
    var consultant_ntn = $("#consultant_ntn").val();
    var consultant_pec_errorMsg = "";
    var consultant_pec = $("#consultant_pec").val();
    var consultant_username_errorMsg = "";
    var consultant_username = $("#consultant_username").val();
    var consultant_pwd_errorMsg = "";
    var consultant_pwd = $("#consultant_pwd").val();
    var consultant_cnf_pwd_errorMsg = "";
    var consultant_cnf_pwd = $("#consultant_cnf_pwd").val();

    var ind_proj_consultant_errorMsg = "";
    var ind_proj_consultant = $("#ind_proj_consultant").val();

    var cons_option = $('input[name=consultant_options]:checked', '#ind_approval_form').val();
    if(cons_option == 'reg_new_consultant')
    {
        //Check for Project Consultant
        if (consultant_name == "")
        {
            error_status = 1;
            consultant_name_errorMsg = "<li style='margin-left: 20px; color: #ff0000;'>Enter Consultant</li>";
            $("#consultant_name").css("background", "#FFCBCB");
        }
        else
        {
            consultant_name_errorMsg = "";
            $("#consultant_name").css("background", "");
        }
        //Check for Project Consultant Email
        if (consultant_email == "")
        {
            error_status = 1;
            consultant_email_errorMsg = "<li style='margin-left: 20px; color: #ff0000;'>Enter Consultant Email</li>";
            $("#consultant_email").css("background", "#FFCBCB");
        }
        else
        {
            consultant_email_errorMsg = "";
            $("#consultant_email").css("background", "");
        }
        //Check for Project Consultant CNIC
        if (consultant_cnic == "")
        {
            error_status = 1;
            consultant_cnic_errorMsg = "<li style='margin-left: 20px; color: #ff0000;'>Enter Consultant CNIC</li>";
            $("#consultant_cnic").css("background", "#FFCBCB");
        }
        else
        {
            consultant_cnic_errorMsg = "";
            $("#consultant_cnic").css("background", "");
        }
        //Check for Project Consultant Address
        if (consultant_address == "")
        {
            error_status = 1;
            consultant_address_errorMsg = "<li style='margin-left: 20px; color: #ff0000;'>Enter Consultant Address</li>";
            $("#consultant_address").css("background", "#FFCBCB");
        }
        else
        {
            consultant_address_errorMsg = "";
            $("#consultant_address").css("background", "");
        }
        //Check for Project Consultant Phone
        if (consultant_phone == "")
        {
            error_status = 1;
            consultant_phone_errorMsg = "<li style='margin-left: 20px; color: #ff0000;'>Enter Consultant Phone</li>";
            $("#consultant_phone").css("background", "#FFCBCB");
        }
        else
        {
            consultant_phone_errorMsg = "";
            $("#consultant_phone").css("background", "");
        }
        //Check for Project Consultant NTN
        if (consultant_ntn == "")
        {
            error_status = 1;
            consultant_ntn_errorMsg = "<li style='margin-left: 20px; color: #ff0000;'>Enter Consultant NTN</li>";
            $("#consultant_ntn").css("background", "#FFCBCB");
        }
        else
        {
            consultant_ntn_errorMsg = "";
            $("#consultant_ntn").css("background", "");
        }
        //Check for Project Consultant PEC
        if (consultant_pec == "")
        {
            error_status = 1;
            consultant_pec_errorMsg = "<li style='margin-left: 20px; color: #ff0000;'>Enter Consultant PEC</li>";
            $("#consultant_pec").css("background", "#FFCBCB");
        }
        else
        {
            consultant_pec_errorMsg = "";
            $("#consultant_pec").css("background", "");
        }
        //Check for Consultant Username
        if (consultant_username == "")
        {
            error_status = 1;
            consultant_username_errorMsg = "<li style='margin-left: 20px; color: #ff0000;'>Enter Consultant Username</li>";
            $("#consultant_username").css("background", "#FFCBCB");
        }
        else
        {
            consultant_username_errorMsg = "";
            $("#consultant_username").css("background", "");
        }
        //Check for Consultant Password
        if (consultant_pwd == "")
        {
            error_status = 1;
            consultant_pwd_errorMsg = "<li style='margin-left: 20px; color: #ff0000;'>Enter Password</li>";
            $("#consultant_pwd").css("background", "#FFCBCB");
        }
        else
        {
            consultant_pwd_errorMsg = "";
            $("#consultant_pwd").css("background", "");
        }
        //Check for Consultant Conf Password
        if (consultant_cnf_pwd == "")
        {
            error_status = 1;
            consultant_cnf_pwd_errorMsg = "<li style='margin-left: 20px; color: #ff0000;'>Enter Password Again</li>";
            $("#consultant_cnf_pwd").css("background", "#FFCBCB");
        }
        else
        {
            consultant_cnf_pwd_errorMsg = "";
            $("#consultant_cnf_pwd").css("background", "");
        }
    }
    else
    {
        if (ind_proj_consultant == "%")
        {
            error_status = 1;
            ind_proj_consultant_errorMsg = "<li style='margin-left: 20px; color: #ff0000;'>Select Consultant</li>";
            $("#ind_proj_consultant").css("background", "#FFCBCB");
        }
        else
        {
            ind_proj_consultant_errorMsg = "";
            $("#ind_proj_consultant").css("background", "");
        }
    }

    //check Error Status
    if (error_status > 0)
    {
        $("#modalTitle").html("Error");
        $("#modelBody").html(proj_title_errorMsg + proj_description_errorMsg + proj_objective_errorMsg + proj_ind_type_errorMsg
                + proj_district_errorMsg + proj_address_errorMsg + proj_cost_errorMsg + proj_phone_errorMsg
                + propo_name_errorMsg + propo_address_errorMsg + propo_phone_errorMsg + propo_landline_phone_errorMsg
                + propo_cnic_errorMsg + propo_email_errorMsg
                + ind_cp_name_errorMsg + ind_cp_email_errorMsg + ind_cp_designation_errorMsg + ind_cp_cnic_errorMsg
                + ind_cp_address_errorMsg + ind_cp_phone_errorMsg
                + consultant_name_errorMsg + consultant_email_errorMsg + consultant_cnic_errorMsg + consultant_address_errorMsg
                + consultant_phone_errorMsg + consultant_ntn_errorMsg + consultant_pec_errorMsg + consultant_username_errorMsg
                + consultant_pwd_errorMsg + consultant_cnf_pwd_errorMsg
                + ind_proj_consultant_errorMsg
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

/***    CONSULTANT REGISTRATION FORM VALIDATION    ***/
function validate_ConsultatnRegistrationForm(){
    var error_status = 0;

    //Check for Consultant
    var consultant_name_errorMsg = "";
    var consultant_name = $("#consultant_name").val();
    if (consultant_name == "")
    {
        error_status = 1;
        consultant_name_errorMsg = "<li style='margin-left: 20px; color: #ff0000;'>Enter Consultant</li>";
        $("#consultant_name").css("background", "#FFCBCB");
    }
    else
    {
        consultant_name_errorMsg = "";
        $("#consultant_name").css("background", "");
    }
    //Check for Consultant Email
    var consultant_email_errorMsg = "";
    var consultant_email = $("#consultant_email").val();
    if (consultant_email == "")
    {
        error_status = 1;
        consultant_email_errorMsg = "<li style='margin-left: 20px; color: #ff0000;'>Enter Consultant Email</li>";
        $("#consultant_email").css("background", "#FFCBCB");
    }
    else
    {
        consultant_email_errorMsg = "";
        $("#consultant_email").css("background", "");
    }
    //Check for Consultant CNIC
    var consultant_cnic_errorMsg = "";
    var consultant_cnic = $("#consultant_cnic").val();
    if (consultant_cnic == "")
    {
        error_status = 1;
        consultant_cnic_errorMsg = "<li style='margin-left: 20px; color: #ff0000;'>Enter Consultant CNIC</li>";
        $("#consultant_cnic").css("background", "#FFCBCB");
    }
    else
    {
        consultant_cnic_errorMsg = "";
        $("#consultant_cnic").css("background", "");
    }
    //Check for Consultant Address
    var consultant_address_errorMsg = "";
    var consultant_address = $("#consultant_address").val();
    if (consultant_address == "")
    {
        error_status = 1;
        consultant_address_errorMsg = "<li style='margin-left: 20px; color: #ff0000;'>Enter Consultant Address</li>";
        $("#consultant_address").css("background", "#FFCBCB");
    }
    else
    {
        consultant_address_errorMsg = "";
        $("#consultant_address").css("background", "");
    }
    //Check for Consultant Phone
    var consultant_phone_errorMsg = "";
    var consultant_phone = $("#consultant_phone").val();
    if (consultant_phone == "")
    {
        error_status = 1;
        consultant_phone_errorMsg = "<li style='margin-left: 20px; color: #ff0000;'>Enter Consultant Phone</li>";
        $("#consultant_phone").css("background", "#FFCBCB");
    }
    else
    {
        consultant_phone_errorMsg = "";
        $("#consultant_phone").css("background", "");
    }
    //Check for Consultant NTN
    var consultant_ntn_errorMsg = "";
    var consultant_ntn = $("#consultant_ntn").val();
    if (consultant_ntn == "")
    {
        error_status = 1;
        consultant_ntn_errorMsg = "<li style='margin-left: 20px; color: #ff0000;'>Enter Consultant NTN</li>";
        $("#consultant_ntn").css("background", "#FFCBCB");
    }
    else
    {
        consultant_ntn_errorMsg = "";
        $("#consultant_ntn").css("background", "");
    }
    //Check for Consultant PEC
    var consultant_pec_errorMsg = "";
    var consultant_pec = $("#consultant_pec").val();
    if (consultant_pec == "")
    {
        error_status = 1;
        consultant_pec_errorMsg = "<li style='margin-left: 20px; color: #ff0000;'>Enter Consultant PEC</li>";
        $("#consultant_pec").css("background", "#FFCBCB");
    }
    else
    {
        consultant_pec_errorMsg = "";
        $("#consultant_pec").css("background", "");
    }
    //Check for Consultant Username
    var consultant_username_errorMsg = "";
    var consultant_username = $("#consultant_username").val();
    if (consultant_username == "")
    {
        error_status = 1;
        consultant_username_errorMsg = "<li style='margin-left: 20px; color: #ff0000;'>Enter Consultant Username</li>";
        $("#consultant_username").css("background", "#FFCBCB");
    }
    else
    {
        consultant_username_errorMsg = "";
        $("#consultant_username").css("background", "");
    }
    //Check for Consultant Password
    var consultant_pwd_errorMsg = "";
    var consultant_pwd = $("#consultant_pwd").val();
    if (consultant_pwd == "")
    {
        error_status = 1;
        consultant_pwd_errorMsg = "<li style='margin-left: 20px; color: #ff0000;'>Enter Password</li>";
        $("#consultant_pwd").css("background", "#FFCBCB");
    }
    else
    {
        consultant_pwd_errorMsg = "";
        $("#consultant_pwd").css("background", "");
    }
    //Check for Consultant Conf Password
    var consultant_cnf_pwd_errorMsg = "";
    var consultant_cnf_pwd = $("#consultant_cnf_pwd").val();
    if (consultant_cnf_pwd == "")
    {
        error_status = 1;
        consultant_cnf_pwd_errorMsg = "<li style='margin-left: 20px; color: #ff0000;'>Enter Password Again</li>";
        $("#consultant_cnf_pwd").css("background", "#FFCBCB");
    }
    else
    {
        consultant_cnf_pwd_errorMsg = "";
        $("#consultant_cnf_pwd").css("background", "");
    }

    //check Error Status
    if (error_status > 0)
    {
        $("#modalTitle").html("Error");
        $("#modelBody").html(consultant_name_errorMsg + consultant_email_errorMsg + consultant_cnic_errorMsg + consultant_address_errorMsg
            + consultant_phone_errorMsg + consultant_ntn_errorMsg + consultant_pec_errorMsg + consultant_username_errorMsg
            + consultant_pwd_errorMsg + consultant_cnf_pwd_errorMsg
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

function validate_FirmRegistrationForm(){

    //Check for consultancy_firm_name
    var error_status = 0;
    var consultancy_firm_name_errorMsg = "";
    var consultancy_firm_name = $("#consultancy_firm_name").val();

    if (consultancy_firm_name == "")
    {
        error_status = 1;
        consultancy_firm_name_errorMsg = "<li style='margin-left: 20px; color: #ff0000;'>Enter Firm Name</li>";
        $("#consultancy_firm_name").css("background", "#FFCBCB");
    }
    else
    {
        consultancy_firm_name_errorMsg = "";
        $("#consultancy_firm_name").css("background", "");
    }

    //Check for consultancy_firm_email
    var consultancy_firm_email_errorMsg = "";
    var consultancy_firm_email = $("#consultancy_firm_email").val();

    if (consultancy_firm_email == "")
    {
        error_status = 1;
        consultancy_firm_email_errorMsg = "<li style='margin-left: 20px; color: #ff0000;'>Enter Firm Email</li>";
        $("#consultancy_firm_email").css("background", "#FFCBCB");
    }
    else
    {
        consultancy_firm_email_errorMsg = "";
        $("#consultancy_firm_email").css("background", "");
    }


    //Check for consultancy_firm_address
    var consultancy_firm_address_errorMsg = "";
    var consultancy_firm_address = $("#consultancy_firm_address").val();

    if (consultancy_firm_address == "")
    {
        error_status = 1;
        consultancy_firm_address_errorMsg = "<li style='margin-left: 20px; color: #ff0000;'>Enter Firm Address</li>";
        $("#consultancy_firm_address").css("background", "#FFCBCB");
    }
    else
    {
        consultancy_firm_address_errorMsg = "";
        $("#consultancy_firm_address").css("background", "");
    }

    //Check for consultancy_firm_phone
    var consultancy_firm_phone_errorMsg = "";
    var consultancy_firm_phone = $("#consultancy_firm_phone").val();

    if (consultancy_firm_phone == "")
    {
        error_status = 1;
        consultancy_firm_phone_errorMsg = "<li style='margin-left: 20px; color: #ff0000;'>Enter Firm Phone</li>";
        $("#consultancy_firm_phone").css("background", "#FFCBCB");
    }
    else
    {
        consultancy_firm_phone_errorMsg = "";
        $("#consultancy_firm_phone").css("background", "");
    }

    //Check for consultancy_firm_ntn
    var consultancy_firm_ntn_errorMsg = "";
    var consultancy_firm_ntn= $("#consultancy_firm_ntn").val();

    if (consultancy_firm_ntn == "")
    {
        error_status = 1;
        consultancy_firm_ntn_errorMsg = "<li style='margin-left: 20px; color: #ff0000;'>Enter Firm NTN Number</li>";
        $("#consultancy_firm_ntn").css("background", "#FFCBCB");
    }
    else
    {
        consultancy_firm_ntn_errorMsg = "";
        $("#consultancy_firm_ntn").css("background", "");
    }

    //Check for consultancy_firm_pwd
    var consultancy_firm_pwd_errorMsg = "";
    var consultancy_firm_pwd= $("#consultancy_firm_pwd").val();

    if (consultancy_firm_pwd == "")
    {
        error_status = 1;
        consultancy_firm_pwd_errorMsg = "<li style='margin-left: 20px; color: #ff0000;'>Enter Firm Password</li>";
        $("#consultancy_firm_pwd").css("background", "#FFCBCB");
    }
    else
    {
        consultancy_firm_pwd_errorMsg = "";
        $("#consultancy_firm_pwd").css("background", "");
    }

    //Check for consultancy_firm_cnf_pwd
    var consultancy_firm_cnf_pwd_errorMsg = "";
    var consultancy_firm_cnf_pwd= $("#consultancy_firm_cnf_pwd").val();

    if (consultancy_firm_cnf_pwd == "")
    {
        error_status = 1;
        consultancy_firm_cnf_pwd_errorMsg = "<li style='margin-left: 20px; color: #ff0000;'>Enter Firm Confirm Password</li>";
        $("#consultancy_firm_cnf_pwd").css("background", "#FFCBCB");
    }
    else
    {
        consultancy_firm_cnf_pwd_errorMsg = "";
        $("#consultancy_firm_cnf_pwd").css("background", "");
    }

    //Check for consultancy_firm_pec
    var consultancy_firm_pec_errorMsg = "";
    var consultancy_firm_pec= $("#consultancy_firm_pec").val();

    if (consultancy_firm_pec == "")
    {
        error_status = 1;
        consultancy_firm_pec_errorMsg = "<li style='margin-left: 20px; color: #ff0000;'>Enter PEC Registration number</li>";
        $("#consultancy_firm_pec").css("background", "#FFCBCB");
    }
    else
    {
        consultancy_firm_pec_errorMsg = "";
        $("#consultancy_firm_pec").css("background", "");
    }
    //Check for consultancy_firm_username
    var consultancy_firm_username_errorMsg = "";
    var consultancy_firm_username= $("#consultancy_firm_username").val();

    if (consultancy_firm_username == "")
    {
        error_status = 1;
        consultancy_firm_username_errorMsg = "<li style='margin-left: 20px; color: #ff0000;'>Enter Firm Username</li>";
        $("#consultancy_firm_username").css("background", "#FFCBCB");
    }
    else
    {
        consultancy_firm_username_errorMsg = "";
        $("#consultancy_firm_username").css("background", "");
    }



    //check Error Status
    if (error_status > 0)
    {
        $("#modalTitle").html("Error");
        $("#modelBody").html(consultancy_firm_name_errorMsg + consultancy_firm_email_errorMsg  + consultancy_firm_address_errorMsg + consultancy_firm_phone_errorMsg +
        consultancy_firm_ntn_errorMsg + consultancy_firm_pec_errorMsg  + consultancy_firm_username_errorMsg+  consultancy_firm_pwd_errorMsg +  consultancy_firm_cnf_pwd_errorMsg);
        $("#alert_modal").modal();
        //$("#alert_modal .myModelDialog").css("width","40%");
        return false;
    }
    else
    {
        return true;
    }
}