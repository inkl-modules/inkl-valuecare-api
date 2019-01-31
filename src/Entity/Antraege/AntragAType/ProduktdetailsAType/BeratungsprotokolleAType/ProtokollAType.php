<?php

namespace Inkl\ValueCareApi\Entity\Antraege\AntragAType\ProduktdetailsAType\BeratungsprotokolleAType;

/**
 * Class representing ProtokollAType
 */
class ProtokollAType
{

    /**
     * Id eines Beratungsbausteins
     *
     * @property string $beratungsbaustein
     */
    private $beratungsbaustein = null;

    /**
     * Gets as beratungsbaustein
     *
     * Id eines Beratungsbausteins
     *
     * @return string
     */
    public function getBeratungsbaustein()
    {
        return $this->beratungsbaustein;
    }

    /**
     * Sets a new beratungsbaustein
     *
     * Id eines Beratungsbausteins
     *
     * @param string $beratungsbaustein
     * @return self
     */
    public function setBeratungsbaustein($beratungsbaustein)
    {
        $this->beratungsbaustein = $beratungsbaustein;
        return $this;
    }


}

