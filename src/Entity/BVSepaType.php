<?php

namespace Inkl\ValueCareApi\Entity;

/**
 * Class representing BVSepaType
 *
 * Bankverbindung nach SEPA für Zahlungen/Einzüge.
 * XSD Type: BVSepa
 */
class BVSepaType
{

    /**
     * Die IBAN der Bankverbindung.
     *
     * @property string $iBAN
     */
    private $iBAN = null;

    /**
     * (optional) Der Nachname des Kontoinhabers. (Kann nur nach Abstimmung/Freischaltung gefüllt werden)
     *
     * @property string $kontoinhaber
     */
    private $kontoinhaber = null;

    /**
     * (optional) Interner Schlüsel für eine Bankverbindung. (Kann nur nach Abstimmung/Freischaltung gefüllt werden)
     *
     * @property int $bKOIdentNr
     */
    private $bKOIdentNr = null;

    /**
     * (optional) Wurde vom Kunden ein Sepamandat eingeholt und eine von WGG bereitgestellte Mandatsreferenz kommuniziert, ist dieses hier zu vermerken. (Kann nur nach Abstimmung/Freischaltung gefüllt werden)
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
     * Gets as kontoinhaber
     *
     * (optional) Der Nachname des Kontoinhabers. (Kann nur nach Abstimmung/Freischaltung gefüllt werden)
     *
     * @return string
     */
    public function getKontoinhaber()
    {
        return $this->kontoinhaber;
    }

    /**
     * Sets a new kontoinhaber
     *
     * (optional) Der Nachname des Kontoinhabers. (Kann nur nach Abstimmung/Freischaltung gefüllt werden)
     *
     * @param string $kontoinhaber
     * @return self
     */
    public function setKontoinhaber($kontoinhaber)
    {
        $this->kontoinhaber = $kontoinhaber;
        return $this;
    }

    /**
     * Gets as bKOIdentNr
     *
     * (optional) Interner Schlüsel für eine Bankverbindung. (Kann nur nach Abstimmung/Freischaltung gefüllt werden)
     *
     * @return int
     */
    public function getBKOIdentNr()
    {
        return $this->bKOIdentNr;
    }

    /**
     * Sets a new bKOIdentNr
     *
     * (optional) Interner Schlüsel für eine Bankverbindung. (Kann nur nach Abstimmung/Freischaltung gefüllt werden)
     *
     * @param int $bKOIdentNr
     * @return self
     */
    public function setBKOIdentNr($bKOIdentNr)
    {
        $this->bKOIdentNr = $bKOIdentNr;
        return $this;
    }

    /**
     * Gets as mandatsreferenz
     *
     * (optional) Wurde vom Kunden ein Sepamandat eingeholt und eine von WGG bereitgestellte Mandatsreferenz kommuniziert, ist dieses hier zu vermerken. (Kann nur nach Abstimmung/Freischaltung gefüllt werden)
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
     * (optional) Wurde vom Kunden ein Sepamandat eingeholt und eine von WGG bereitgestellte Mandatsreferenz kommuniziert, ist dieses hier zu vermerken. (Kann nur nach Abstimmung/Freischaltung gefüllt werden)
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

