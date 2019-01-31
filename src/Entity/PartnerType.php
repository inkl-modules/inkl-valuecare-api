<?php

namespace Inkl\ValueCareApi\Entity;

/**
 * Class representing PartnerType
 *
 * Partnerdatensatz, enthält alle Datenfelder zu einer Person.
 * XSD Type: Partner
 */
class PartnerType
{

    /**
     * Eindeutige Identifikationsnummer des Partners.
     *
     * @property int $partnernummer
     */
    private $partnernummer = null;

    /**
     * Anrede des Partners (Frau, Herr, Firma usw.).
     *  Für dieses Feld sind Schlüsselwerte vorgesehen. Eine Liste aller zugelassenen Werte sind in folgender Tabelle zu finden: http://www.wertgarantie.de/XMLSchema/internet_xsd_schluesseltabelle_DE.xls.
     *
     * @property int $anrede
     */
    private $anrede = null;

    /**
     * Zusatz zur Anrede des Partners (von, van de usw.).
     *
     * @property string $zusatzanrede
     */
    private $zusatzanrede = null;

    /**
     * Akademischer Titel des Partners (Dr., Prof. usw).
     *  Für dieses Feld sind Schlüsselwerte vorgesehen. Eine Liste aller zugelassenen Werte sind in folgender Tabelle zu finden: http://www.wertgarantie.de/XMLSchema/internet_xsd_schluesseltabelle_DE.xls.
     *
     * @property int $akademischerTitel
     */
    private $akademischerTitel = null;

    /**
     * Vorname des Partners.
     *
     * @property string $vorname
     */
    private $vorname = null;

    /**
     * Nachname des Partners.
     *
     * @property string $nachname
     */
    private $nachname = null;

    /**
     * Weitere Nachnamen des Partners. Bei Anrede Firma steht hier der Firmenname.
     *
     * @property string $name2
     */
    private $name2 = null;

    /**
     * Geburtsdatum des Partners (Format TT.MM.JJJJ).
     *
     * @property string $geburtsdatum
     */
    private $geburtsdatum = null;

    /**
     * Private Telefonnummer des Partners.
     *
     * @property string $telefonPrivat
     */
    private $telefonPrivat = null;

    /**
     * Geschäftliche Telefonnummer des Partners.
     *
     * @property string $telefonGeschaeftlich
     */
    private $telefonGeschaeftlich = null;

    /**
     * Private Faxnummer des Partners.
     *
     * @property string $faxPrivat
     */
    private $faxPrivat = null;

    /**
     * Geschäftliche Faxnummer des Partners.
     *
     * @property string $faxGeschaeftlich
     */
    private $faxGeschaeftlich = null;

    /**
     * Private Handynummer des Partners.
     *
     * @property string $mobilPrivat
     */
    private $mobilPrivat = null;

    /**
     * Geschäftliche Handynummer des Partners.
     *
     * @property string $mobilGeschaeftlich
     */
    private $mobilGeschaeftlich = null;

    /**
     * Private Emailadresse des Partners.
     *
     * @property string $emailPrivat
     */
    private $emailPrivat = null;

    /**
     * Geschäftliche Emailadresse des Partners.
     *
     * @property string $emailGeschaeftlich
     */
    private $emailGeschaeftlich = null;

    /**
     * Homepage des Partners.
     *
     * @property string $homepage
     */
    private $homepage = null;

    /**
     * Steuernummer des Partners.
     *
     * @property string $steuernummer
     */
    private $steuernummer = null;

    /**
     * Steuerland des Partners.
     *  Für dieses Feld sind Schlüsselwerte vorgesehen. Eine Liste aller zugelassenen Werte sind in folgender Tabelle zu finden: http://www.wertgarantie.de/XMLSchema/internet_xsd_schluesseltabelle_DE.xls.
     *
     * @property string $steuerLKZ
     */
    private $steuerLKZ = null;

    /**
     * Staatsangehörigkeit des Partners.
     *
     * @property string $staatsangehoerigkeit
     */
    private $staatsangehoerigkeit = null;

    /**
     * Sprache des Partners.
     *  Für dieses Feld sind Schlüsselwerte vorgesehen. Eine Liste aller zugelassenen Werte sind in folgender Tabelle zu finden: http://www.wertgarantie.de/XMLSchema/internet_xsd_schluesseltabelle_DE.xls.
     *
     * @property string $sprache
     */
    private $sprache = null;

    /**
     * Erlaubte Kontaktwege (für Werbung etc.) zum Partner.
     *  Für dieses Feld sind Schlüsselwerte vorgesehen. Eine Liste aller zugelassenen Werte sind in folgender Tabelle zu finden: http://www.wertgarantie.de/XMLSchema/internet_xsd_schluesseltabelle_DE.xls.
     *
     * @property string $werbeeinwilligung
     */
    private $werbeeinwilligung = null;

