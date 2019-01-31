<?php

namespace Inkl\ValueCareApi\Entity;

/**
 * Class representing AntragSchlossType
 *
 * Schlossdatensatz, enthält alle Datenfelder zu einem Schloss.
 * XSD Type: AntragSchloss
 */
class AntragSchlossType
{

    /**
     * Name des Schlossherstellers (z.b: Abus)
     *
     * @property string $hersteller
     */
    private $hersteller = null;

    /**
     * Herstellercode von WERTGARANTIE
     *  Für dieses Feld sind Schlüsselwerte vorgesehen. Diese finden Sie zum Elementnamen in der Tabelle unter: http://www.wertgarantie.de/XMLSchema/sst_schluesseltabelle.xlsx
     *
     * @property int $herstellerCode
     */
    private $herstellerCode = null;

    /**
     * Art des Schlosses (Bügelschloss, Zahlenschloss, ...).
     *
     * @property string $art
     */
    private $art = null;

    /**
     * Typen- oder Modellbezeichnung des Schlosses.
     *
     * @property string $modellbezeichnung
     */
    private $modellbezeichnung = null;

    /**
     * Schlüsselnummer des Schlosses.
     *
     * @property string $schluesselnummer
     */
    private $schluesselnummer = null;

    /**
     * Gets as hersteller
     *
     * Name des Schlossherstellers (z.b: Abus)
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
     * Name des Schlossherstellers (z.b: Abus)
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
     * Gets as herstellerCode
     *
     * Herstellercode von WERTGARANTIE
     *  Für dieses Feld sind Schlüsselwerte vorgesehen. Diese finden Sie zum Elementnamen in der Tabelle unter: http://www.wertgarantie.de/XMLSchema/sst_schluesseltabelle.xlsx
     *
     * @return int
     */
    public function getHerstellerCode()
    {
        return $this->herstellerCode;
    }

    /**
     * Sets a new herstellerCode
     *
     * Herstellercode von WERTGARANTIE
     *  Für dieses Feld sind Schlüsselwerte vorgesehen. Diese finden Sie zum Elementnamen in der Tabelle unter: http://www.wertgarantie.de/XMLSchema/sst_schluesseltabelle.xlsx
     *
     * @param int $herstellerCode
     * @return self
     */
    public function setHerstellerCode($herstellerCode)
    {
        $this->herstellerCode = $herstellerCode;
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
     * Gets as modellbezeichnung
     *
     * Typen- oder Modellbezeichnung des Schlosses.
     *
     * @return string
     */
    public function getModellbezeichnung()
    {
        return $this->modellbezeichnung;
    }

    /**
     * Sets a new modellbezeichnung
     *
     * Typen- oder Modellbezeichnung des Schlosses.
     *
     * @param string $modellbezeichnung
     * @return self
     */
    public function setModellbezeichnung($modellbezeichnung)
    {
        $this->modellbezeichnung = $modellbezeichnung;
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

