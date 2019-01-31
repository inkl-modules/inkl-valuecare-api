<?php

namespace Inkl\ValueCareApi\Entity\AntragGeraetType;

/**
 * Class representing KomponentenAType
 */
class KomponentenAType
{

    /**
     * @property \Inkl\ValueCareApi\Entity\AntragKomponenteType[] $komponente
     */
    private $komponente = [
        
    ];

    /**
     * Adds as komponente
     *
     * @return self
     * @param \Inkl\ValueCareApi\Entity\AntragKomponenteType $komponente
     */
    public function addToKomponente(\Inkl\ValueCareApi\Entity\AntragKomponenteType $komponente)
    {
        $this->komponente[] = $komponente;
        return $this;
    }

    /**
     * isset komponente
     *
     * @param int|string $index
     * @return bool
     */
    public function issetKomponente($index)
    {
        return isset($this->komponente[$index]);
    }

    /**
     * unset komponente
     *
     * @param int|string $index
     * @return void
     */
    public function unsetKomponente($index)
    {
        unset($this->komponente[$index]);
    }

    /**
     * Gets as komponente
     *
     * @return \Inkl\ValueCareApi\Entity\AntragKomponenteType[]
     */
    public function getKomponente()
    {
        return $this->komponente;
    }

    /**
     * Sets a new komponente
     *
     * @param \Inkl\ValueCareApi\Entity\AntragKomponenteType[] $komponente
     * @return self
     */
    public function setKomponente(array $komponente)
    {
        $this->komponente = $komponente;
        return $this;
    }


}

