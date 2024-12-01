<?php
require_once "Config.php";
require_once "Villa.php";
class CRUDVilla
{
    private $connexion;
    public function __construct()
    {
        $config=new Config();
        $this->connexion=$config->getConnexion();
    }
    public function AjouterVilla($villa)
    {
        $reference=$villa->getReference();
        $proprietaire=$villa->getProprietaire();
        $localite=$villa->getLocalite();
        $surface=$villa->getSurface();
        $nbPieces=$villa->getNbPieces();
        $domaineUsage=$villa->getDomaineUsage();
        $nbEtages=$villa->getNbEtages();
        $sql="INSERT INTO immobilier(reference,proprietaire,localite,surface,nbPieces,domaineUsage,nbEtages) VALUES('$reference','$proprietaire','$localite','$surface','$nbPieces','$domaineUsage','$nbEtages')";
        $this->connexion->exec($sql);
    }
    public function RecupererVilla($ref)
    {
        $sql="SELECT * FROM immobilier WHERE reference='$ref'";
        $res=$this->connexion->query($sql);
        return $res->fetch(PDO::FETCH_NUM);
    }
    public function SupprimerVilla($ref)
    {
        $sql="DELETE FROM immobilier WHERE reference='$ref'";
        $this->connexion->exec($sql);
    }
    public function ModifierVilla($ref)
    {
        $villa=$this->RecupererVilla($ref);
        $reference=$villa->getReference();
        $proprietaire=$villa->getProprietaire();
        $localite=$villa->getLocalite();
        $surface=$villa->getSurface();
        $nbPieces=$villa->getNbPieces();
        $domaineUsage=$villa->getDomaineUsage();
        $nbEtages=$villa->getNbEtages();
        $sql="UPDATE immobilier SET proprietaire='$proprietaire',localite='$localite',surface='$surface',nbPieces='$nbPieces',domaineUsage='$domaineUsage',nbEtages='$nbEtages' WHERE reference='$reference'";
        $this->connexion->exec($sql);
    }
    public function ListerVillas()
    {
        $sql="SELECT * FROM immobilier";
        $res=$this->connexion->query($sql);
        return $res->fetchAll(PDO::FETCH_NUM);
    }
    function Faker()
    {
        $sql="DELETE FROM immobilier;";
        $this->connexion->exec($sql);
        $sql="";
        for ($i=1; $i<100; $i++)
        {
            $reference=$i;
            $proprietaire="Amine";
            $localite="Tunis";
            $surface=rand(50,200);
            $nbPieces=rand(1,5);
            $domaineUsage="Habitation";
            $nbEtages=rand(1,10);
            $sql.="INSERT INTO immobilier(reference,proprietaire,localite,surface,nbPieces,domaineUsage,nbEtages) VALUES('$reference','$proprietaire','$localite','$surface','$nbPieces','$domaineUsage','$nbEtages');";
        }
        $this->connexion->exec($sql);
    }
}