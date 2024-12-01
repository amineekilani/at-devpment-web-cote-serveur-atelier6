<?php
require_once "../../Model/CRUDAppartement.php";
$crud=new CRUDAppartement();
$reference=htmlspecialchars($_GET["reference"]);

include "../../View/Appartement/ModifierAppartement.php";
if(isset($_POST["ok"]))
{
    $reference=htmlspecialchars($_POST["reference"]);
    $proprietaire=htmlspecialchars($_POST["proprietaire"]);
    $localite=htmlspecialchars($_POST["localite"]);
    $surface=htmlspecialchars($_POST["surface"]);
    $nbPieces=htmlspecialchars($_POST["nbPieces"]);
    $domaineUsage=htmlspecialchars($_POST["domaineUsage"]);
    $surfaceEspaceCommun=htmlspecialchars($_POST["surfaceEspaceCommun"]);
    $appartement=new Appartement($reference,$proprietaire,$localite,$surface,$nbPieces,$domaineUsage,$surfaceEspaceCommun);
    $crud->ModifierApp($reference);
}