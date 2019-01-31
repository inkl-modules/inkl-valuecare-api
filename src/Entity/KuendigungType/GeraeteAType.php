<?php

namespace Inkl\ValueCareApi\Entity\KuendigungType;

/**
 * Class representing GeraeteAType
 */
class GeraeteAType
{

    /**
     * Gerät das gekündigt werden soll.
     *
     * @property \Inkl\ValueCareApi\Entity\KuendigungType\GeraeteAType\GeraetAType[] $geraet
     */
    private $geraet = [
        
    ];

    /**
     * Adds as geraet
     *
     * Gerät das gekündigt werden soll.
     *
     * @return self
     * @param \Inkl\ValueCareApi\Entity\KuendigungType\GeraeteAType\GeraetAType $geraet
     */
    public function addToGeraet(\Inkl\ValueCareApi\Entity\KuendigungType\GeraeteAType\GeraetAType $geraet)
    {
        $this->geraet[] = $geraet;
        return $this;
    }

    /**
     * isset geraet
     *
     * Gerät das gekündigt werden soll.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetGeraet($index)
    {
        return isset($this->geraet[$index]);
    }

    /**
     * unset geraet
     *
     * Gerät das gekündigt werden soll.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetGeraet($index)
    {
        unset($this->geraet[$index]);
    }

    /**
     * Gets as geraet
     *
     * Gerät das gekündigt werden soll.
     *
     * @return \Inkl\ValueCareApi\Entity\KuendigungType\GeraeteAType\GeraetAType[]
     */
    public function getGeraet()
    {
        return $this->geraet;
    }

    /**
     * Sets a new geraet
     *
     * Gerät das gekündigt werden soll.
     *
     * @param \Inkl\ValueCareApi\Entity\KuendigungType\GeraeteAType\GeraetAType[] $geraet
     * @return self
     */
    public function setGeraet(array $geraet)
    {
        $this->geraet = $geraet;
        return $this;
    }


}

