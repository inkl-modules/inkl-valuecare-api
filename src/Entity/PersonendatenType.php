<?php

namespace Inkl\ValueCareApi\Entity;

/**
 * Class representing PersonendatenType
 *
 * Personendatansatz mit Anschrift und Details zur Person
 * XSD Type: Personendaten
 */
class PersonendatenType
{

    /**
     * Anrede der Person (Frau, Herr)
     *  Für dieses Feld sind Schlüsselwerte vorgesehen. Diese finden Sie zum Elementnamen in der Tabelle unter: http://www.wertgarantie.de/XMLSchema/sst_schluesseltabelle.xlsx
     *
     * @property string $anrede
     */
    private $anrede = null;

    /**
     * (optional) Titel der Person (Dr., Prof. usw)
     *  Für dieses Feld sind Schlüsselwerte vorgesehen. Diese finden Sie zum Elementnamen in der Tabelle unter: http://www.wertgarantie.de/XMLSchema/sst_schluesseltabelle.xlsx
     *
     * @property string $titel
     */
    private $titel = null;

    /**
     * Vorname der Person
     *
     * @property string $vorname
     */
    private $vorname = null;

    /**
     * Nachname der Person
     *
     * @property string $nachname
     */
    private $nachname = null;

    /**
     * (optional) Geburtsdatum der Person (Format: TT.MM.JJJJ)
     *
     * @property string $geburtsdatum
     */
    private $geburtsdatum = null;

    /**
     * Private Emailadresse der Person
     *
     * @property string $emailPrivat
     */
    private $emailPrivat = null;

    /**
     * Geschäftliche Emailadresse der Person
     *
     * @property string $emailGeschaeftlich
     */
    private $emailGeschaeftlich = null;

    /**
     * Private Telefonnummer der Person
     *
     * @property string $telefonPrivat
     */
    private $telefonPrivat = null;

    /**
     * Geschäftliche Telefonnummer der Person
     *
     * @property string $telefonGeschaeftlich
     */
    private $telefonGeschaeftlich = null;

    /**
     * Private Handynummer der Person
     *
     * @property string $mobilPrivat
     */
    private $mobilPrivat = null;

    /**
     * Geschäftliche Handynummer der Person
     *
     * @property string $mobilGeschaeftlich
     */
    private $mobilGeschaeftlich = null;

    /**
     * Private Faxnummer der Person
     *
     * @property string $faxPrivat
     */
    private $faxPrivat = null;

    /**
     * Geschäftliche Faxnummer der Person
     *
     * @property string $faxGeschaeftlich
     */
    private $faxGeschaeftlich = null;

    /**
     * (optional) Sprachkennzeichen der Person. Wird kein Sprachkennzeichen übergeben, wird die Sprache aus der Anschrift abgeleitet. (Für CH: DE)
     *
     * @property string $sprachkennzeichen
     */
    private $sprachkennzeichen = null;

    /**
     * (optional) Steuernummer der Person. Wird nur in Ausnahmefällen benötigt.
     *  Kann nur nach Abstimmung/Freischaltung gefüllt werden
     *
     * @property string $steuernummer
     */
    private $steuernummer = null;

    /**
     * Adresse der Person
     *
     * @property \Inkl\ValueCareApi\Entity\AnschriftType $anschrift
     */
    private $anschrift = null;

    /**
     * Gets as anrede
     *
     * Anrede der Person (Frau, Herr)
     *  Für dieses Feld sind Schlüsselwerte vorgesehen. Diese finden Sie zum Elementnamen in der Tabelle unter: http://www.wertgarantie.de/XMLSchema/sst_schluesseltabelle.xlsx
     *
     * @return string
     */
    public function getAnrede()
    {
        return $this->anrede;
    }

    /**
     * Sets a new anrede
     *
     * Anrede der Person (Frau, Herr)
     *  Für dieses Feld sind Schlüsselwerte vorgesehen. Diese finden Sie zum Elementnamen in der Tabelle unter: http://www.wertgarantie.de/XMLSchema/sst_schluesseltabelle.xlsx
     *
     * @param string $anrede
     * @return self
     */
    public function setAnrede($anrede)
    {
        $this->anrede = $anrede;
        return $this;
    }

