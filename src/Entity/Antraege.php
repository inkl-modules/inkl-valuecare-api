<?php

namespace Inkl\ValueCareApi\Entity;

/**
 * Class representing Antraege
 */
class Antraege
{

    /**
     * Die Herkunft gibt das liefernde System an. Dieses Feld ist mit einem festen Wert zu füllen, der zwischen liefernden und aufnehmenden System abgestimmt wurde. Dieser Wert darf nur nach Abstimmung mit dem aufnehmenden System geändert werden.
     *
     * @property string $herkunft
     */
    private $herkunft = null;

    /**
     * Der Vertriebskanal liefert welcher Partner über die Herkunft liefert (Bsp. Herkunft: clickrepair, Vertriebskanal: Insureninja)
     *
     * @property string $vertriebskanal
     */
    private $vertriebskanal = null;

    /**
     * Datum der Lieferung der Antragsdatei(Format TT.MM.JJJJ).
     *
     * @property string $exportdatum
     */
    private $exportdatum = null;

    /**
     * Ein kompletter Antragsdatensatz
     *
     * @property \Inkl\ValueCareApi\Entity\Antraege\AntragAType[] $antrag
     */
    private $antrag = [
        
    ];

    /**
     * Gets as herkunft
     *
     * Die Herkunft gibt das liefernde System an. Dieses Feld ist mit einem festen Wert zu füllen, der zwischen liefernden und aufnehmenden System abgestimmt wurde. Dieser Wert darf nur nach Abstimmung mit dem aufnehmenden System geändert werden.
     *
     * @return string
     */
    public function getHerkunft()
    {
        return $this->herkunft;
    }

    /**
     * Sets a new herkunft
     *
     * Die Herkunft gibt das liefernde System an. Dieses Feld ist mit einem festen Wert zu füllen, der zwischen liefernden und aufnehmenden System abgestimmt wurde. Dieser Wert darf nur nach Abstimmung mit dem aufnehmenden System geändert werden.
     *
     * @param string $herkunft
     * @return self
     */
    public function setHerkunft($herkunft)
    {
        $this->herkunft = $herkunft;
        return $this;
    }

    /**
     * Gets as vertriebskanal
     *
     * Der Vertriebskanal liefert welcher Partner über die Herkunft liefert (Bsp. Herkunft: clickrepair, Vertriebskanal: Insureninja)
     *
     * @return string
     */
    public function getVertriebskanal()
    {
        return $this->vertriebskanal;
    }

    /**
     * Sets a new vertriebskanal
     *
     * Der Vertriebskanal liefert welcher Partner über die Herkunft liefert (Bsp. Herkunft: clickrepair, Vertriebskanal: Insureninja)
     *
     * @param string $vertriebskanal
     * @return self
     */
    public function setVertriebskanal($vertriebskanal)
    {
        $this->vertriebskanal = $vertriebskanal;
        return $this;
    }

    /**
     * Gets as exportdatum
     *
     * Datum der Lieferung der Antragsdatei(Format TT.MM.JJJJ).
     *
     * @return string
     */
    public function getExportdatum()
    {
        return $this->exportdatum;
    }

    /**
     * Sets a new exportdatum
     *
     * Datum der Lieferung der Antragsdatei(Format TT.MM.JJJJ).
     *
     * @param string $exportdatum
     * @return self
     */
    public function setExportdatum($exportdatum)
    {
        $this->exportdatum = $exportdatum;
        return $this;
    }

    /**
     * Adds as antrag
     *
     * Ein kompletter Antragsdatensatz
     *
     * @return self
     * @param \Inkl\ValueCareApi\Entity\Antraege\AntragAType $antrag
     */
    public function addToAntrag(\Inkl\ValueCareApi\Entity\Antraege\AntragAType $antrag)
    {
        $this->antrag[] = $antrag;
        return $this;
    }

    /**
     * isset antrag
     *
     * Ein kompletter Antragsdatensatz
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAntrag($index)
    {
        return isset($this->antrag[$index]);
    }

    /**
     * unset antrag
     *
     * Ein kompletter Antragsdatensatz
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAntrag($index)
    {
        unset($this->antrag[$index]);
    }

    /**
     * Gets as antrag
     *
     * Ein kompletter Antragsdatensatz
     *
     * @return \Inkl\ValueCareApi\Entity\Antraege\AntragAType[]
     */
    public function getAntrag()
    {
        return $this->antrag;
    }

    /**
     * Sets a new antrag
     *
     * Ein kompletter Antragsdatensatz
     *
     * @param \Inkl\ValueCareApi\Entity\Antraege\AntragAType[] $antrag
     * @return self
     */
    public function setAntrag(array $antrag)
    {
        $this->antrag = $antrag;
        return $this;
    }


}

