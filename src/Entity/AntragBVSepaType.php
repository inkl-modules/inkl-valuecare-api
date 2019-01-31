<?php

namespace Inkl\ValueCareApi\Entity;

/**
 * Class representing AntragBVSepaType
 *
 * Bankverbindung nach SEPA für Zahlungen/Einzüge.
 * XSD Type: AntragBVSepa
 */
class AntragBVSepaType
{

    /**
     * Die IBAN der Bankverbindung.
     *
     * @property string $iBAN
     */
    private $iBAN = null;

    /**
     * (optional) Wurde vom Kunden ein Sepamandat eingeholt und eine von WGG bereitgestellte Mandatsreferenz kommuniziert, ist dieses hier zu vermerken.
     *
     * @property string $mandatsreferenz
     */
    private $mandatsreferenz = null;

    /**
     * Gets as iBAN
     *
     * Die IBAN der Bankverbindung.
     *
     * @return string
     */
    public function getIBAN()
    {
        return $this->iBAN;
    }

    /**
     * Sets a new iBAN
     *
     * Die IBAN der Bankverbindung.
     *
     * @param string $iBAN
     * @return self
     */
    public function setIBAN($iBAN)
    {
        $this->iBAN = $iBAN;
        return $this;
    }

    /**
     * Gets as mandatsreferenz
     *
     * (optional) Wurde vom Kunden ein Sepamandat eingeholt und eine von WGG bereitgestellte Mandatsreferenz kommuniziert, ist dieses hier zu vermerken.
     *
     * @return string
     */
    public function getMandatsreferenz()
    {
        return $this->mandatsreferenz;
    }

    /**
     * Sets a new mandatsreferenz
     *
     * (optional) Wurde vom Kunden ein Sepamandat eingeholt und eine von WGG bereitgestellte Mandatsreferenz kommuniziert, ist dieses hier zu vermerken.
     *
     * @param string $mandatsreferenz
     * @return self
     */
    public function setMandatsreferenz($mandatsreferenz)
    {
        $this->mandatsreferenz = $mandatsreferenz;
        return $this;
    }


}

