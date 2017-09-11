<?php
/**
 * Created by PhpStorm.
 * User: Dell
 * Date: 9/8/2017
 * Time: 3:01 AM
 */
 include "Connection.php";
 class ProcessApplications extends Connection{
     public function saveNewLabRegistration(){
         $lab_name = $_REQUEST['lab_name'];
         $lab_address = $_REQUEST['lab_address'];
         $lab_phone = $_REQUEST['lab_phone'];
         $lab_email = $_REQUEST['lab_email'];
         $lab_type = $_REQUEST['lab_type'];
         $lab_purpose = $_REQUEST['lab_purpose'];
         $epa_certify = $_REQUEST['epa_certify'];
         $certify_other = $_REQUEST['certify_other'];
        if($certify_other=='no'){
            $lab_other_certify_name = "NA";
        }
         else{
             $lab_other_certify_name = $_REQUEST['lab_other_certify_name'];
         }
         $lab_cp_name = $_REQUEST['lab_cp_name'];
         $lab_cp_email = $_REQUEST['lab_cp_email'];
         $lab_cp_designation = $_REQUEST['lab_cp_designation'];
         $lab_cp_cnic = $_REQUEST['lab_cp_cnic'];
         $lab_cp_address = $_REQUEST['lab_cp_address'];
         $lab_cp_phone = $_REQUEST['lab_cp_phone'];
         $lab_username = $_REQUEST['lab_username'];
         $lab_pwd = $_REQUEST['lab_pwd'];
         $lab_cnf_pwd = $_REQUEST['lab_cnf_pwd'];
         $this->connectionDB();
         $sql_user = "START TRANSACTION;
         INSERT INTO tbl_user(full_name, user_name, password, user_type, user_role)
            VALUES ('$lab_name', '$lab_username', '$lab_cnf_pwd','Laboratory', 'Lab');
            COMMIT;";
         $sql_user_query = pg_query($sql_user);

         $sql_Lab="START TRANSACTION;
         INSERT INTO tbl_lab(full_name, lab_type, lab_purpose, epa_certify, other_certify,other_certify_name,
            lab_address, lab_phone, lab_email, cp_name, cp_email, cp_designation,
            cp_cnic, cp_address, cp_phone, lab_user_name)
    VALUES ('$lab_name', '$lab_type', '$lab_purpose', '$epa_certify', '$certify_other',
            '$lab_other_certify_name', '$lab_address', '$lab_phone', '$lab_email', '$lab_cp_name', '$lab_cp_email',
            '$lab_cp_designation', '$lab_cp_cnic', '$lab_cp_address', '$lab_cp_phone','$lab_username');
             COMMIT;";
         $sql_Lab_query = pg_query($sql_Lab);
         if($sql_Lab_query){
             $msg = array("status"=> '1',    "message"=>"Application Submitted Sccessfully...");
             $this->closeConnection();
            echo json_encode($msg);
         }
         else{
             $msg = array("status"=> '0',    "message"=>"Application Submission Rejected, Something went wrong with processing.");
             $this->closeConnection();
             echo json_encode($msg);
         }
     }
     public function saveNewIndustryRegistration(){
         $ind_name = $_REQUEST['ind_name'];
         $ind_description = $_REQUEST['ind_description'];
         $ind_type = $_REQUEST['ind_type'];
         $ind_district = $_REQUEST['ind_district'];
         $ind_address = $_REQUEST['ind_address'];
         $ind_phone = $_REQUEST['ind_phone'];
         $ind_main_cp_name= $_REQUEST['ind_main_cp_name'];
         $ind_main_cp_email= $_REQUEST['ind_main_cp_email'];
         $ind_main_cp_designation = $_REQUEST['ind_main_cp_designation'];
         $ind_main_cp_cnic = $_REQUEST['ind_main_cp_cnic'];
         $ind_cp_address = $_REQUEST['ind_cp_address'];
         $ind_cp_phone = $_REQUEST['ind_cp_phone'];
         $ind_username = $_REQUEST['ind_username'];
         $ind_password = $_REQUEST['ind_password'];
         $ind_cnf_password = $_REQUEST['ind_cnf_password'];
         $this->connectionDB();
         $sql_user = "START TRANSACTION;
         INSERT INTO tbl_user(full_name, user_name, password, user_type, user_role)
            VALUES ('$ind_name', '$ind_username', '$ind_cnf_password','Industry', 'Industry');
            COMMIT;";
         $sql_user_query = pg_query($sql_user);
         if($sql_user_query){
           $sql_industry = "START TRANSACTION;
           INSERT INTO tbl_industry(
            full_name, ind_description, ind_type, ind_district, ind_address,
            ind_phone, ind_cp_name, ind_cp_email, ind_cp_designation, ind_cp_cnic,
            ind_cp_address, ind_cp_phone, ind_user_name)
            VALUES ('$ind_name', '$ind_description', '$ind_type', '$ind_district', '$ind_address',
            '$ind_phone', '$ind_main_cp_name', '$ind_main_cp_email', '$ind_main_cp_designation', '$ind_main_cp_cnic',
            '$ind_cp_address', '$ind_cp_phone', '$ind_username');
            COMMIT";
             $sql_industry_query = pg_query($sql_industry);
             if($sql_industry_query){
                 $msg = array("status"=> '1',    "message"=>"Application Submitted Sccessfully...");
                 $this->closeConnection();
                 echo json_encode($msg);
             }
             else{
                 $msg = array("status"=> '0',    "message"=>"Application Submission Rejected, Something went wrong with processing.");
                 $this->closeConnection();
                 echo json_encode($msg);
             }
         }
         else{
             $msg = array("status"=> '0',    "message"=>"Application Submission Rejected, Something went wrong with processing.");
             $this->closeConnection();
             echo json_encode($msg);
         }

     }

     public function saveApprovalApplication()
     {
         $ind_proj_title = $_REQUEST['ind_proj_title'];
         $ind_proj_description = $_REQUEST['ind_proj_description'];
         $ind_proj_objective = $_REQUEST['ind_proj_objective'];
         $ind_proj_ind_type = $_REQUEST['ind_proj_ind_type'];
         $ind_proj_district = $_REQUEST['ind_proj_district'];
         $ind_proj_address = $_REQUEST['ind_proj_address'];
         $ind_proj_cost = $_REQUEST['ind_proj_cost'];
         $ind_proj_phone = $_REQUEST['ind_proj_phone'];
         $ind_propo_name = $_REQUEST['ind_propo_name'];
         $ind_propo_address = $_REQUEST['ind_propo_address'];
         $ind_propo_phone = $_REQUEST['ind_propo_phone'];
         $ind_propo_landline_phone = $_REQUEST['ind_propo_landline_phone'];
         $ind_propo_cnic = $_REQUEST['ind_propo_cnic'];
         $ind_propo_email = $_REQUEST['ind_propo_email'];
         $ind_cp_name = $_REQUEST['ind_cp_name'];
         $ind_cp_email = $_REQUEST['ind_cp_email'];
         $ind_cp_designation = $_REQUEST['ind_cp_designation'];
         $ind_cp_cnic = $_REQUEST['ind_cp_cnic'];
         $ind_cp_address = $_REQUEST['ind_cp_address'];
         $ind_cp_phone = $_REQUEST['ind_cp_phone'];
         $proj_code = null;$ind_proj_consultant=null;
         if(isset($_REQUEST['ind_proj_consultant'])){$ind_proj_consultant = $_REQUEST['ind_proj_consultant'];}
         else{$ind_proj_consultant = $_REQUEST['consultant_username'];}
         $this->connectionDB();
         $sql_getCode = "select max(proj_code) as approvalAppCode from tbl_application_approval";
         $getCode_query = pg_query($sql_getCode);
         $codeCount = pg_num_rows($getCode_query);
         if($codeCount > 0){$proj_code = $codeCount+1;}
         else{$proj_code = 1;}
         $sql_approval_entry = "START TRANSACTION;
            INSERT INTO tbl_application_approval(
            proj_title, proj_description, proj_objective,  industry_type, district, proj_address,
            proj_cost, phone_no, application_status, proj_consultant, cp_name,
            cp_email, cp_designation, cp_cnic, cp_address, cp_phone)
            VALUES ('$ind_proj_title', '$ind_proj_description', '$ind_proj_objective, '$ind_proj_ind_type', '$ind_proj_district', '$ind_proj_address',
            '$ind_proj_cost', '$ind_proj_phone', 'SUBMITTED', '$ind_proj_consultant', '$ind_cp_name','$ind_cp_email',
            '$ind_cp_designation', '$ind_cp_cnic', '$ind_cp_address', '$ind_cp_phone');
            COMMIT;";
         $approval_entry_query = pg_query($sql_approval_entry);
         if($approval_entry_query){
             $sql_proponentEntry = "INSERT INTO tbl_proponent(
            id, owner_name, propo_address, propo_email, propo_cnic, propo_phone,
            propo_landline, propo_proj_code)
    VALUES (?, ?, ?, ?, ?, ?,
            ?, ?);";
         }








     }
 }
$obj_ProcessApplication = new ProcessApplications();
if(isset($_REQUEST['applicationType']))
{
    $applicationType = $_REQUEST['applicationType'];
    if($applicationType=='newLabRegistration'){
        $obj_ProcessApplication->saveNewLabRegistration();
    }
    else if($applicationType=='newIndustryRegistration'){
        $obj_ProcessApplication->saveNewIndustryRegistration();
    }
   else if($applicationType=='approvalApplication'){
       $obj_ProcessApplication->saveApprovalApplication();
   }
}
?>