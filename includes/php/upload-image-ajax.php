<?php
/**
 * Created by PhpStorm.
 * User: Adi
 * Date: 8/12/2017
 * Time: 8:21 PM
 */

//require_once("includes/session.php");
//$poolid=strtolower($_SESSION['poolid']); //lowercase it first so we get exact matches
$valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions
$path = 'C:/xampp/htdocs/pemms/includes/uploades/'; // upload directory

if(isset($_FILES['image']))
{
    $img = $_FILES['image']['name'];
    $tmp = $_FILES['image']['tmp_name'];
    $image_full_name;
    $image_name;
    // get uploaded file's extension
    $ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));


//checking if image exists
    if(file_exists("C:/xampp/htdocs/pemms/includes/uploades/".$img.".png")) {
        unlink("C:/xampp/htdocs/pemms/includes/uploades/".$img.".png");
    }


    // check's valid format
    if(in_array($ext, $valid_extensions))  {
        //re-size the image and make it a PNG before sending to server
        $image_full_name =  explode( '.', $img );
        $image_name = $image_full_name[0];
        $final_image = $image_name.".png";
        $path = $path.strtolower($final_image);
        $size = getimagesize($tmp);
        $ratio = $size[0]/$size[1]; // width/height
        if( $ratio > 1) {
            $width = 200;
            $height = 200/$ratio;
        }
        else {
            $width = 200*$ratio;
            $height = 200;
        }
        $src = imagecreatefromstring(file_get_contents($tmp));
        $dst = imagecreatetruecolor($width,$height);
        imagecopyresampled($dst,$src,0,0,0,0,$width,$height,$size[0],$size[1]);
        imagedestroy($src);
        imagepng($dst, $path); // adjust format as needed
        imagedestroy($dst);

        echo $path ."?".rand(1,32000);


    } else {
        echo 'invalid file';
    }
}

?>