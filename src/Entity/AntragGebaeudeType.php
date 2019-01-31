<?php

namespace Inkl\ValueCareApi\Entity;

/**
 * Class representing AntragGebaeudeType
 *
 * Gebäudedatensatz, enthält alle Datenfelder zu einem Gebäude.
 * XSD Type: AntragGebaeude
 */
class AntragGebaeudeType
{

    /**
     * Position des Gebäudes im Antrag. Wird später am Vertrag übernommen.
     *
     * @property int $position
     */
    private $position = null;

    /**
     * Um welche Art Objekt handelt es sich. (Wohngebäude, Einliegerwohnung)
     *
     * @property string $objektTyp
     */
    private $objektTyp = null;

    /**
     * Die Anschrift des Gebäudes
     *
     * @property \Inkl\ValueCareApi\Entity\AnschriftType $anschrift
     */
    private $anschrift = null;

    /**
     * @property int $fachbetriebNummer
     */
    private $fachbetriebNummer = null;

    /**
     * @property \Inkl\ValueCareApi\Entity\FirmendatenType $fachbetrieb
     */
    private $fachbetrieb = null;

    /**
     * (optional) Einige Produkte erlauben es dem Kunden zusätzliche Risiken auszuwählen (z.B.: Diebstahlschutz, Sofortschutz, etc.)
     *
     * @property \Inkl\ValueCareApi\Entity\AntragRisikoType $risiken
     */
    private $risiken = null;

    /**
     * Gets as position
     *
     * Position des Gebäudes im Antrag. Wird später am Vertrag übernommen.
     *
     * @return int
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Sets a new position
     *
     * Position des Gebäudes im Antrag. Wird später am Vertrag übernommen.
     *
     * @param int $position
     * @return self
     */
    public function setPosition($position)
    {
        $this->position = $position;
        return $this;
    }

    /**
     * Gets as objektTyp
     *
     * Um welche Art Objekt handelt es sich. (Wohngebäude, Einliegerwohnung)
     *
     * @return string
     */
    public function getObjektTyp()
    {
        return $this->objektTyp;
    }

    /**
     * Sets a new objektTyp
     *
     * Um welche Art Objekt handelt es sich. (Wohngebäude, Einliegerwohnung)
     *
     * @param string $objektTyp
     * @return self
     */
    public function setObjektTyp($objektTyp)
    {
        $this->objektTyp = $objektTyp;
        return $this;
    }

    /**
     * Gets as anschrift
     *
     * Die Anschrift des Gebäudes
     *
     * @return \Inkl\ValueCareApi\Entity\AnschriftType
     */
    public function getAnschrift()
    {
        return $this->anschrift;
    }

    /**
     * Sets a new anschrift
     *
     * Die Anschrift des Gebäudes
     *
     * @param \Inkl\ValueCareApi\Entity\AnschriftType $anschrift
     * @return self
     */
    public function setAnschrift(\Inkl\ValueCareApi\Entity\AnschriftType $anschrift)
    {
        $this->anschrift = $anschrift;
        return $this;
    }

    /**
     * Gets as fachbetriebNummer
     *
     * @return int
     */
    public function getFachbetriebNummer()
    {
        return $this->fachbetriebNummer;
    }

    /**
     * Sets a new fachbetriebNummer
     *
     * @param int $fachbetriebNummer
     * @return self
     */
    public function setFachbetriebNummer($fachbetriebNummer)
    {
        $this->fachbetriebNummer = $fachbetriebNummer;
        return $this;
    }

    /**
     * Gets as fachbetrieb
     *
     * @return \Inkl\ValueCareApi\Entity\FirmendatenType
     */
    public function getFachbetrieb()
    {
        return $this->fachbetrieb;
    }

    /**
     * Sets a new fachbetrieb
     *
     * @param \Inkl\ValueCareApi\Entity\FirmendatenType $fachbetrieb
     * @return self
     */
    public function setFachbetrieb(\Inkl\ValueCareApi\Entity\FirmendatenType $fachbetrieb)
    {
        $this->fachbetrieb = $fachbetrieb;
        return $this;
    }

    /**
     * Gets as risiken
     *
     * (optional) Einige Produkte erlauben es dem Kunden zusätzliche Risiken auszuwählen (z.B.: Diebstahlschutz, Sofortschutz, etc.)
     *
     * @return \Inkl\ValueCareApi\Entity\AntragRisikoType
     */
    public function getRisiken()
    {
        return $this->risiken;
    }

    /**
     * Sets a new risiken
     *
     * (optional) Einige Produkte erlauben es dem Kunden zusätzliche Risiken auszuwählen (z.B.: Diebstahlschutz, Sofortschutz, etc.)
     *
     * @param \Inkl\ValueCareApi\Entity\AntragRisikoType $risiken
     * @return self
     */
    public function setRisiken(\Inkl\ValueCareApi\Entity\AntragRisikoType $risiken)
    {
        $this->risiken = $risiken;
        return $this;
    }


}

