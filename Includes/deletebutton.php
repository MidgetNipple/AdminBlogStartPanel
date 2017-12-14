<?php


function delete()
{
    require_once '../Includes/DataBaseConnection.php';
    $db = new \DataBaseConnection\DataBaseConnection();

    $id = $_GET['id'];
    $db->query("DELETE FROM registertable WHERE ID = $id");
    if (!$db) {
        die("Connection failed: " . mysqli_connect_error());
    } else {
        header('Location: ../Webpages/Adminpanel.php');

    }
}
delete();