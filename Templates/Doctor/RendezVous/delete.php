<?php
require_once("C:/xampp\htdocs\web2A\Controllers\DoctorController.php");
$DoctorController = new DoctorController();
$DoctorController->deleteAppointment($_GET['id']);
header('Location: index.php');