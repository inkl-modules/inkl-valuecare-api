<?php

namespace Inkl\ValueCareApi\Entity;

/**
 * Class representing KomponenteType
 *
 * Komponentendatensatz, enthält alle Datenfelder zu einer Komponente eines Gerätes.
 * XSD Type: Komponente
 */
class KomponenteType
{

    /**
     * (optional, Pflicht bei defekter Komponente in einer Schadenmeldung) Diese Nummer gibt die Position der Komponente am Gerät an (1.Komponente 2.Komponente etc.)
     *
     * @property int $komponentenposition
     */
    private $komponentenposition = null;

    /**
     * Code für den Komponentenehersteller. Wird der Name des Herstellers angegeben wird der zugehörige Code später ermittelt.
     *  Für dieses Feld sind Schlüsselwerte vorgesehen. Eine Liste aller zugelassenen Werte sind in folgender Tabelle zu finden: http://www.wertgarantie.de/XMLSchema/internet_xsd_schluesseltabelle_DE.xls.
     *
     * @property string $hersteller
     */
    private $hersteller = null;

    /**
     * Kennzeichen für die Art der Komponente
     *  Für dieses Feld sind Schlüsselwerte vorgesehen. Eine Liste aller zugelassenen Werte sind in folgender Tabelle zu finden: http://www.wertgarantie.de/XMLSchema/internet_xsd_schluesseltabelle_DE.xls.
     *
     * @property string $komponentenkennzeichen
     */
    private $komponentenkennzeichen = null;

    /**
     * (optional) Die Typen- oder Modellbezeichnung des Herstellers für die Komponente (SP 15-30mm F/2.8 Di VC USD usw.).
     *
     * @property string $typenbezeichnung
     */
    private $typenbezeichnung = null;

    /**
     * Die Seriennummer der Komponente.
     *
     * @property string $seriennummer
     */
    private $seriennummer = null;

    /**
     * (optional, Pflicht bei Neugeräten) Das Datum an dem die Komponente gekauft wurde (Format TT.MM.JJJJ).
     *
     * @property string $kaufdatum
     */
    private $kaufdatum = null;

    /**
     * (optional) Das Baujahr der Komponente (Format JJJJ). Wird das Feld nicht gefüllt, wird das Baujahr aus dem Kaufdatum abgeleitet.
     *
     * @property string $baujahr
     */
    private $baujahr = null;

    /**
     * (optional, Pflicht bei Neugeräten) Der Preis der beim Kauf für die Komponente bezahlt wurde.
     *
     * @property string $kaufpreis
     */
    private $kaufpreis = null;

    /**
     * Gets as komponentenposition
     *
     * (optional, Pflicht bei defekter Komponente in einer Schadenmeldung) Diese Nummer gibt die Position der Komponente am Gerät an (1.Komponente 2.Komponente etc.)
     *
     * @return int
     */
    public function getKomponentenposition()
    {
        return $this->komponentenposition;
    }

    /**
     * Sets a new komponentenposition
     *
     * (optional, Pflicht bei defekter Komponente in einer Schadenmeldung) Diese Nummer gibt die Position der Komponente am Gerät an (1.Komponente 2.Komponente etc.)
     *
     * @param int $komponentenposition
     * @return self
     */
    public function setKomponentenposition($komponentenposition)
    {
        $this->komponentenposition = $komponentenposition;
        return $this;
    }

    /**
     * Gets as hersteller
     *
     * Code für den Komponentenehersteller. Wird der Name des Herstellers angegeben wird der zugehörige Code später ermittelt.
     *  Für dieses Feld sind Schlüsselwerte vorgesehen. Eine Liste aller zugelassenen Werte sind in folgender Tabelle zu finden: http://www.wertgarantie.de/XMLSchema/internet_xsd_schluesseltabelle_DE.xls.
     *
     * @return string
     */
    public function getHersteller()
    {
        return $this->hersteller;
    }

    /**
     * Sets a new hersteller
     *
     * Code für den Komponentenehersteller. Wird der Name des Herstellers angegeben wird der zugehörige Code später ermittelt.
     *  Für dieses Feld sind Schlüsselwerte vorgesehen. Eine Liste aller zugelassenen Werte sind in folgender Tabelle zu finden: http://www.wertgarantie.de/XMLSchema/internet_xsd_schluesseltabelle_DE.xls.
     *
     * @param string $hersteller
     * @return self
     */
    public function setHersteller($hersteller)
    {
        $this->hersteller = $hersteller;
        return $this;
    }

