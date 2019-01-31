<?php

namespace Inkl\ValueCareApi\Entity;

/**
 * Class representing AntragGeraetType
 *
 * Gerätedatensatz, enthält alle Datenfelder zu einem Gerät
 * XSD Type: AntragGeraet
 */
class AntragGeraetType
{

    /**
     * Position des Gerätes im Antrag. Wird später am Vertrag übernommen.
     *
     * @property int $position
     */
    private $position = null;

    /**
     * Name des Geräteherstellers (z.b: Siemens)
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
     * WERTGARANTIE Gerätekennzeichen für die Art des Gerätes
     *  Für dieses Feld sind Schlüsselwerte vorgesehen. Diese finden Sie zum Elementnamen in der Tabelle unter: http://www.wertgarantie.de/XMLSchema/sst_schluesseltabelle.xlsx
     *
     * @property int $geraetekennzeichen
     */
    private $geraetekennzeichen = null;

    /**
     * WERTGARANTIE bietet die Möglichkeit verschiedene, partnerindividuelle Mappings für die Ermittlung von Gerätekennzeichen zu nutzen. In diesem Feld kann der Name des zu nutzenden Mappings hinterlegt werden. (Nur nach separater Abstimmung und Freischaltung nutzbar)
     *
     * @property string $mapping
     */
    private $mapping = null;

    /**
     * Art des Gerätes (z.B: Kühlschrank)
     *  Aus diesem Feld wird das WERTGARANTIE Gerätekennzeichen aus dem zuvor angegeben Mapping abgeleitet. (Nur nach separater Abstimmung und Freischaltung nutzbar)
     *
     * @property string $geraetetyp
     */
    private $geraetetyp = null;

    /**
     * Die Typen- oder Modellbezeichnung des Herstellers für das Gerät (z.B: UE58H5270).
     *
     * @property string $modellbezeichnung
     */
    private $modellbezeichnung = null;

    /**
     * Die Seriennummer des Gerätes. (Bei Mobilfunk, Fahrrädern und e-Bikes nicht füllen!)
     *
     * @property string $seriennummer
     */
    private $seriennummer = null;

    /**
     * Das Datum an dem das Gerät gekauft wurde (Format TT.MM.JJJJ).
     *
     * @property string $kaufdatum
     */
    private $kaufdatum = null;

    /**
     * Der Preis der beim Kauf für das Gerät bezahlt wurde. (Nur nach separater Abstimmung und Freischaltung nutzbar)
     *
     * @property string $kaufpreis
     */
    private $kaufpreis = null;

    /**
     * (optional) Ist das Gerät als gebraucht, aufbereitet oder repariert verkauft worden? (Nur nach separater Abstimmung und Freischaltung nutzbar)
     *
     * @property bool $gebrauchtgeraet
     */
    private $gebrauchtgeraet = null;

    /**
     * Baujahr des Gerätes. (Nur nach separater Abstimmung und Freischaltung nutzbar)
     *
     * @property string $baujahr
     */
    private $baujahr = null;

    /**
     * Der aktuelle Zeitwert des Gerätes. (Nur nach separater Abstimmung und Freischaltung nutzbar)
     *
     * @property string $zeitwert
     */
    private $zeitwert = null;

    /**
     * (optional) Einige Produkte erlauben es dem Kunden zusätzliche Risiken auszuwählen (z.B.: Diebstahlschutz, Sofortschutz, etc.)
     *
     * @property \Inkl\ValueCareApi\Entity\AntragRisikoType[] $risiken
     */
    private $risiken = null;

    /**
     * @property \Inkl\ValueCareApi\Entity\AntragKomponenteType[] $komponenten
     */
    private $komponenten = null;

    /**
     * Gets as position
     *
     * Position des Gerätes im Antrag. Wird später am Vertrag übernommen.
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
     * Position des Gerätes im Antrag. Wird später am Vertrag übernommen.
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
     * Name des Geräteherstellers (z.b: Siemens)
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
     * Name des Geräteherstellers (z.b: Siemens)
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
     * Gets as geraetekennzeichen
     *
     * WERTGARANTIE Gerätekennzeichen für die Art des Gerätes
     *  Für dieses Feld sind Schlüsselwerte vorgesehen. Diese finden Sie zum Elementnamen in der Tabelle unter: http://www.wertgarantie.de/XMLSchema/sst_schluesseltabelle.xlsx
     *
     * @return int
     */
    public function getGeraetekennzeichen()
    {
        return $this->geraetekennzeichen;
    }

