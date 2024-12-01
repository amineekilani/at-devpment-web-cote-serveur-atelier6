<?php
require_once "Immobilier.php";
class Villa extends Immobilier
{
    private $nbEtages;
    public function __construct($r,$p,$l,$s,$n,$d,$nb)
    {
        parent::__construct($r,$p,$l,$s,$n,$d);
        $this->nbEtages=$nb;
    }

    /**
     * Get the value of nbEtages
     */
    public function getNbEtages()
    {
        return $this->nbEtages;
    }

    /**
     * Set the value of nbEtages
     */
    public function setNbEtages($nbEtages): self
    {
        $this->nbEtages = $nbEtages;

        return $this;
    }
}