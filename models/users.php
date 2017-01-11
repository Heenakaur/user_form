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


/**
 * @return array
 */
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

/**
 * @param $userId
 */
function deleteUser($userId)
{
    global $conn;
    // sql to delete a record.
    $sql = "DELETE FROM users WHERE id" . $userId;

    // use exec() because no results are returned
    $conn->exec($sql);
}

/**
 * Updates user data in DB.
 *
 * @param array $userData [id, firstname, lastname, emailId, description, gender]
 * @author jsingh7
 * @version 1.0
 */
function updateUser(array $userData)
{
    global $conn;
    $sql = "UPDATE users SET firstname= ".$userData['firstname'].", lastname= ".$userData['lastname'].", emailid= ".$userData['emailId'].", description= ".$userData['description'].", gender= ".$userData['gender']." WHERE id=".$userData['id'];

    $conn->exec($sql);
}