    /**
     * Sets a new geraetekennzeichen
     *
     * WERTGARANTIE Gerätekennzeichen für die Art des Gerätes
     *  Für dieses Feld sind Schlüsselwerte vorgesehen. Diese finden Sie zum Elementnamen in der Tabelle unter: http://www.wertgarantie.de/XMLSchema/sst_schluesseltabelle.xlsx
     *
     * @param int $geraetekennzeichen
     * @return self
     */
    public function setGeraetekennzeichen($geraetekennzeichen)
    {
        $this->geraetekennzeichen = $geraetekennzeichen;
        return $this;
    }

    /**
     * Gets as mapping
     *
     * WERTGARANTIE bietet die Möglichkeit verschiedene, partnerindividuelle Mappings für die Ermittlung von Gerätekennzeichen zu nutzen. In diesem Feld kann der Name des zu nutzenden Mappings hinterlegt werden. (Nur nach separater Abstimmung und Freischaltung nutzbar)
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
     * WERTGARANTIE bietet die Möglichkeit verschiedene, partnerindividuelle Mappings für die Ermittlung von Gerätekennzeichen zu nutzen. In diesem Feld kann der Name des zu nutzenden Mappings hinterlegt werden. (Nur nach separater Abstimmung und Freischaltung nutzbar)
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
     * Gets as geraetetyp
     *
     * Art des Gerätes (z.B: Kühlschrank)
     *  Aus diesem Feld wird das WERTGARANTIE Gerätekennzeichen aus dem zuvor angegeben Mapping abgeleitet. (Nur nach separater Abstimmung und Freischaltung nutzbar)
     *
     * @return string
     */
    public function getGeraetetyp()
    {
        return $this->geraetetyp;
    }

    /**
     * Sets a new geraetetyp
     *
     * Art des Gerätes (z.B: Kühlschrank)
     *  Aus diesem Feld wird das WERTGARANTIE Gerätekennzeichen aus dem zuvor angegeben Mapping abgeleitet. (Nur nach separater Abstimmung und Freischaltung nutzbar)
     *
     * @param string $geraetetyp
     * @return self
     */
    public function setGeraetetyp($geraetetyp)
    {
        $this->geraetetyp = $geraetetyp;
        return $this;
    }

    /**
     * Gets as modellbezeichnung
     *
     * Die Typen- oder Modellbezeichnung des Herstellers für das Gerät (z.B: UE58H5270).
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
     * Die Typen- oder Modellbezeichnung des Herstellers für das Gerät (z.B: UE58H5270).
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
     * Die Seriennummer des Gerätes. (Bei Mobilfunk, Fahrrädern und e-Bikes nicht füllen!)
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
     * Die Seriennummer des Gerätes. (Bei Mobilfunk, Fahrrädern und e-Bikes nicht füllen!)
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
     * Das Datum an dem das Gerät gekauft wurde (Format TT.MM.JJJJ).
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
     * Das Datum an dem das Gerät gekauft wurde (Format TT.MM.JJJJ).
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
     * Der Preis der beim Kauf für das Gerät bezahlt wurde. (Nur nach separater Abstimmung und Freischaltung nutzbar)
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
     * Der Preis der beim Kauf für das Gerät bezahlt wurde. (Nur nach separater Abstimmung und Freischaltung nutzbar)
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
     * Gets as gebrauchtgeraet
     *
     * (optional) Ist das Gerät als gebraucht, aufbereitet oder repariert verkauft worden? (Nur nach separater Abstimmung und Freischaltung nutzbar)
     *
     * @return bool
     */
    public function getGebrauchtgeraet()
    {
        return $this->gebrauchtgeraet;
    }