    /**
     * Gets as partnernummer
     *
     * Eindeutige Identifikationsnummer des Partners.
     *
     * @return int
     */
    public function getPartnernummer()
    {
        return $this->partnernummer;
    }

    /**
     * Sets a new partnernummer
     *
     * Eindeutige Identifikationsnummer des Partners.
     *
     * @param int $partnernummer
     * @return self
     */
    public function setPartnernummer($partnernummer)
    {
        $this->partnernummer = $partnernummer;
        return $this;
    }

    /**
     * Gets as anrede
     *
     * Anrede des Partners (Frau, Herr, Firma usw.).
     *  Für dieses Feld sind Schlüsselwerte vorgesehen. Eine Liste aller zugelassenen Werte sind in folgender Tabelle zu finden: http://www.wertgarantie.de/XMLSchema/internet_xsd_schluesseltabelle_DE.xls.
     *
     * @return int
     */
    public function getAnrede()
    {
        return $this->anrede;
    }

    /**
     * Sets a new anrede
     *
     * Anrede des Partners (Frau, Herr, Firma usw.).
     *  Für dieses Feld sind Schlüsselwerte vorgesehen. Eine Liste aller zugelassenen Werte sind in folgender Tabelle zu finden: http://www.wertgarantie.de/XMLSchema/internet_xsd_schluesseltabelle_DE.xls.
     *
     * @param int $anrede
     * @return self
     */
    public function setAnrede($anrede)
    {
        $this->anrede = $anrede;
        return $this;
    }

    /**
     * Gets as zusatzanrede
     *
     * Zusatz zur Anrede des Partners (von, van de usw.).
     *
     * @return string
     */
    public function getZusatzanrede()
    {
        return $this->zusatzanrede;
    }

    /**
     * Sets a new zusatzanrede
     *
     * Zusatz zur Anrede des Partners (von, van de usw.).
     *
     * @param string $zusatzanrede
     * @return self
     */
    public function setZusatzanrede($zusatzanrede)
    {
        $this->zusatzanrede = $zusatzanrede;
        return $this;
    }

    /**
     * Gets as akademischerTitel
     *
     * Akademischer Titel des Partners (Dr., Prof. usw).
     *  Für dieses Feld sind Schlüsselwerte vorgesehen. Eine Liste aller zugelassenen Werte sind in folgender Tabelle zu finden: http://www.wertgarantie.de/XMLSchema/internet_xsd_schluesseltabelle_DE.xls.
     *
     * @return int
     */
    public function getAkademischerTitel()
    {
        return $this->akademischerTitel;
    }

    /**
     * Sets a new akademischerTitel
     *
     * Akademischer Titel des Partners (Dr., Prof. usw).
     *  Für dieses Feld sind Schlüsselwerte vorgesehen. Eine Liste aller zugelassenen Werte sind in folgender Tabelle zu finden: http://www.wertgarantie.de/XMLSchema/internet_xsd_schluesseltabelle_DE.xls.
     *
     * @param int $akademischerTitel
     * @return self
     */
    public function setAkademischerTitel($akademischerTitel)
    {
        $this->akademischerTitel = $akademischerTitel;
        return $this;
    }

    /**
     * Gets as vorname
     *
     * Vorname des Partners.
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
     * Vorname des Partners.
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
     * Nachname des Partners.
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
     * Nachname des Partners.
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
     * Gets as name2
     *
     * Weitere Nachnamen des Partners. Bei Anrede Firma steht hier der Firmenname.
     *
     * @return string
     */
    public function getName2()
    {
        return $this->name2;
    }

    /**
     * Sets a new name2
     *
     * Weitere Nachnamen des Partners. Bei Anrede Firma steht hier der Firmenname.
     *
     * @param string $name2
     * @return self
     */
    public function setName2($name2)
    {
        $this->name2 = $name2;
        return $this;
    }

    /**
     * Gets as geburtsdatum
     *
     * Geburtsdatum des Partners (Format TT.MM.JJJJ).
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
     * Geburtsdatum des Partners (Format TT.MM.JJJJ).
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
     * Gets as telefonPrivat
     *
     * Private Telefonnummer des Partners.
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
     * Private Telefonnummer des Partners.
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
     * Geschäftliche Telefonnummer des Partners.
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
     * Geschäftliche Telefonnummer des Partners.
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
     * Gets as faxPrivat
     *
     * Private Faxnummer des Partners.
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
     * Private Faxnummer des Partners.
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
     * Geschäftliche Faxnummer des Partners.
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
     * Geschäftliche Faxnummer des Partners.
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
     * Gets as mobilPrivat
     *
     * Private Handynummer des Partners.
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
     * Private Handynummer des Partners.
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
     * Geschäftliche Handynummer des Partners.
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
     * Geschäftliche Handynummer des Partners.
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
     * Gets as emailPrivat
     *
     * Private Emailadresse des Partners.
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
     * Private Emailadresse des Partners.
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
     * Geschäftliche Emailadresse des Partners.
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
     * Geschäftliche Emailadresse des Partners.
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
     * Gets as homepage
     *
     * Homepage des Partners.
     *
     * @return string
     */
    public function getHomepage()
    {
        return $this->homepage;
    }

