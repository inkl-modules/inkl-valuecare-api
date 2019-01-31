<?php

namespace Inkl\ValueCareApi\Entity\Antraege\AntragAType;

/**
 * Class representing ZahlungAType
 */
class ZahlungAType
{

    /**
     * Die Prämien werden vom Kundenkonto direkt eingezogen.
     *
     * @property bool $einzug
     */
    private $einzug = null;

    /**
     * (optional) Produktabhängiges Abrechnungsintervall
     *
     * @property int $intervall
     */
    private $intervall = null;

    /**
     * Über die hier angegebene Bankverbindung werden die Prämieneinzüge abgewickelt.
     *
     * @property \Inkl\ValueCareApi\Entity\AntragBVSepaType $bankverbindung
     */
    private $bankverbindung = null;

    /**
     * Der Kunde überweist die fälligen Prämien selbst auf ein Konto von WERTGARANTIE
     *
     * @property bool $selbstzahler
     */
    private $selbstzahler = null;

    /**
     * Die Prämien werden direkt mit dem Fachhändler abgerechnet
     *
     * @property bool $vMRAbrechnung
     */
    private $vMRAbrechnung = null;

    /**
     * Gets as einzug
     *
     * Die Prämien werden vom Kundenkonto direkt eingezogen.
     *
     * @return bool
     */
    public function getEinzug()
    {
        return $this->einzug;
    }

    /**
     * Sets a new einzug
     *
     * Die Prämien werden vom Kundenkonto direkt eingezogen.
     *
     * @param bool $einzug
     * @return self
     */
    public function setEinzug($einzug)
    {
        $this->einzug = $einzug;
        return $this;
    }

    /**
     * Gets as intervall
     *
     * (optional) Produktabhängiges Abrechnungsintervall
     *
     * @return int
     */
    public function getIntervall()
    {
        return $this->intervall;
    }

    /**
     * Sets a new intervall
     *
     * (optional) Produktabhängiges Abrechnungsintervall
     *
     * @param int $intervall
     * @return self
     */
    public function setIntervall($intervall)
    {
        $this->intervall = $intervall;
        return $this;
    }

    /**
     * Gets as bankverbindung
     *
     * Über die hier angegebene Bankverbindung werden die Prämieneinzüge abgewickelt.
     *
     * @return \Inkl\ValueCareApi\Entity\AntragBVSepaType
     */
    public function getBankverbindung()
    {
        return $this->bankverbindung;
    }

    /**
     * Sets a new bankverbindung
     *
     * Über die hier angegebene Bankverbindung werden die Prämieneinzüge abgewickelt.
     *
     * @param \Inkl\ValueCareApi\Entity\AntragBVSepaType $bankverbindung
     * @return self
     */
    public function setBankverbindung(\Inkl\ValueCareApi\Entity\AntragBVSepaType $bankverbindung)
    {
        $this->bankverbindung = $bankverbindung;
        return $this;
    }

    /**
     * Gets as selbstzahler
     *
     * Der Kunde überweist die fälligen Prämien selbst auf ein Konto von WERTGARANTIE
     *
     * @return bool
     */
    public function getSelbstzahler()
    {
        return $this->selbstzahler;
    }

    /**
     * Sets a new selbstzahler
     *
     * Der Kunde überweist die fälligen Prämien selbst auf ein Konto von WERTGARANTIE
     *
     * @param bool $selbstzahler
     * @return self
     */
    public function setSelbstzahler($selbstzahler)
    {
        $this->selbstzahler = $selbstzahler;
        return $this;
    }

    /**
     * Gets as vMRAbrechnung
     *
     * Die Prämien werden direkt mit dem Fachhändler abgerechnet
     *
     * @return bool
     */
    public function getVMRAbrechnung()
    {
        return $this->vMRAbrechnung;
    }

    /**
     * Sets a new vMRAbrechnung
     *
     * Die Prämien werden direkt mit dem Fachhändler abgerechnet
     *
     * @param bool $vMRAbrechnung
     * @return self
     */
    public function setVMRAbrechnung($vMRAbrechnung)
    {
        $this->vMRAbrechnung = $vMRAbrechnung;
        return $this;
    }


}

