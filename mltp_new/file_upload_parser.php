<?php

if (!$_FILES["file1"]["tmp_name"]) { // if file not chosen
    echo "ERROR: Please browse for a file before clicking the upload button.";
    exit();
}
$fileName = $_FILES["file1"]["name"]; // The file name
$fileTmpLoc = $_FILES["file1"]["tmp_name"]; // File in the PHP tmp folder
$fileType = $_FILES["file1"]["type"]; // The type of file it is
$fileSize = $_FILES["file1"]["size"]; // File size in bytes
$fileErrorMsg = $_FILES["file1"]["error"]; // 0 for false... and 1 for true


// FILE FORMAT ALLOW ONLY GEOJSON
//echo $fileName;
$array = explode('.', $fileName);
if(end($array) != 'geojson'){
	echo "File format mismatched !";
	exit();
}
		
if(move_uploaded_file($fileTmpLoc, "files/$fileName")){
    echo "$fileName upload is complete";
} else {
    echo "$fileName upload is failed !";
}

?>