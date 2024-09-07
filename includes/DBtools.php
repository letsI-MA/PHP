<?php
function getConnection() {
    $server = "localhost";
    $dbname = "Person";
    $user = "root";
    $pwd = "";
    $constr = "mysql:host=$server;dbname=$dbname";
    $con = new PDO($constr, $user, $pwd);
    return $con;
}

# $fetchmode: assoc, both oder num
function getDataArray($sql, $fetchmode) {
    $con = getConnection();
    $stmt = $con->prepare($sql);
    $stmt->execute();
    switch (strtolower($fetchmode)) {
        case 'assoc':
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            break;

        case 'both':
            $stmt->setFetchMode(PDO::FETCH_BOTH);
            break;

        case 'num':
            $stmt->setFetchMode(PDO::FETCH_NUM);
            break;
    }
    $result = $stmt->fetchAll();
    return $result;
}
function getDataRowByID($sql, $id,$fetchmode) {
    $con = getConnection();
    $stmt = $con->prepare($sql);
    $stmt->bindParam(":$id", $id);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}
function updatePerson($personID, $firstname, $lastname, $birthdate, $married) {
    $con = getConnection();
    $sql = "UPDATE person SET firstname = :firstname, lastname = :lastname, birthdate = :birthdate,";
    $sql .= "married = :married WHERE personID = :personID";
    #Preparen#
    $stmt = $con->prepare($sql);
    #Binden#
    $stmt->bindParam(":firstname", $firstname);
    $stmt->bindParam(":lastname", $lastname);
    $stmt->bindParam(":birthdate", $birthdate);
    $stmt->bindParam(":married", $married);
    $stmt->bindParam(":personID", $personID);
    #Executen#
    $stmt->execute();


}
function insertPerson($personID, $firstname, $lastname, $birthdate, $married) {
    $con = getConnection();
    $sql = "insert into person (PersonID, FirstName, LastName, BirthDate, Married)";
    $sql .= " values (:personID, :firstname, :lastname, :birthdate, :married)";
    #Preparen#
    $stmt = $con->prepare($sql);
    #Binden#
    $stmt->bindParam(":firstname", $firstname);
    $stmt->bindParam(":lastname", $lastname);
    $stmt->bindParam(":birthdate", $birthdate);
    $stmt->bindParam(":married", $married);
    #Executen#
    $stmt->execute();
}

?>