<?php
    $server = "localhost";
    $dbname = "Person";
    $user = "root";
    $pwd = "";
    #Connection erzeugen
    $constr = "mysql:host=$server;dbname=$dbname";
    $con = new PDO($constr, $user, $pwd);
    #SQL-Query erstellen & Statement erzeugen
    $sql = "SELECT PersonID, FirstName, LastName, ";
    $sql .= "BirthDate, Married from persons";
    $stmt = $con->prepare($sql);
    #Statement ausführen
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    #Resultset aus Statement in Array schreiben
    $result = $stmt->fetchAll();

    foreach ($result as $datarow){
        foreach($datarow as $key => $value){
            echo ("$key: $value | ");
        }
        echo ("<br/>");
    }


?>