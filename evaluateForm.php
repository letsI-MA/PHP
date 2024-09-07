<?php
$firstname = "";
$lastname = "";
$birthdate = "";
$married = false;

$firstname = $_POST['txtFirstName'];
$lastname = $_POST['txtLastName'];
$birthdate = $_POST['datBirthDate'];

if (isset($_POST['chkMarried'])){
$married = true;
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Deine Muddah</title>
</head>
<body>

<?php
echo($firstname."<br>/>");
echo($lastname."<br>/>");
echo($birthdate."<br>/>");
echo($married."<br>/>");
?>


</body>
</html>



<?php

?>