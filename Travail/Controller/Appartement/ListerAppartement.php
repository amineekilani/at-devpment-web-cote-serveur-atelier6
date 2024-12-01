<?php
require_once "../../Model/CRUDAppartement.php";
$crud=new CRUDAppartement();
$appartements=$crud->ListerApp();
include "../../View/Appartement/ListerAppartement.php";