    /**
     * Gets as titel
     *
     * (optional) Titel der Person (Dr., Prof. usw)
     *  Für dieses Feld sind Schlüsselwerte vorgesehen. Diese finden Sie zum Elementnamen in der Tabelle unter: http://www.wertgarantie.de/XMLSchema/sst_schluesseltabelle.xlsx
     *
     * @return string
     */
    public function getTitel()
    {
        return $this->titel;
    }

    /**
     * Sets a new titel
     *
     * (optional) Titel der Person (Dr., Prof. usw)
     *  Für dieses Feld sind Schlüsselwerte vorgesehen. Diese finden Sie zum Elementnamen in der Tabelle unter: http://www.wertgarantie.de/XMLSchema/sst_schluesseltabelle.xlsx
     *
     * @param string $titel
     * @return self
     */
    public function setTitel($titel)
    {
        $this->titel = $titel;
        return $this;
    }

    /**
     * Gets as vorname
     *
     * Vorname der Person
     *
     * @return string
     */
    public function getVorname()
    {
        return $this->vorname;
    }

    /**
     * Sets a new vorname
     *
     * Vorname der Person
     *
     * @param string $vorname
     * @return self
     */
    public function setVorname($vorname)
    {
        $this->vorname = $vorname;
        return $this;
    }

    /**
     * Gets as nachname
     *
     * Nachname der Person
     *
     * @return string
     */
    public function getNachname()
    {
        return $this->nachname;
    }

    /**
     * Sets a new nachname
     *
     * Nachname der Person
     *
     * @param string $nachname
     * @return self
     */
    public function setNachname($nachname)
    {
        $this->nachname = $nachname;
        return $this;
    }

    /**
     * Gets as geburtsdatum
     *
     * (optional) Geburtsdatum der Person (Format: TT.MM.JJJJ)
     *
     * @return string
     */
    public function getGeburtsdatum()
    {
        return $this->geburtsdatum;
    }

    /**
     * Sets a new geburtsdatum
     *
     * (optional) Geburtsdatum der Person (Format: TT.MM.JJJJ)
     *
     * @param string $geburtsdatum
     * @return self
     */
    public function setGeburtsdatum($geburtsdatum)
    {
        $this->geburtsdatum = $geburtsdatum;
        return $this;
    }

    /**
     * Gets as emailPrivat
     *
     * Private Emailadresse der Person
     *
     * @return string
     */
    public function getEmailPrivat()
    {
        return $this->emailPrivat;
    }

    /**
     * Sets a new emailPrivat
     *
     * Private Emailadresse der Person
     *
     * @param string $emailPrivat
     * @return self
     */
    public function setEmailPrivat($emailPrivat)
    {
        $this->emailPrivat = $emailPrivat;
        return $this;
    }

    /**
     * Gets as emailGeschaeftlich
     *
     * Geschäftliche Emailadresse der Person
     *
     * @return string
     */
    public function getEmailGeschaeftlich()
    {
        return $this->emailGeschaeftlich;
    }

    /**
     * Sets a new emailGeschaeftlich
     *
     * Geschäftliche Emailadresse der Person
     *
     * @param string $emailGeschaeftlich
     * @return self
     */
    public function setEmailGeschaeftlich($emailGeschaeftlich)
    {
        $this->emailGeschaeftlich = $emailGeschaeftlich;
        return $this;
    }

    /**
     * Gets as telefonPrivat
     *
     * Private Telefonnummer der Person
     *
     * @return string
     */
    public function getTelefonPrivat()
    {
        return $this->telefonPrivat;
    }

    /**
     * Sets a new telefonPrivat
     *
     * Private Telefonnummer der Person
     *
     * @param string $telefonPrivat
     * @return self
     */
    public function setTelefonPrivat($telefonPrivat)
    {
        $this->telefonPrivat = $telefonPrivat;
        return $this;
    }

    /**
     * Gets as telefonGeschaeftlich
     *
     * Geschäftliche Telefonnummer der Person
     *
     * @return string
     */
    public function getTelefonGeschaeftlich()
    {
        return $this->telefonGeschaeftlich;
    }

    /**
     * Sets a new telefonGeschaeftlich
     *
     * Geschäftliche Telefonnummer der Person
     *
     * @param string $telefonGeschaeftlich
     * @return self
     */
    public function setTelefonGeschaeftlich($telefonGeschaeftlich)
    {
        $this->telefonGeschaeftlich = $telefonGeschaeftlich;
        return $this;
    }

