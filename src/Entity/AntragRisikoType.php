<?php

namespace Inkl\ValueCareApi\Entity;

/**
 * Class representing AntragRisikoType
 *
 *
 * XSD Type: AntragRisiko
 */
class AntragRisikoType
{

    /**
     * Technischer Name des ausgewählten Risikos.
     *
     * @property string $risikotyp
     */
    private $risikotyp = null;

    /**
     * Gets as risikotyp
     *
     * Technischer Name des ausgewählten Risikos.
     *
     * @return string
     */
    public function getRisikotyp()
    {
        return $this->risikotyp;
    }

    /**
     * Sets a new risikotyp
     *
     * Technischer Name des ausgewählten Risikos.
     *
     * @param string $risikotyp
     * @return self
     */
    public function setRisikotyp($risikotyp)
    {
        $this->risikotyp = $risikotyp;
        return $this;
    }


}

