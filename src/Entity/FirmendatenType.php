<?php

namespace Inkl\ValueCareApi\Entity;

/**
 * Class representing FirmendatenType
 *
 * Firmendatensatz mit Anschrift und Details zur Firma
 * XSD Type: Firmendaten
 */
class FirmendatenType
{

    /**
     * Vollständiger Name der Firma (z.B.: LBR + DRE AG)
     *
     * @property string $firmenname
     */
    private $firmenname = null;

    /**
     * (optional) Vorname des Ansprechpartners
     *
     * @property string $kontaktVorname
     */
    private $kontaktVorname = null;

    /**
     * (optional) Nachname des Ansprechpartners
     *
     * @property string $kontaktNachname
     */
    private $kontaktNachname = null;

    /**
     * Emailadresse für Kontakte durch WERTGARANTIE (ggf. vom Ansprechpartner)
     *
     * @property string $email
     */
    private $email = null;

    /**
     * Telefonnummer für Kontakte durch WERTGARANTIE (ggf. vom Ansprechpartner)
     *
     * @property string $telefon
     */
    private $telefon = null;

    /**
     * Handynummer für Kontakte durch WERTGARANTIE (ggf. vom Ansprechpartner)
     *
     * @property string $mobil
     */
    private $mobil = null;

    /**
     * Faxnummer für Kontakte durch WERTGARANTIE (ggf. vom Ansprechpartner)
     *
     * @property string $fax
     */
    private $fax = null;

    /**
     * (optional) Sprachkennzeichen für Kontaktaufnahme durch WERTGARANTIE. Wird kein Sprachkennzeichen übergeben, wird die Sprache aus der Anschrift abgeleitet. (Für CH: DE)
     *
     * @property string $sprachkennzeichen
     */
    private $sprachkennzeichen = null;

    /**
     * (optional) Umsatzsteueridentifikation der Firma. Wird nur in Ausnahmefällen benötigt.
     *  Kann nur nach Abstimmung/Freischaltung gefüllt werden
     *
     * @property string $ustID
     */
    private $ustID = null;

    /**
     * Postanschrift der Firma
     *
     * @property \Inkl\ValueCareApi\Entity\AnschriftType $anschrift
     */
    private $anschrift = null;

    /**
     * Gets as firmenname
     *
     * Vollständiger Name der Firma (z.B.: LBR + DRE AG)
     *
     * @return string
     */
    public function getFirmenname()
    {
        return $this->firmenname;
    }

    /**
     * Sets a new firmenname
     *
     * Vollständiger Name der Firma (z.B.: LBR + DRE AG)
     *
     * @param string $firmenname
     * @return self
     */
    public function setFirmenname($firmenname)
    {
        $this->firmenname = $firmenname;
        return $this;
    }

    /**
     * Gets as kontaktVorname
     *
     * (optional) Vorname des Ansprechpartners
     *
     * @return string
     */
    public function getKontaktVorname()
    {
        return $this->kontaktVorname;
    }

    /**
     * Sets a new kontaktVorname
     *
     * (optional) Vorname des Ansprechpartners
     *
     * @param string $kontaktVorname
     * @return self
     */
    public function setKontaktVorname($kontaktVorname)
    {
        $this->kontaktVorname = $kontaktVorname;
        return $this;
    }

    /**
     * Gets as kontaktNachname
     *
     * (optional) Nachname des Ansprechpartners
     *
     * @return string
     */
    public function getKontaktNachname()
    {
        return $this->kontaktNachname;
    }

    /**
     * Sets a new kontaktNachname
     *
     * (optional) Nachname des Ansprechpartners
     *
     * @param string $kontaktNachname
     * @return self
     */
    public function setKontaktNachname($kontaktNachname)
    {
        $this->kontaktNachname = $kontaktNachname;
        return $this;
    }

    /**
     * Gets as email
     *
     * Emailadresse für Kontakte durch WERTGARANTIE (ggf. vom Ansprechpartner)
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Sets a new email
     *
     * Emailadresse für Kontakte durch WERTGARANTIE (ggf. vom Ansprechpartner)
     *
     * @param string $email
     * @return self
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * Gets as telefon
     *
     * Telefonnummer für Kontakte durch WERTGARANTIE (ggf. vom Ansprechpartner)
     *
     * @return string
     */
    public function getTelefon()
    {
        return $this->telefon;
    }

    /**
     * Sets a new telefon
     *
     * Telefonnummer für Kontakte durch WERTGARANTIE (ggf. vom Ansprechpartner)
     *
     * @param string $telefon
     * @return self
     */
    public function setTelefon($telefon)
    {
        $this->telefon = $telefon;
        return $this;
    }

    /**
     * Gets as mobil
     *
     * Handynummer für Kontakte durch WERTGARANTIE (ggf. vom Ansprechpartner)
     *
     * @return string
     */
    public function getMobil()
    {
        return $this->mobil;
    }

    /**
     * Sets a new mobil
     *
     * Handynummer für Kontakte durch WERTGARANTIE (ggf. vom Ansprechpartner)
     *
     * @param string $mobil
     * @return self
     */
    public function setMobil($mobil)
    {
        $this->mobil = $mobil;
        return $this;
    }

    /**
     * Gets as fax
     *
     * Faxnummer für Kontakte durch WERTGARANTIE (ggf. vom Ansprechpartner)
     *
     * @return string
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * Sets a new fax
     *
     * Faxnummer für Kontakte durch WERTGARANTIE (ggf. vom Ansprechpartner)
     *
     * @param string $fax
     * @return self
     */
    public function setFax($fax)
    {
        $this->fax = $fax;
        return $this;
    }

    /**
     * Gets as sprachkennzeichen
     *
     * (optional) Sprachkennzeichen für Kontaktaufnahme durch WERTGARANTIE. Wird kein Sprachkennzeichen übergeben, wird die Sprache aus der Anschrift abgeleitet. (Für CH: DE)
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
     * (optional) Sprachkennzeichen für Kontaktaufnahme durch WERTGARANTIE. Wird kein Sprachkennzeichen übergeben, wird die Sprache aus der Anschrift abgeleitet. (Für CH: DE)
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
     * Gets as ustID
     *
     * (optional) Umsatzsteueridentifikation der Firma. Wird nur in Ausnahmefällen benötigt.
     *  Kann nur nach Abstimmung/Freischaltung gefüllt werden
     *
     * @return string
     */
    public function getUstID()
    {
        return $this->ustID;
    }

    /**
     * Sets a new ustID
     *
     * (optional) Umsatzsteueridentifikation der Firma. Wird nur in Ausnahmefällen benötigt.
     *  Kann nur nach Abstimmung/Freischaltung gefüllt werden
     *
     * @param string $ustID
     * @return self
     */
    public function setUstID($ustID)
    {
        $this->ustID = $ustID;
        return $this;
    }

    /**
     * Gets as anschrift
     *
     * Postanschrift der Firma
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
     * Postanschrift der Firma
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

