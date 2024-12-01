<?php
require_once "Immobilier.php";
class Appartement extends Immobilier
{
    private $surfaceEspaceCommun;
    public function __construct($r,$p,$l,$s,$n,$d,$sec)
    {
        parent::__construct($r,$p,$l,$s,$n,$d);
        $this->surfaceEspaceCommun=$sec;
    }

    /**
     * Get the value of surfaceEspaceCommun
     */
    public function getSurfaceEspaceCommun()
    {
        return $this->surfaceEspaceCommun;
    }

    /**
     * Set the value of surfaceEspaceCommun
     */
    public function setSurfaceEspaceCommun($surfaceEspaceCommun): self
    {
        $this->surfaceEspaceCommun = $surfaceEspaceCommun;

        return $this;
    }
}