<?php
require_once "../../Model/CRUDVilla.php";
$crud=new CRUDVilla();
$reference=htmlspecialchars($_GET["reference"]);

include "../../View/Villa/ModifierVilla.php";
if(isset($_POST["ok"]))
{
    $reference=htmlspecialchars($_POST["reference"]);
    $proprietaire=htmlspecialchars($_POST["proprietaire"]);
    $localite=htmlspecialchars($_POST["localite"]);
    $surface=htmlspecialchars($_POST["surface"]);
    $nbPieces=htmlspecialchars($_POST["nbPieces"]);
    $domaineUsage=htmlspecialchars($_POST["domaineUsage"]);
    $surfaceEspaceCommun=htmlspecialchars($_POST["surfaceEspaceCommun"]);
    $villa=new Villa($reference,$proprietaire,$localite,$surface,$nbPieces,$domaineUsage,$surfaceEspaceCommun);
    $crud->ModifierVilla($reference);
}