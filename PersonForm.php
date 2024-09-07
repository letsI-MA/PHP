<?php

    #include_once("includes/DBTools.php");
require_once ("includes/DBTools.php");
$personID = 0;
$firstname = "";
$lastname = "";
$birthdate = "";
$married = false;
$errtext = "";
if (isset($_POST["btnSubmit"])) {
    $personID = $_POST["personID"];
    $firstname = $_POST["txtFirstName"];
    $lastname = $_POST["txtLastName"];
    $birthdate = $_POST["datBirthDate"];    }
if (isset($_POST["chkMarried"])) {
    $married = true;
}        if(strlen("$lastname") <= 2 || strlen("$firstname") <= 2) {
    $errtext = "Die Felder Vor- und Nachname müssen min. 2 Buchstaben enthalten.";
} else {
    #Daten in DB schreiben
    if ($personID > 0) {
        updatePerson($personID, $firstname, $lastname, $birthdate, $married);
    } else {
        insertPerson($personID, $firstname, $lastname, $birthdate, $married);
    }

    header("Location: main.php");

} if (isset($_GET["id"])) {
    $sql = "SELECT PersonID, FirstName, LastName, ";
    $sql .= "BirthDate, Married FROM persons";
    $sql .= "WHERE PersonID = :id";
    $result = getDataRowByID($sql, $_GET["id"]);
    $personID = $result["PersonID"];
    $firstname = $result ["FirstName"];
    $lastname = $result ["LastName"];
    $birthdate = $result ["BirthDate"];
    $married = false;
}
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<h3 style="color: deeppink"><?php echo ($errtext)?></h3>

<form action="PersonForm.php" method="post">
    <label for="txtPersonID">PersonID</label>
    <input id="txtPersonID" name="txtPersonID" type="text"
           required value="<?php echo ($personID) ?>" placeholder="">

    <label for="txtFirstName">Vorname</label>
    <input id="txtFirstName" name="txtFirstName" type="text"
           required value="<?php echo ($firstname) ?>" placeholder="Vorname">
    <br>
    <label for="txtLastName">Nachname</label>
    <input id="txtLastName" name="txtLastName" type="text"
           required value="<?php echo ($lastname) ?>" placeholder="Nachname">
    <br>
    <label for="datBirthDate">Geburtsdatum</label>
    <input id="datBirthDate" name="datBirthDate" type="date" value="<?php echo ($birthdate) ?>"">
    <br>
    <label for="chkMarried">verheiratet</label>
    <input id = "chkMarried" name = "chkMarried" type = "checkbox" checked value = "true" <?php if ($married) {echo("checked");} ?> /><br/ >
    <input id = "btnSubmit" name = "btnSubmit" type = "submit" value = "absenden"/>
</form>

<?php
?>



</body>
</html>
