<?php

namespace Inkl\ValueCareApi\Entity\KuendigungType\GeraeteAType;

/**
 * Class representing GeraetAType
 */
class GeraetAType
{

    /**
     * Laufende Nummer des zu kündigenden Gerätes am Vertrag.
     *
     * @property int $position
     */
    private $position = null;

    /**
     * Risiko das gekündigt werden soll. Wird kein Risikotyp angegeben, werden alle Risiken gekündigt.
     *
     * @property string $risikotyp
     */
    private $risikotyp = null;

    /**
     * Gets as position
     *
     * Laufende Nummer des zu kündigenden Gerätes am Vertrag.
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
     * Laufende Nummer des zu kündigenden Gerätes am Vertrag.
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
     * Gets as risikotyp
     *
     * Risiko das gekündigt werden soll. Wird kein Risikotyp angegeben, werden alle Risiken gekündigt.
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
     * Risiko das gekündigt werden soll. Wird kein Risikotyp angegeben, werden alle Risiken gekündigt.
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

