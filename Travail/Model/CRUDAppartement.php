<?php
require_once "Config.php";
require_once "Appartement.php";
class CRUDAppartement
{
    private $connexion;
    public function __construct()
    {
        $config=new Config();
        $this->connexion=$config->getConnexion();
    }
    public function AjouterApp($appartement)
    {
        $reference=$appartement->getReference();
        $proprietaire=$appartement->getProprietaire();
        $localite=$appartement->getLocalite();
        $surface=$appartement->getSurface();
        $nbPieces=$appartement->getNbPieces();
        $domaineUsage=$appartement->getDomaineUsage();
        $surfaceEspaceCommun=$appartement->getSurfaceEspaceCommun();
        $sql="INSERT INTO immobilier(reference,proprietaire,localite,surface,nbPieces,domaineUsage,surfaceEspaceCommun) VALUES('$reference','$proprietaire','$localite','$surface','$nbPieces','$domaineUsage','$surfaceEspaceCommun')";
        $this->connexion->exec($sql);
    }
    public function RecupererApp($ref)
    {
        $sql="SELECT * FROM immobilier WHERE reference='$ref'";
        $res=$this->connexion->query($sql);
        return $res->fetch(PDO::FETCH_NUM);
    }
    public function SupprimerApp($ref)
    {
        $sql="DELETE FROM immobilier WHERE reference='$ref'";
        $this->connexion->exec($sql);
    }
    public function ModifierApp($ref)
    {
        $appartement=$this->RecupererApp($ref);
        $reference=$appartement->getReference();
        $proprietaire=$appartement->getProprietaire();
        $localite=$appartement->getLocalite();
        $surface=$appartement->getSurface();
        $nbPieces=$appartement->getNbPieces();
        $domaineUsage=$appartement->getDomaineUsage();
        $surfaceEspaceCommun=$appartement->getSurfaceEspaceCommun();
        $sql="UPDATE immobilier SET proprietaire='$proprietaire',localite='$localite',surface='$surface',nbPieces='$nbPieces',domaineUsage='$domaineUsage',surfaceEspaceCommun='$surfaceEspaceCommun' WHERE reference='$reference'";
        $this->connexion->exec($sql);
    }
    public function ListerApp()
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
            $surfaceEspaceCommun=rand(0,50);
            $sql.="INSERT INTO immobilier(reference,proprietaire,localite,surface,nbPieces,domaineUsage,surfaceEspaceCommun) VALUES('$reference','$proprietaire','$localite','$surface','$nbPieces','$domaineUsage','$surfaceEspaceCommun');";
        }
        $this->connexion->exec($sql);
    }
}