    /**
     * Gets as komponentenkennzeichen
     *
     * Kennzeichen für die Art der Komponente
     *  Für dieses Feld sind Schlüsselwerte vorgesehen. Eine Liste aller zugelassenen Werte sind in folgender Tabelle zu finden: http://www.wertgarantie.de/XMLSchema/internet_xsd_schluesseltabelle_DE.xls.
     *
     * @return string
     */
    public function getKomponentenkennzeichen()
    {
        return $this->komponentenkennzeichen;
    }

    /**
     * Sets a new komponentenkennzeichen
     *
     * Kennzeichen für die Art der Komponente
     *  Für dieses Feld sind Schlüsselwerte vorgesehen. Eine Liste aller zugelassenen Werte sind in folgender Tabelle zu finden: http://www.wertgarantie.de/XMLSchema/internet_xsd_schluesseltabelle_DE.xls.
     *
     * @param string $komponentenkennzeichen
     * @return self
     */
    public function setKomponentenkennzeichen($komponentenkennzeichen)
    {
        $this->komponentenkennzeichen = $komponentenkennzeichen;
        return $this;
    }

    /**
     * Gets as typenbezeichnung
     *
     * (optional) Die Typen- oder Modellbezeichnung des Herstellers für die Komponente (SP 15-30mm F/2.8 Di VC USD usw.).
     *
     * @return string
     */
    public function getTypenbezeichnung()
    {
        return $this->typenbezeichnung;
    }

    /**
     * Sets a new typenbezeichnung
     *
     * (optional) Die Typen- oder Modellbezeichnung des Herstellers für die Komponente (SP 15-30mm F/2.8 Di VC USD usw.).
     *
     * @param string $typenbezeichnung
     * @return self
     */
    public function setTypenbezeichnung($typenbezeichnung)
    {
        $this->typenbezeichnung = $typenbezeichnung;
        return $this;
    }

    /**
     * Gets as seriennummer
     *
     * Die Seriennummer der Komponente.
     *
     * @return string
     */
    public function getSeriennummer()
    {
        return $this->seriennummer;
    }

    /**
     * Sets a new seriennummer
     *
     * Die Seriennummer der Komponente.
     *
     * @param string $seriennummer
     * @return self
     */
    public function setSeriennummer($seriennummer)
    {
        $this->seriennummer = $seriennummer;
        return $this;
    }

    /**
     * Gets as kaufdatum
     *
     * (optional, Pflicht bei Neugeräten) Das Datum an dem die Komponente gekauft wurde (Format TT.MM.JJJJ).
     *
     * @return string
     */
    public function getKaufdatum()
    {
        return $this->kaufdatum;
    }

    /**
     * Sets a new kaufdatum
     *
     * (optional, Pflicht bei Neugeräten) Das Datum an dem die Komponente gekauft wurde (Format TT.MM.JJJJ).
     *
     * @param string $kaufdatum
     * @return self
     */
    public function setKaufdatum($kaufdatum)
    {
        $this->kaufdatum = $kaufdatum;
        return $this;
    }

    /**
     * Gets as baujahr
     *
     * (optional) Das Baujahr der Komponente (Format JJJJ). Wird das Feld nicht gefüllt, wird das Baujahr aus dem Kaufdatum abgeleitet.
     *
     * @return string
     */
    public function getBaujahr()
    {
        return $this->baujahr;
    }

    /**
     * Sets a new baujahr
     *
     * (optional) Das Baujahr der Komponente (Format JJJJ). Wird das Feld nicht gefüllt, wird das Baujahr aus dem Kaufdatum abgeleitet.
     *
     * @param string $baujahr
     * @return self
     */
    public function setBaujahr($baujahr)
    {
        $this->baujahr = $baujahr;
        return $this;
    }

    /**
     * Gets as kaufpreis
     *
     * (optional, Pflicht bei Neugeräten) Der Preis der beim Kauf für die Komponente bezahlt wurde.
     *
     * @return string
     */
    public function getKaufpreis()
    {
        return $this->kaufpreis;
    }

    /**
     * Sets a new kaufpreis
     *
     * (optional, Pflicht bei Neugeräten) Der Preis der beim Kauf für die Komponente bezahlt wurde.
     *
     * @param string $kaufpreis
     * @return self
     */
    public function setKaufpreis($kaufpreis)
    {
        $this->kaufpreis = $kaufpreis;
        return $this;
    }


}