    /**
     * Sets a new homepage
     *
     * Homepage des Partners.
     *
     * @param string $homepage
     * @return self
     */
    public function setHomepage($homepage)
    {
        $this->homepage = $homepage;
        return $this;
    }

    /**
     * Gets as steuernummer
     *
     * Steuernummer des Partners.
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
     * Steuernummer des Partners.
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
     * Gets as steuerLKZ
     *
     * Steuerland des Partners.
     *  Für dieses Feld sind Schlüsselwerte vorgesehen. Eine Liste aller zugelassenen Werte sind in folgender Tabelle zu finden: http://www.wertgarantie.de/XMLSchema/internet_xsd_schluesseltabelle_DE.xls.
     *
     * @return string
     */
    public function getSteuerLKZ()
    {
        return $this->steuerLKZ;
    }

    /**
     * Sets a new steuerLKZ
     *
     * Steuerland des Partners.
     *  Für dieses Feld sind Schlüsselwerte vorgesehen. Eine Liste aller zugelassenen Werte sind in folgender Tabelle zu finden: http://www.wertgarantie.de/XMLSchema/internet_xsd_schluesseltabelle_DE.xls.
     *
     * @param string $steuerLKZ
     * @return self
     */
    public function setSteuerLKZ($steuerLKZ)
    {
        $this->steuerLKZ = $steuerLKZ;
        return $this;
    }

    /**
     * Gets as staatsangehoerigkeit
     *
     * Staatsangehörigkeit des Partners.
     *
     * @return string
     */
    public function getStaatsangehoerigkeit()
    {
        return $this->staatsangehoerigkeit;
    }

    /**
     * Sets a new staatsangehoerigkeit
     *
     * Staatsangehörigkeit des Partners.
     *
     * @param string $staatsangehoerigkeit
     * @return self
     */
    public function setStaatsangehoerigkeit($staatsangehoerigkeit)
    {
        $this->staatsangehoerigkeit = $staatsangehoerigkeit;
        return $this;
    }

    /**
     * Gets as sprache
     *
     * Sprache des Partners.
     *  Für dieses Feld sind Schlüsselwerte vorgesehen. Eine Liste aller zugelassenen Werte sind in folgender Tabelle zu finden: http://www.wertgarantie.de/XMLSchema/internet_xsd_schluesseltabelle_DE.xls.
     *
     * @return string
     */
    public function getSprache()
    {
        return $this->sprache;
    }

    /**
     * Sets a new sprache
     *
     * Sprache des Partners.
     *  Für dieses Feld sind Schlüsselwerte vorgesehen. Eine Liste aller zugelassenen Werte sind in folgender Tabelle zu finden: http://www.wertgarantie.de/XMLSchema/internet_xsd_schluesseltabelle_DE.xls.
     *
     * @param string $sprache
     * @return self
     */
    public function setSprache($sprache)
    {
        $this->sprache = $sprache;
        return $this;
    }

    /**
     * Gets as werbeeinwilligung
     *
     * Erlaubte Kontaktwege (für Werbung etc.) zum Partner.
     *  Für dieses Feld sind Schlüsselwerte vorgesehen. Eine Liste aller zugelassenen Werte sind in folgender Tabelle zu finden: http://www.wertgarantie.de/XMLSchema/internet_xsd_schluesseltabelle_DE.xls.
     *
     * @return string
     */
    public function getWerbeeinwilligung()
    {
        return $this->werbeeinwilligung;
    }

    /**
     * Sets a new werbeeinwilligung
     *
     * Erlaubte Kontaktwege (für Werbung etc.) zum Partner.
     *  Für dieses Feld sind Schlüsselwerte vorgesehen. Eine Liste aller zugelassenen Werte sind in folgender Tabelle zu finden: http://www.wertgarantie.de/XMLSchema/internet_xsd_schluesseltabelle_DE.xls.
     *
     * @param string $werbeeinwilligung
     * @return self
     */
    public function setWerbeeinwilligung($werbeeinwilligung)
    {
        $this->werbeeinwilligung = $werbeeinwilligung;
        return $this;
    }


}

