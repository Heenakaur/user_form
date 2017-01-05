<?php
include_once('../db/connection.php');

/**
 * Saves data in user table.
 *
 * @param string $firstname
 * @param string $lastname
 * @param string $email_id
 * @param string $description
 * @param boolean $gender
 */
function saveUser($firstname, $lastname, $email_id, $description, $gender)
{
    global $conn;

    $isMale = 0;
    if($gender == 'female')
    {
        $isMale = 1;
    }

    $sql = "INSERT INTO users (firstname, lastname, email_id, description, gender)
    VALUES ('$firstname', '$lastname', '$email_id', '$description', '$isMale')";
    $conn->exec($sql);
}



function getUser()
{
    global $conn;
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT id, firstname, lastname, email_id, description, gender FROM users");
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);

    $result = $stmt->fetchAll();

    return $result;
}
function deleteUser($userId)
{
    global $conn;
    // sql to delete a record.
    $sql = "DELETE FROM users WHERE id=" . $userId;

    // use exec() because no results are returned
    $conn->exec($sql);
}


