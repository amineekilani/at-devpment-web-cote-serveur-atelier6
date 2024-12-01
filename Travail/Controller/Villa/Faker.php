<?php
require_once "../../Model/CRUDVilla.php";
$crud=new CRUDVilla();
$crud->Faker();
header("location: ListerVilla.php");
exit();