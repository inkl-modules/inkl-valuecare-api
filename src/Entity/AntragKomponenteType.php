<?php

namespace Inkl\ValueCareApi\Entity;

/**
 * Class representing AntragKomponenteType
 *
 * Komponentendatensatz, enthält alle Datenfelder zu einer Komponente eines Gerätes.
 * XSD Type: AntragKomponente
 */
class AntragKomponenteType
{

    /**
     * Position der Komponente im Gerät. Wird später am Vertrag übernommen.
     *
     * @property int $position
     */
    private $position = null;

    /**
     * Name des Komponentenherstellers (z.b: Siemens)
     *
     * @property string $hersteller
     */
    private $hersteller = null;

    /**
     * Herstellercode von WERTGARANTIE
     *  Für dieses Feld sind Schlüsselwerte vorgesehen. Diese finden Sie zum Elementnamen in der Tabelle unter: http://www.wertgarantie.de/XMLSchema/sst_schluesseltabelle.xlsx
     *
     * @property int $herstellerCode
     */
    private $herstellerCode = null;

    /**
     * Kennzeichen für die Art der Komponente
     *  Für dieses Feld sind Schlüsselwerte vorgesehen. Diese finden Sie zum Elementnamen in der Tabelle unter: http://www.wertgarantie.de/XMLSchema/sst_schluesseltabelle.xlsx
     *
     * @property int $komponentenkennzeichen
     */
    private $komponentenkennzeichen = null;

    /**
     * WERTGARANTIE bietet die Möglichkeit verschiedene, partnerindividuelle Mappings für die Ermittlung von Komponentenkennzeichen zu nutzen. In diesem Feld kann der Name des zu nutzenden Mappings hinterlegt werden. (Nur nach separater Abstimmung und Freischaltung nutzbar)
     *
     * @property string $mapping
     */
    private $mapping = null;

    /**
     * Art der Komponente (z.B: Verstärker)
     *  Aus diesem Feld wird das WERTGARANTIE Komponentenkennzeichen aus dem zuvor angegeben Mapping abgeleitet. (Nur nach separater Abstimmung und Freischaltung nutzbar)
     *
     * @property string $komponententyp
     */
    private $komponententyp = null;

    /**
     * (optional) Die Typen- oder Modellbezeichnung des Herstellers für die Komponente (SP 15-30mm F/2.8 Di VC USD usw.).
     *
     * @property string $modellbezeichnung
     */
    private $modellbezeichnung = null;

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
     * Der Preis der beim Kauf für die Komponente bezahlt wurde. Ist für das gewählte Versicherungsprodukt eine Kaufpreisklasse vorgesehen, so wird die korrekte Klasse aus dem Kaufpreis ermittelt. (Nur nach separater Abstimmung und Freischaltung nutzbar)
     *
     * @property string $kaufpreis
     */
    private $kaufpreis = null;

    /**
     * (optional) Ist die Komponente als gebraucht, aufbereitet oder repariert verkauft worden? (Nur nach separater Abstimmung und Freischaltung nutzbar)
     *
     * @property bool $gebrauchtGeraet
     */
    private $gebrauchtGeraet = null;

    /**
     * Baujahr der Komponente des Gerätes. (Nur nach separater Abstimmung und Freischaltung nutzbar)
     *
     * @property string $baujahr
     */
    private $baujahr = null;

    /**
     * Der aktuelle Zeitwert der Komponente. (Nur nach separater Abstimmung und Freischaltung nutzbar)
     *
     * @property string $zeitwert
     */
    private $zeitwert = null;

    /**
     * Gets as position
     *
     * Position der Komponente im Gerät. Wird später am Vertrag übernommen.
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
     * Position der Komponente im Gerät. Wird später am Vertrag übernommen.
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
     * Gets as hersteller
     *
     * Name des Komponentenherstellers (z.b: Siemens)
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
     * Name des Komponentenherstellers (z.b: Siemens)
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
     * Gets as herstellerCode
     *
     * Herstellercode von WERTGARANTIE
     *  Für dieses Feld sind Schlüsselwerte vorgesehen. Diese finden Sie zum Elementnamen in der Tabelle unter: http://www.wertgarantie.de/XMLSchema/sst_schluesseltabelle.xlsx
     *
     * @return int
     */
    public function getHerstellerCode()
    {
        return $this->herstellerCode;
    }

    /**
     * Sets a new herstellerCode
     *
     * Herstellercode von WERTGARANTIE
     *  Für dieses Feld sind Schlüsselwerte vorgesehen. Diese finden Sie zum Elementnamen in der Tabelle unter: http://www.wertgarantie.de/XMLSchema/sst_schluesseltabelle.xlsx
     *
     * @param int $herstellerCode
     * @return self
     */
    public function setHerstellerCode($herstellerCode)
    {
        $this->herstellerCode = $herstellerCode;
        return $this;
    }

    /**
     * Gets as komponentenkennzeichen
     *
     * Kennzeichen für die Art der Komponente
     *  Für dieses Feld sind Schlüsselwerte vorgesehen. Diese finden Sie zum Elementnamen in der Tabelle unter: http://www.wertgarantie.de/XMLSchema/sst_schluesseltabelle.xlsx
     *
     * @return int
     */
    public function getKomponentenkennzeichen()
    {
        return $this->komponentenkennzeichen;
    }

