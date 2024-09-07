<?php
    require("includes/DBTools.php");
    $sql = "SELECT * FROM persons";
    $result = getDataArray($sql, "assoc");

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
    <table>
        <tr>
            <th><button><a href="PersonForm.php">+</a></button></th>
            <th>Personal-Nr.</th>
            <th>Vorname</th>
            <th>Nachname</th>
            <th>Geburtsdatum</th>
            <th>Verheiratet</th>
        </tr>
        <?php
            foreach ($result as $datarow) {
            }
        ?>
        <tr>
            <td><button>
                    <a href="PersonForm.php?id=<?php echo ($result["PersonID"])?>">=></a>
                </button></td>

                <td>
                    <?php echo ($datarow["PersonID"])?>
                </td>
                <td>
                    <?php echo ($datarow["FirstName"])?>
                </td>
                <td>
                    <?php echo ($datarow["LastName"])?>
                </td>
                <td>
                    <?php echo ($datarow["BirthDate"])?>
                </td>
                <td>
                    <?php echo ($datarow["Married"])?>
                </td>

        </tr>
        <?php

        ?>
    </table>







</body>
</html>