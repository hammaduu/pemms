/**
 * Created by Dell on 9/8/2017.
 */
//var dropdown_option =null;
//var viewtext = null;
//var url=null;
function getLabFormDropDownLists(dropDownId){
    if(dropDownId=='lab_type'){
        dropdown_option = '#lab_type';
        viewtext = "Select Lab Type";
        url='includes/php/DropDownService.php?dropDownOption=labType';
    }
    else if(dropDownId=='lab_purpose')
    {
        dropdown_option = '#lab_purpose';
        viewtext = "Select Lab Purpose";
        url='includes/php/DropDownService.php?dropDownOption=labPurpose';
    }
    $.ajax({
        url:url,
        success:fillLabTypes
    });
    function fillLabTypes(response){
        var data = jQuery.parseJSON(response);
        var options= $(dropdown_option);
        options.empty();
        options.append($("<option selected disabled />").text(viewtext));
        $.each(data, function () {
            //options.append($("<option />").val(this.id).text(this.name));
            options.append($('<option>', {
                value: this.name,
                text: this.name
            }));
        });
    }
}


function getDistrictsList(dropDownId){
    if(dropDownId=='ind_district'){
        dropdown_option = '#ind_district';
        viewtext = "Select District";
        url='includes/php/DropDownService.php?dropDownOption=industryDistrict';
    }
    $.ajax({
        url:url,
        success:fillDistricts
    });
    function fillDistricts(response){
        var data = jQuery.parseJSON(response);
        var options= $(dropdown_option);
        options.empty();
        options.append($("<option selected disabled />").text(viewtext));
        $.each(data, function () {
            options.append($('<option>', {
                value: this.name,
                text: this.name
            }));
        });
    }
}

function getIndustryType(){
    dropdown_id = '#ind_type';
    text = "Select Industry Type";
    urlIndType='includes/php/DropDownService.php?dropDownOption=indType';
    $.ajax({
        url:urlIndType,
        success:fillIndustryType
    });
    function fillIndustryType(response)
    {
        var data = jQuery.parseJSON(response);
        var options= $(dropdown_id);
        options.empty();
        options.append($("<option selected disabled />").text(text));
        $.each(data, function () {
            options.append($('<option>', {
                value: this.name,
                text: this.name
            }));
        });
    }
}