    /**
     * Gets as mobilPrivat
     *
     * Private Handynummer der Person
     *
     * @return string
     */
    public function getMobilPrivat()
    {
        return $this->mobilPrivat;
    }

    /**
     * Sets a new mobilPrivat
     *
     * Private Handynummer der Person
     *
     * @param string $mobilPrivat
     * @return self
     */
    public function setMobilPrivat($mobilPrivat)
    {
        $this->mobilPrivat = $mobilPrivat;
        return $this;
    }

    /**
     * Gets as mobilGeschaeftlich
     *
     * Geschäftliche Handynummer der Person
     *
     * @return string
     */
    public function getMobilGeschaeftlich()
    {
        return $this->mobilGeschaeftlich;
    }

    /**
     * Sets a new mobilGeschaeftlich
     *
     * Geschäftliche Handynummer der Person
     *
     * @param string $mobilGeschaeftlich
     * @return self
     */
    public function setMobilGeschaeftlich($mobilGeschaeftlich)
    {
        $this->mobilGeschaeftlich = $mobilGeschaeftlich;
        return $this;
    }

    /**
     * Gets as faxPrivat
     *
     * Private Faxnummer der Person
     *
     * @return string
     */
    public function getFaxPrivat()
    {
        return $this->faxPrivat;
    }

    /**
     * Sets a new faxPrivat
     *
     * Private Faxnummer der Person
     *
     * @param string $faxPrivat
     * @return self
     */
    public function setFaxPrivat($faxPrivat)
    {
        $this->faxPrivat = $faxPrivat;
        return $this;
    }

    /**
     * Gets as faxGeschaeftlich
     *
     * Geschäftliche Faxnummer der Person
     *
     * @return string
     */
    public function getFaxGeschaeftlich()
    {
        return $this->faxGeschaeftlich;
    }

    /**
     * Sets a new faxGeschaeftlich
     *
     * Geschäftliche Faxnummer der Person
     *
     * @param string $faxGeschaeftlich
     * @return self
     */
    public function setFaxGeschaeftlich($faxGeschaeftlich)
    {
        $this->faxGeschaeftlich = $faxGeschaeftlich;
        return $this;
    }

    /**
     * Gets as sprachkennzeichen
     *
     * (optional) Sprachkennzeichen der Person. Wird kein Sprachkennzeichen übergeben, wird die Sprache aus der Anschrift abgeleitet. (Für CH: DE)
     *
     * @return string
     */
    public function getSprachkennzeichen()
    {
        return $this->sprachkennzeichen;
    }

    /**
     * Sets a new sprachkennzeichen
     *
     * (optional) Sprachkennzeichen der Person. Wird kein Sprachkennzeichen übergeben, wird die Sprache aus der Anschrift abgeleitet. (Für CH: DE)
     *
     * @param string $sprachkennzeichen
     * @return self
     */
    public function setSprachkennzeichen($sprachkennzeichen)
    {
        $this->sprachkennzeichen = $sprachkennzeichen;
        return $this;
    }

    /**
     * Gets as steuernummer
     *
     * (optional) Steuernummer der Person. Wird nur in Ausnahmefällen benötigt.
     *  Kann nur nach Abstimmung/Freischaltung gefüllt werden
     *
     * @return string
     */
    public function getSteuernummer()
    {
        return $this->steuernummer;
    }

    /**
     * Sets a new steuernummer
     *
     * (optional) Steuernummer der Person. Wird nur in Ausnahmefällen benötigt.
     *  Kann nur nach Abstimmung/Freischaltung gefüllt werden
     *
     * @param string $steuernummer
     * @return self
     */
    public function setSteuernummer($steuernummer)
    {
        $this->steuernummer = $steuernummer;
        return $this;
    }

    /**
     * Gets as anschrift
     *
     * Adresse der Person
     *
     * @return \Inkl\ValueCareApi\Entity\AnschriftType
     */
    public function getAnschrift()
    {
        return $this->anschrift;
    }

    /**
     * Sets a new anschrift
     *
     * Adresse der Person
     *
     * @param \Inkl\ValueCareApi\Entity\AnschriftType $anschrift
     * @return self
     */
    public function setAnschrift(\Inkl\ValueCareApi\Entity\AnschriftType $anschrift)
    {
        $this->anschrift = $anschrift;
        return $this;
    }


}

