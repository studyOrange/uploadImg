<?php  
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
 
// Get image data from database 
$result = $db->query("SELECT image FROM images ORDER BY id DESC"); 
?>

<?php if($result->rowCount() > 0){ ?> 
    <div class="gallery"> 
        <?php
        while($row = $result->fetch(PDO::FETCH_ASSOC)){  ;?> 
            <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>" /> 
        <?php } ?> 
    </div> 
<?php }else{ ?> 
    <p class="status error">Image(s) not found...</p> 
<?php } ?>