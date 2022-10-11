<?php
function welcome1()
{
    echo "hi1";
}
function welcome2()
{
    echo "hi2";
}
if (isset($_POST['submit2'])) {
     welcome2();
}
if (isset($_POST['submit1'])) {
     welcome1();
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="php.php" method="post" enctype="multipart/form-data">
        Select Image File to Upload:
        <input type="file" name="file">
        <input type="submit" name="submit2" value="submit2">
    </form>


    <script src="./js.js"></script>
</body>

</html>