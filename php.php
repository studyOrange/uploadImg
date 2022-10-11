<!-- <?php  
// DB credentials.
$dns = "mysql:host=localhost;dbname=test";
$user = "root";
$pass = "osama123456";

try {
    $db = new PDO($dns,$user,$pass);
    // echo "you are connected";
} catch (PDOException $th) {
    echo "not connected" . $th->getMessage();
}

// Include the database configuration file
// include 'dbConfig.php';
$statusMsg = '';

// File upload path
$targetDir = "./img/";
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
print_r($_FILES);
if(isset($_POST["submit2"]) && !empty($_FILES["file"]["name"])){
    // Allow certain file formats
    $allowTypes = array('jpg','png','jpeg','gif','pdf');
    if(in_array($fileType, $allowTypes)){
        // Upload file to server
        $imgContent =addslashes(file_get_contents($_FILES["file"]["tmp_name"])); 
        $imgContent= strval($imgContent);
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
            // Insert image file name into database

             $insert = $db->query("INSERT into images (image, created) VALUES ('$imgContent', NOW())");
            if($insert){
                $statusMsg = "The file ".$fileName. " has been uploaded successfully.";
            }else{
                $statusMsg = "File upload failed, please try again.";
            } 
        }else{
            $statusMsg = "Sorry, there was an error uploading your file.";
        }
    }else{
        $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
    }
}else{
    $statusMsg = 'Please select a file to upload.';
}

// Display status message
echo $statusMsg;
?> -->


<?php
// function repeatedNumber($array ,$num)
// {
//     $result = [];
//     foreach ($array as $key => $value) {
//         if ($value == $num) {
//             array_push($key);
//         }
//     }
//     array_shift($result);
//     print_r($result);
// }
// repeatedNumber([1,2,1,3,4,1] , 1)
?>