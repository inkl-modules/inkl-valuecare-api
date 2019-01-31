<?php

namespace Inkl\ValueCareApi\Entity\AntragGeraetType;

/**
 * Class representing RisikenAType
 */
class RisikenAType
{

    /**
     * @property \Inkl\ValueCareApi\Entity\AntragRisikoType[] $risiko
     */
    private $risiko = [
        
    ];

    /**
     * Adds as risiko
     *
     * @return self
     * @param \Inkl\ValueCareApi\Entity\AntragRisikoType $risiko
     */
    public function addToRisiko(\Inkl\ValueCareApi\Entity\AntragRisikoType $risiko)
    {
        $this->risiko[] = $risiko;
        return $this;
    }

    /**
     * isset risiko
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRisiko($index)
    {
        return isset($this->risiko[$index]);
    }

    /**
     * unset risiko
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRisiko($index)
    {
        unset($this->risiko[$index]);
    }

    /**
     * Gets as risiko
     *
     * @return \Inkl\ValueCareApi\Entity\AntragRisikoType[]
     */
    public function getRisiko()
    {
        return $this->risiko;
    }

    /**
     * Sets a new risiko
     *
     * @param \Inkl\ValueCareApi\Entity\AntragRisikoType[] $risiko
     * @return self
     */
    public function setRisiko(array $risiko)
    {
        $this->risiko = $risiko;
        return $this;
    }


}

