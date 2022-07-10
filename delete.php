<?php
session_start();
include('connect.php');
$id= $_SESSION['id'];
$sql = "DELETE FROM trajet WHERE conducteur_fk=$id";

if ($connexion->query($sql) === TRUE) {
    header('Location: home.php');
} else {
    echo "Error deleting record: " . $conn->error;
}

?>