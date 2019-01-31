<?php

namespace Inkl\ValueCareApi\Entity;

/**
 * Class representing SchlossType
 *
 * Schlossdatensatz, enthält alle Datenfelder zu einem Schloss.
 * XSD Type: Schloss
 */
class SchlossType
{

    /**
     * Code für den Schlosshersteller. Wird der Name des Herstellers angegeben wird der zugehörige Code später ermittelt.
     *  Für dieses Feld sind Schlüsselwerte vorgesehen. Eine Liste aller zugelassenen Werte sind in folgender Tabelle zu finden: http://www.wertgarantie.de/XMLSchema/internet_xsd_schluesseltabelle_DE.xls.
     *
     * @property string $hersteller
     */
    private $hersteller = null;

    /**
     * Art des Schlosses (Bügelschloss, Zahlenschloss, ...).
     *
     * @property string $art
     */
    private $art = null;

    /**
     * Typen- oder Modellbezeichnung des Schlosses.
     *
     * @property string $typenbezeichnung
     */
    private $typenbezeichnung = null;

    /**
     * Schlüsselnummer des Schlosses.
     *
     * @property string $schluesselnummer
     */
    private $schluesselnummer = null;

    /**
     * Gets as hersteller
     *
     * Code für den Schlosshersteller. Wird der Name des Herstellers angegeben wird der zugehörige Code später ermittelt.
     *  Für dieses Feld sind Schlüsselwerte vorgesehen. Eine Liste aller zugelassenen Werte sind in folgender Tabelle zu finden: http://www.wertgarantie.de/XMLSchema/internet_xsd_schluesseltabelle_DE.xls.
     *
     * @return string
     */
    public function getHersteller()
    {
        return $this->hersteller;
    }

    /**
     * Sets a new hersteller
     *
     * Code für den Schlosshersteller. Wird der Name des Herstellers angegeben wird der zugehörige Code später ermittelt.
     *  Für dieses Feld sind Schlüsselwerte vorgesehen. Eine Liste aller zugelassenen Werte sind in folgender Tabelle zu finden: http://www.wertgarantie.de/XMLSchema/internet_xsd_schluesseltabelle_DE.xls.
     *
     * @param string $hersteller
     * @return self
     */
    public function setHersteller($hersteller)
    {
        $this->hersteller = $hersteller;
        return $this;
    }

    /**
     * Gets as art
     *
     * Art des Schlosses (Bügelschloss, Zahlenschloss, ...).
     *
     * @return string
     */
    public function getArt()
    {
        return $this->art;
    }

    /**
     * Sets a new art
     *
     * Art des Schlosses (Bügelschloss, Zahlenschloss, ...).
     *
     * @param string $art
     * @return self
     */
    public function setArt($art)
    {
        $this->art = $art;
        return $this;
    }

    /**
     * Gets as typenbezeichnung
     *
     * Typen- oder Modellbezeichnung des Schlosses.
     *
     * @return string
     */
    public function getTypenbezeichnung()
    {
        return $this->typenbezeichnung;
    }

    /**
     * Sets a new typenbezeichnung
     *
     * Typen- oder Modellbezeichnung des Schlosses.
     *
     * @param string $typenbezeichnung
     * @return self
     */
    public function setTypenbezeichnung($typenbezeichnung)
    {
        $this->typenbezeichnung = $typenbezeichnung;
        return $this;
    }

    /**
     * Gets as schluesselnummer
     *
     * Schlüsselnummer des Schlosses.
     *
     * @return string
     */
    public function getSchluesselnummer()
    {
        return $this->schluesselnummer;
    }

    /**
     * Sets a new schluesselnummer
     *
     * Schlüsselnummer des Schlosses.
     *
     * @param string $schluesselnummer
     * @return self
     */
    public function setSchluesselnummer($schluesselnummer)
    {
        $this->schluesselnummer = $schluesselnummer;
        return $this;
    }


}

