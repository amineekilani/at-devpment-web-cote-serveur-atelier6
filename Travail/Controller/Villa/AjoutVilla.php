<?php
require_once "../../Model/CRUDVilla.php";
$crud=new CRUDVilla();
include "../../View/Villa/AjoutVilla.php";
if(isset($_POST["ok"]))
{
    $reference=htmlspecialchars($_POST["reference"]);
    $proprietaire=htmlspecialchars($_POST["proprietaire"]);
    $localite=htmlspecialchars($_POST["localite"]);
    $surface=htmlspecialchars($_POST["surface"]);
    $nbPieces=htmlspecialchars($_POST["nbPieces"]);
    $domaineUsage=htmlspecialchars($_POST["domaineUsage"]);
    $nbEtages=htmlspecialchars($_POST["nbEtages"]);
    $villa=new Villa($reference,$proprietaire,$localite,$surface,$nbPieces,$domaineUsage,$nbEtages);
    $crud->AjouterVilla($villa);
}