    /**
     * Sets a new komponentenkennzeichen
     *
     * Kennzeichen für die Art der Komponente
     *  Für dieses Feld sind Schlüsselwerte vorgesehen. Diese finden Sie zum Elementnamen in der Tabelle unter: http://www.wertgarantie.de/XMLSchema/sst_schluesseltabelle.xlsx
     *
     * @param int $komponentenkennzeichen
     * @return self
     */
    public function setKomponentenkennzeichen($komponentenkennzeichen)
    {
        $this->komponentenkennzeichen = $komponentenkennzeichen;
        return $this;
    }

    /**
     * Gets as mapping
     *
     * WERTGARANTIE bietet die Möglichkeit verschiedene, partnerindividuelle Mappings für die Ermittlung von Komponentenkennzeichen zu nutzen. In diesem Feld kann der Name des zu nutzenden Mappings hinterlegt werden. (Nur nach separater Abstimmung und Freischaltung nutzbar)
     *
     * @return string
     */
    public function getMapping()
    {
        return $this->mapping;
    }

    /**
     * Sets a new mapping
     *
     * WERTGARANTIE bietet die Möglichkeit verschiedene, partnerindividuelle Mappings für die Ermittlung von Komponentenkennzeichen zu nutzen. In diesem Feld kann der Name des zu nutzenden Mappings hinterlegt werden. (Nur nach separater Abstimmung und Freischaltung nutzbar)
     *
     * @param string $mapping
     * @return self
     */
    public function setMapping($mapping)
    {
        $this->mapping = $mapping;
        return $this;
    }

    /**
     * Gets as komponententyp
     *
     * Art der Komponente (z.B: Verstärker)
     *  Aus diesem Feld wird das WERTGARANTIE Komponentenkennzeichen aus dem zuvor angegeben Mapping abgeleitet. (Nur nach separater Abstimmung und Freischaltung nutzbar)
     *
     * @return string
     */
    public function getKomponententyp()
    {
        return $this->komponententyp;
    }

    /**
     * Sets a new komponententyp
     *
     * Art der Komponente (z.B: Verstärker)
     *  Aus diesem Feld wird das WERTGARANTIE Komponentenkennzeichen aus dem zuvor angegeben Mapping abgeleitet. (Nur nach separater Abstimmung und Freischaltung nutzbar)
     *
     * @param string $komponententyp
     * @return self
     */
    public function setKomponententyp($komponententyp)
    {
        $this->komponententyp = $komponententyp;
        return $this;
    }

    /**
     * Gets as modellbezeichnung
     *
     * (optional) Die Typen- oder Modellbezeichnung des Herstellers für die Komponente (SP 15-30mm F/2.8 Di VC USD usw.).
     *
     * @return string
     */
    public function getModellbezeichnung()
    {
        return $this->modellbezeichnung;
    }

    /**
     * Sets a new modellbezeichnung
     *
     * (optional) Die Typen- oder Modellbezeichnung des Herstellers für die Komponente (SP 15-30mm F/2.8 Di VC USD usw.).
     *
     * @param string $modellbezeichnung
     * @return self
     */
    public function setModellbezeichnung($modellbezeichnung)
    {
        $this->modellbezeichnung = $modellbezeichnung;
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
     * Gets as kaufpreis
     *
     * Der Preis der beim Kauf für die Komponente bezahlt wurde. Ist für das gewählte Versicherungsprodukt eine Kaufpreisklasse vorgesehen, so wird die korrekte Klasse aus dem Kaufpreis ermittelt. (Nur nach separater Abstimmung und Freischaltung nutzbar)
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
     * Der Preis der beim Kauf für die Komponente bezahlt wurde. Ist für das gewählte Versicherungsprodukt eine Kaufpreisklasse vorgesehen, so wird die korrekte Klasse aus dem Kaufpreis ermittelt. (Nur nach separater Abstimmung und Freischaltung nutzbar)
     *
     * @param string $kaufpreis
     * @return self
     */
    public function setKaufpreis($kaufpreis)
    {
        $this->kaufpreis = $kaufpreis;
        return $this;
    }

    /**
     * Gets as gebrauchtGeraet
     *
     * (optional) Ist die Komponente als gebraucht, aufbereitet oder repariert verkauft worden? (Nur nach separater Abstimmung und Freischaltung nutzbar)
     *
     * @return bool
     */
    public function getGebrauchtGeraet()
    {
        return $this->gebrauchtGeraet;
    }

    /**
     * Sets a new gebrauchtGeraet
     *
     * (optional) Ist die Komponente als gebraucht, aufbereitet oder repariert verkauft worden? (Nur nach separater Abstimmung und Freischaltung nutzbar)
     *
     * @param bool $gebrauchtGeraet
     * @return self
     */
    public function setGebrauchtGeraet($gebrauchtGeraet)
    {
        $this->gebrauchtGeraet = $gebrauchtGeraet;
        return $this;
    }

    /**
     * Gets as baujahr
     *
     * Baujahr der Komponente des Gerätes. (Nur nach separater Abstimmung und Freischaltung nutzbar)
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
     * Baujahr der Komponente des Gerätes. (Nur nach separater Abstimmung und Freischaltung nutzbar)
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
     * Gets as zeitwert
     *
     * Der aktuelle Zeitwert der Komponente. (Nur nach separater Abstimmung und Freischaltung nutzbar)
     *
     * @return string
     */
    public function getZeitwert()
    {
        return $this->zeitwert;
    }

    /**
     * Sets a new zeitwert
     *
     * Der aktuelle Zeitwert der Komponente. (Nur nach separater Abstimmung und Freischaltung nutzbar)
     *
     * @param string $zeitwert
     * @return self
     */
    public function setZeitwert($zeitwert)
    {
        $this->zeitwert = $zeitwert;
        return $this;
    }


}

