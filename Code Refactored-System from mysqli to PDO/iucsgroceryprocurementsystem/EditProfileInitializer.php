<?php


session_start();



$_SESSION['EditProfileID'] = $_POST['iddd1'];

header('Location: EditProfile.php');





?>