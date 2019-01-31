<?php

namespace Inkl\ValueCareApi\Entity\Antraege\AntragAType\ProduktdetailsAType;

/**
 * Class representing BeratungsprotokolleAType
 */
class BeratungsprotokolleAType
{

    /**
     * Ist eine Beratung zum Produkt nötig, können hier alle verwendeten Beratungsbausteine geliefert werden.
     *
     * @property \Inkl\ValueCareApi\Entity\Antraege\AntragAType\ProduktdetailsAType\BeratungsprotokolleAType\ProtokollAType[] $protokoll
     */
    private $protokoll = [
        
    ];

    /**
     * Adds as protokoll
     *
     * Ist eine Beratung zum Produkt nötig, können hier alle verwendeten Beratungsbausteine geliefert werden.
     *
     * @return self
     * @param \Inkl\ValueCareApi\Entity\Antraege\AntragAType\ProduktdetailsAType\BeratungsprotokolleAType\ProtokollAType $protokoll
     */
    public function addToProtokoll(\Inkl\ValueCareApi\Entity\Antraege\AntragAType\ProduktdetailsAType\BeratungsprotokolleAType\ProtokollAType $protokoll)
    {
        $this->protokoll[] = $protokoll;
        return $this;
    }

    /**
     * isset protokoll
     *
     * Ist eine Beratung zum Produkt nötig, können hier alle verwendeten Beratungsbausteine geliefert werden.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetProtokoll($index)
    {
        return isset($this->protokoll[$index]);
    }

    /**
     * unset protokoll
     *
     * Ist eine Beratung zum Produkt nötig, können hier alle verwendeten Beratungsbausteine geliefert werden.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetProtokoll($index)
    {
        unset($this->protokoll[$index]);
    }

    /**
     * Gets as protokoll
     *
     * Ist eine Beratung zum Produkt nötig, können hier alle verwendeten Beratungsbausteine geliefert werden.
     *
     * @return \Inkl\ValueCareApi\Entity\Antraege\AntragAType\ProduktdetailsAType\BeratungsprotokolleAType\ProtokollAType[]
     */
    public function getProtokoll()
    {
        return $this->protokoll;
    }

    /**
     * Sets a new protokoll
     *
     * Ist eine Beratung zum Produkt nötig, können hier alle verwendeten Beratungsbausteine geliefert werden.
     *
     * @param \Inkl\ValueCareApi\Entity\Antraege\AntragAType\ProduktdetailsAType\BeratungsprotokolleAType\ProtokollAType[] $protokoll
     * @return self
     */
    public function setProtokoll(array $protokoll)
    {
        $this->protokoll = $protokoll;
        return $this;
    }


}

