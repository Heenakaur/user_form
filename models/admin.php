<?php
include_once('/../db/connection.php');
class Admin
{
    /**
     * Saves data in admin table.
     * @param string $username
     * @param string $email_id
     * @param string $password
     */

    public function save($username, $email_id, $password)
    {
        global $conn;


        $sql = "INSERT INTO admin (firstname, email_id, password)
    VALUES ('$username', '$email_id', '$password')";
        $conn->exec($sql);
    }

    /**
     * @return array
     */
    public function get()
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
    public function delete($adminId)
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
    public function update(array $adminData)
    {
        global $conn;
        $sql = "UPDATE admin SET username= '" . $adminData['username'] . "'
    , email_id= '" . $adminData['emailId'] . "'
    , description= '" . $adminData['password'] . "'
    WHERE id=" . $adminData['id'];

        $conn->exec($sql);
    }

    /**
     * Returns admin information
     * in the form of array.
     *
     * @param string $username
     * @return array
     * @author Heena
     * @version 1.0
     */
    public function getByUsername($username)
    {
        //It will have have similar code like getUser() function but we will write query with where condition.
        global $conn;
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $conn->prepare(
            'SELECT 
        `id`, 
        `username`, 
        `email_id`, 
        `password` 
        FROM admin 
        WHERE username = "' . $username . '"'
        );
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);

        $result = $stmt->fetchAll();

        return $result;
    }

    public function validatePassword($username, $password)
    {
        //select query with where condition in which you have to pass both parameters.
        //ref: http://www.w3schools.com/sql/sql_where.asp
        global $conn;
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = $conn->prepare("SELECT * FROM admin WHERE username='$username' AND password='$password'");
        $sql->execute();
        $sql->setFetchMode(PDO::FETCH_ASSOC);


        $result = $sql->fetchall();

        //@todo: This method should be capable to return false in case of no record found.

        return $result;
    }

}
