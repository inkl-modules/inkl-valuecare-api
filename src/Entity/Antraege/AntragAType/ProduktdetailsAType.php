<?php

namespace Inkl\ValueCareApi\Entity\Antraege\AntragAType;

/**
 * Class representing ProduktdetailsAType
 */
class ProduktdetailsAType
{

    /**
     * Jedes Antragsformular hat eine eindeutige Kodierung und wird für die Zuordnung von Geschäftsbedingungen und Produktinformationen benötigt.
     *
     * @property string $antragskodierung
     */
    private $antragskodierung = null;

    /**
     * Technische Beszeichnung des verkauften (Versicherungs-)Produkts
     *
     * @property string $produkttyp
     */
    private $produkttyp = null;

    /**
     * Einige Produkte erfordern eine explizite Beratung.
     *
     * @property \Inkl\ValueCareApi\Entity\Antraege\AntragAType\ProduktdetailsAType\BeratungsprotokolleAType\ProtokollAType[] $beratungsprotokolle
     */
    private $beratungsprotokolle = null;

    /**
     * Gets as antragskodierung
     *
     * Jedes Antragsformular hat eine eindeutige Kodierung und wird für die Zuordnung von Geschäftsbedingungen und Produktinformationen benötigt.
     *
     * @return string
     */
    public function getAntragskodierung()
    {
        return $this->antragskodierung;
    }

    /**
     * Sets a new antragskodierung
     *
     * Jedes Antragsformular hat eine eindeutige Kodierung und wird für die Zuordnung von Geschäftsbedingungen und Produktinformationen benötigt.
     *
     * @param string $antragskodierung
     * @return self
     */
    public function setAntragskodierung($antragskodierung)
    {
        $this->antragskodierung = $antragskodierung;
        return $this;
    }

    /**
     * Gets as produkttyp
     *
     * Technische Beszeichnung des verkauften (Versicherungs-)Produkts
     *
     * @return string
     */
    public function getProdukttyp()
    {
        return $this->produkttyp;
    }

    /**
     * Sets a new produkttyp
     *
     * Technische Beszeichnung des verkauften (Versicherungs-)Produkts
     *
     * @param string $produkttyp
     * @return self
     */
    public function setProdukttyp($produkttyp)
    {
        $this->produkttyp = $produkttyp;
        return $this;
    }

    /**
     * Adds as protokoll
     *
     * Einige Produkte erfordern eine explizite Beratung.
     *
     * @return self
     * @param \Inkl\ValueCareApi\Entity\Antraege\AntragAType\ProduktdetailsAType\BeratungsprotokolleAType\ProtokollAType $protokoll
     */
    public function addToBeratungsprotokolle(\Inkl\ValueCareApi\Entity\Antraege\AntragAType\ProduktdetailsAType\BeratungsprotokolleAType\ProtokollAType $protokoll)
    {
        $this->beratungsprotokolle[] = $protokoll;
        return $this;
    }

    /**
     * isset beratungsprotokolle
     *
     * Einige Produkte erfordern eine explizite Beratung.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetBeratungsprotokolle($index)
    {
        return isset($this->beratungsprotokolle[$index]);
    }

    /**
     * unset beratungsprotokolle
     *
     * Einige Produkte erfordern eine explizite Beratung.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetBeratungsprotokolle($index)
    {
        unset($this->beratungsprotokolle[$index]);
    }

    /**
     * Gets as beratungsprotokolle
     *
     * Einige Produkte erfordern eine explizite Beratung.
     *
     * @return \Inkl\ValueCareApi\Entity\Antraege\AntragAType\ProduktdetailsAType\BeratungsprotokolleAType\ProtokollAType[]
     */
    public function getBeratungsprotokolle()
    {
        return $this->beratungsprotokolle;
    }

    /**
     * Sets a new beratungsprotokolle
     *
     * Einige Produkte erfordern eine explizite Beratung.
     *
     * @param \Inkl\ValueCareApi\Entity\Antraege\AntragAType\ProduktdetailsAType\BeratungsprotokolleAType\ProtokollAType[] $beratungsprotokolle
     * @return self
     */
    public function setBeratungsprotokolle(array $beratungsprotokolle)
    {
        $this->beratungsprotokolle = $beratungsprotokolle;
        return $this;
    }


}

