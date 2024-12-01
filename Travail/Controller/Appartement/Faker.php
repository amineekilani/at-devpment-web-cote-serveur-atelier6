<?php
require_once "../../Model/CRUDAppartement.php";
$crud=new CRUDAppartement();
$crud->Faker();
header("location: ListerAppartement.php");
exit();