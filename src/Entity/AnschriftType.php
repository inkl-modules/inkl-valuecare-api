<?php

namespace Inkl\ValueCareApi\Entity;

/**
 * Class representing AnschriftType
 *
 * Eine vollständige Anschrift
 * XSD Type: Anschrift
 */
class AnschriftType
{

    /**
     * Strassename der Anschrift mit Hausnummer
     *
     * @property string $strasse
     */
    private $strasse = null;

    /**
     * (optional) Zusatzinformation zur Anschrift (z. B. 'Hinterhof' oder '3.OG links')
     *
     * @property string $adresszusatz
     */
    private $adresszusatz = null;

    /**
     * Postleitzahl der Anschrift
     *
     * @property string $pLZ
     */
    private $pLZ = null;

    /**
     * Ort der Anschrift
     *
     * @property string $ort
     */
    private $ort = null;

    /**
     * (optional) Länderkennzeichen der Anschrift nach ISO-3166-ALPHA-2
     *
     * @property string $laenderkennzeichen
     */
    private $laenderkennzeichen = null;

    /**
     * Gets as strasse
     *
     * Strassename der Anschrift mit Hausnummer
     *
     * @return string
     */
    public function getStrasse()
    {
        return $this->strasse;
    }

    /**
     * Sets a new strasse
     *
     * Strassename der Anschrift mit Hausnummer
     *
     * @param string $strasse
     * @return self
     */
    public function setStrasse($strasse)
    {
        $this->strasse = $strasse;
        return $this;
    }

    /**
     * Gets as adresszusatz
     *
     * (optional) Zusatzinformation zur Anschrift (z. B. 'Hinterhof' oder '3.OG links')
     *
     * @return string
     */
    public function getAdresszusatz()
    {
        return $this->adresszusatz;
    }

    /**
     * Sets a new adresszusatz
     *
     * (optional) Zusatzinformation zur Anschrift (z. B. 'Hinterhof' oder '3.OG links')
     *
     * @param string $adresszusatz
     * @return self
     */
    public function setAdresszusatz($adresszusatz)
    {
        $this->adresszusatz = $adresszusatz;
        return $this;
    }

    /**
     * Gets as pLZ
     *
     * Postleitzahl der Anschrift
     *
     * @return string
     */
    public function getPLZ()
    {
        return $this->pLZ;
    }

    /**
     * Sets a new pLZ
     *
     * Postleitzahl der Anschrift
     *
     * @param string $pLZ
     * @return self
     */
    public function setPLZ($pLZ)
    {
        $this->pLZ = $pLZ;
        return $this;
    }

    /**
     * Gets as ort
     *
     * Ort der Anschrift
     *
     * @return string
     */
    public function getOrt()
    {
        return $this->ort;
    }

    /**
     * Sets a new ort
     *
     * Ort der Anschrift
     *
     * @param string $ort
     * @return self
     */
    public function setOrt($ort)
    {
        $this->ort = $ort;
        return $this;
    }

    /**
     * Gets as laenderkennzeichen
     *
     * (optional) Länderkennzeichen der Anschrift nach ISO-3166-ALPHA-2
     *
     * @return string
     */
    public function getLaenderkennzeichen()
    {
        return $this->laenderkennzeichen;
    }

    /**
     * Sets a new laenderkennzeichen
     *
     * (optional) Länderkennzeichen der Anschrift nach ISO-3166-ALPHA-2
     *
     * @param string $laenderkennzeichen
     * @return self
     */
    public function setLaenderkennzeichen($laenderkennzeichen)
    {
        $this->laenderkennzeichen = $laenderkennzeichen;
        return $this;
    }


}

