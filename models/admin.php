<?php
include_once('../db/connection.php');

/**
 * Saves data in admin table.
 * @param string $username
 * @param string $email_id
 * @param string $password
 
 */

function saveAdmin($username, $email_id, $password)
{
global $conn;


$sql = "INSERT INTO admin (firstname, email_id, password)
VALUES ('$username', '$email_id', '$password')";
$conn->exec($sql);
}
/**
 * @return array
 */
function getAdmin()
{
    global $conn;
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT id, username, email_id, password FROM admin");
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);

    $result = $stmt->fetchAll();

    return $result;
}
/**
 * @param $adminId
 */
function deleteAdmin($adminId)
{
    global $conn;
    // sql to delete a record.
    $sql = "DELETE FROM users WHERE id=" . $adminId;

    // use exec() because no results are returned
    $conn->exec($sql);
}

/**
 * Updates admin data in DB.
 *
 * @param array $adminData [id, username, emailId, password]
 * @author jsingh7
 * @version 1.0
 */
function updateAdmin(array $adminData)
{
    global $conn;
    $sql = "UPDATE admin SET username= '".$adminData['username']."'
    , email_id= '".$adminData['emailId']."'
    , description= '".$adminData['password']."'
    WHERE id=".$adminData['id'];

    $conn->exec($sql);
}

