<?php
/**
 * Created by PhpStorm.
 * User: Dell
 * Date: 9/8/2017
 * Time: 4:57 AM
 */
include "Connection.php";
class DropDownService extends Connection{
    public function getLabType()
    {
        $this->connectionDB();
        $sql = "SELECT lab_type as name FROM tbl_lab_type ORDER BY lab_type";
        $resultData = pg_query($sql);
        $resultJson = json_encode(pg_fetch_all($resultData));
        $this->closeConnection();
        return $resultJson;
    }
    public function getLabPurpose(){
        $this->connectionDB();
        $sql = "SELECT lab_purpose as name FROM tbl_lab_purpose ORDER BY lab_purpose";
        $resultData = pg_query($sql);
        $resultJson = json_encode(pg_fetch_all($resultData));
        $this->closeConnection();
        return $resultJson;
    }
    public function getDistrictList(){
        $this->connectionDB();
        $sql = "SELECT district_name as name FROM tbl_districts ORDER BY district_name;";
        $resultData = pg_query($sql);
        $resultJson = json_encode(pg_fetch_all($resultData));
        $this->closeConnection();
        return $resultJson;
    }
    public function getIndustryTypeList(){
        $this->connectionDB();
        $sql = "SELECT industry_type as name FROM tbl_industry_type ORDER BY industry_type";
        $resultData = pg_query($sql);
        $resultJson = json_encode(pg_fetch_all($resultData));
        $this->closeConnection();
        return $resultJson;
    }
}
$obj_DropDownService = new DropDownService();
if(isset($_REQUEST['dropDownOption']))
{
    $dropDownOption = $_REQUEST['dropDownOption'];
    if($dropDownOption=='labType'){
        echo $obj_DropDownService->getLabType();
    }
    else if($dropDownOption=='labPurpose'){
        echo $obj_DropDownService->getLabPurpose();
    }
    else if($dropDownOption=='industryDistrict'){
        echo $obj_DropDownService->getDistrictList();
    }
    else if($dropDownOption=='indType'){
        echo $obj_DropDownService->getIndustryTypeList();
    }
}
?>