    /**
     * Sets a new gebrauchtgeraet
     *
     * (optional) Ist das Gerät als gebraucht, aufbereitet oder repariert verkauft worden? (Nur nach separater Abstimmung und Freischaltung nutzbar)
     *
     * @param bool $gebrauchtgeraet
     * @return self
     */
    public function setGebrauchtgeraet($gebrauchtgeraet)
    {
        $this->gebrauchtgeraet = $gebrauchtgeraet;
        return $this;
    }

    /**
     * Gets as baujahr
     *
     * Baujahr des Gerätes. (Nur nach separater Abstimmung und Freischaltung nutzbar)
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
     * Baujahr des Gerätes. (Nur nach separater Abstimmung und Freischaltung nutzbar)
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
     * Der aktuelle Zeitwert des Gerätes. (Nur nach separater Abstimmung und Freischaltung nutzbar)
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
     * Der aktuelle Zeitwert des Gerätes. (Nur nach separater Abstimmung und Freischaltung nutzbar)
     *
     * @param string $zeitwert
     * @return self
     */
    public function setZeitwert($zeitwert)
    {
        $this->zeitwert = $zeitwert;
        return $this;
    }

    /**
     * Adds as risiko
     *
     * (optional) Einige Produkte erlauben es dem Kunden zusätzliche Risiken auszuwählen (z.B.: Diebstahlschutz, Sofortschutz, etc.)
     *
     * @return self
     * @param \Inkl\ValueCareApi\Entity\AntragRisikoType $risiko
     */
    public function addToRisiken(\Inkl\ValueCareApi\Entity\AntragRisikoType $risiko)
    {
        $this->risiken[] = $risiko;
        return $this;
    }

    /**
     * isset risiken
     *
     * (optional) Einige Produkte erlauben es dem Kunden zusätzliche Risiken auszuwählen (z.B.: Diebstahlschutz, Sofortschutz, etc.)
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRisiken($index)
    {
        return isset($this->risiken[$index]);
    }

    /**
     * unset risiken
     *
     * (optional) Einige Produkte erlauben es dem Kunden zusätzliche Risiken auszuwählen (z.B.: Diebstahlschutz, Sofortschutz, etc.)
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRisiken($index)
    {
        unset($this->risiken[$index]);
    }

    /**
     * Gets as risiken
     *
     * (optional) Einige Produkte erlauben es dem Kunden zusätzliche Risiken auszuwählen (z.B.: Diebstahlschutz, Sofortschutz, etc.)
     *
     * @return \Inkl\ValueCareApi\Entity\AntragRisikoType[]
     */
    public function getRisiken()
    {
        return $this->risiken;
    }

    /**
     * Sets a new risiken
     *
     * (optional) Einige Produkte erlauben es dem Kunden zusätzliche Risiken auszuwählen (z.B.: Diebstahlschutz, Sofortschutz, etc.)
     *
     * @param \Inkl\ValueCareApi\Entity\AntragRisikoType[] $risiken
     * @return self
     */
    public function setRisiken(array $risiken)
    {
        $this->risiken = $risiken;
        return $this;
    }

    /**
     * Adds as komponente
     *
     * @return self
     * @param \Inkl\ValueCareApi\Entity\AntragKomponenteType $komponente
     */
    public function addToKomponenten(\Inkl\ValueCareApi\Entity\AntragKomponenteType $komponente)
    {
        $this->komponenten[] = $komponente;
        return $this;
    }

    /**
     * isset komponenten
     *
     * @param int|string $index
     * @return bool
     */
    public function issetKomponenten($index)
    {
        return isset($this->komponenten[$index]);
    }

    /**
     * unset komponenten
     *
     * @param int|string $index
     * @return void
     */
    public function unsetKomponenten($index)
    {
        unset($this->komponenten[$index]);
    }

    /**
     * Gets as komponenten
     *
     * @return \Inkl\ValueCareApi\Entity\AntragKomponenteType[]
     */
    public function getKomponenten()
    {
        return $this->komponenten;
    }

    /**
     * Sets a new komponenten
     *
     * @param \Inkl\ValueCareApi\Entity\AntragKomponenteType[] $komponenten
     * @return self
     */
    public function setKomponenten(array $komponenten)
    {
        $this->komponenten = $komponenten;
        return $this;
    }


}

