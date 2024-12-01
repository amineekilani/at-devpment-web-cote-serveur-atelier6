<?php
require_once "../../Model/CRUDVilla.php";
$crud=new CRUDVilla();
$villas=$crud->ListerVillas();
include "../../View/Villa/ListerVilla.php";