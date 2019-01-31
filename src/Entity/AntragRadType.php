<?php

namespace Inkl\ValueCareApi\Entity;

/**
 * Class representing AntragRadType
 *
 * Gerätedatensatz, enthält alle Datenfelder zu einem Gerät.
 * XSD Type: AntragRad
 */
class AntragRadType
{

    /**
     * Position des Fahrrades im Antrag. Wird später am Vertrag übernommen.
     *
     * @property int $position
     */
    private $position = null;

    /**
     * Name des Komponentenherstellers (z.b: Kettler)
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
     * Kennzeichen für die Art des Fahrrades
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
     * Art der Fahrrades (z.B: Citybike)
     *  Aus diesem Feld wird das WERTGARANTIE Gerätekennzeichen aus dem zuvor angegeben Mapping abgeleitet. (Nur nach separater Abstimmung und Freischaltung nutzbar)
     *
     * @property string $fahrradtyp
     */
    private $fahrradtyp = null;

    /**
     * Die Typen- oder Modellbezeichnung des Herstellers für das Fahrrad (z.B: SuperSpider Black).
     *
     * @property string $modellbezeichnung
     */
    private $modellbezeichnung = null;

    /**
     * Die Rahmennummer des Rades
     *
     * @property string $rahmennummer
     */
    private $rahmennummer = null;

    /**
     * (optional, bei e-Bikes Pflicht) Die Seriennummer des Akkus
     *
     * @property string $akkunummer
     */
    private $akkunummer = null;

    /**
     * Das Datum an dem das Rad gekauft wurde (Format TT.MM.JJJJ).
     *
     * @property string $kaufdatum
     */
    private $kaufdatum = null;

    /**
     * Der Preis der beim Kauf für das Rad bezahlt wurde.
     *
     * @property string $kaufpreis
     */
    private $kaufpreis = null;

    /**
     * (optional) Ist das Rad als gebraucht, aufbereitet oder repariert verkauft worden?
     *
     * @property bool $gebrauchtGeraet
     */
    private $gebrauchtGeraet = null;

    /**
     * Baujahr des Fahrrades.
     *
     * @property string $baujahr
     */
    private $baujahr = null;

    /**
     * Der aktuelle Zeitwert des Rades.
     *
     * @property string $zeitwert
     */
    private $zeitwert = null;

    /**
     * (optional) Einige Produkte erlauben es dem Kunden zusätzliche Risiken auszuwählen (z.B.: Diebstahlschutz, Sofortschutz, etc.)
     *
     * @property \Inkl\ValueCareApi\Entity\AntragRisikoType $risiken
     */
    private $risiken = null;

    /**
     * @property \Inkl\ValueCareApi\Entity\AntragSchlossType $schloss
     */
    private $schloss = null;

    /**
     * Wurde geprüft, dass das Schloss den WERTGARANTIE anforderungen entspricht? (Nur nach separater Abstimmung und Freischaltung nutzbar)
     *
     * @property bool $schlossGeprueft
     */
    private $schlossGeprueft = null;

    /**
     * Gets as position
     *
     * Position des Fahrrades im Antrag. Wird später am Vertrag übernommen.
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
     * Position des Fahrrades im Antrag. Wird später am Vertrag übernommen.
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
     * Name des Komponentenherstellers (z.b: Kettler)
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
     * Name des Komponentenherstellers (z.b: Kettler)
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
     * Kennzeichen für die Art des Fahrrades
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
     * Kennzeichen für die Art des Fahrrades
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
     * Gets as fahrradtyp
     *
     * Art der Fahrrades (z.B: Citybike)
     *  Aus diesem Feld wird das WERTGARANTIE Gerätekennzeichen aus dem zuvor angegeben Mapping abgeleitet. (Nur nach separater Abstimmung und Freischaltung nutzbar)
     *
     * @return string
     */
    public function getFahrradtyp()
    {
        return $this->fahrradtyp;
    }

    /**
     * Sets a new fahrradtyp
     *
     * Art der Fahrrades (z.B: Citybike)
     *  Aus diesem Feld wird das WERTGARANTIE Gerätekennzeichen aus dem zuvor angegeben Mapping abgeleitet. (Nur nach separater Abstimmung und Freischaltung nutzbar)
     *
     * @param string $fahrradtyp
     * @return self
     */
    public function setFahrradtyp($fahrradtyp)
    {
        $this->fahrradtyp = $fahrradtyp;
        return $this;
    }

    /**
     * Gets as modellbezeichnung
     *
     * Die Typen- oder Modellbezeichnung des Herstellers für das Fahrrad (z.B: SuperSpider Black).
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
     * Die Typen- oder Modellbezeichnung des Herstellers für das Fahrrad (z.B: SuperSpider Black).
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
     * Gets as rahmennummer
     *
     * Die Rahmennummer des Rades
     *
     * @return string
     */
    public function getRahmennummer()
    {
        return $this->rahmennummer;
    }

    /**
     * Sets a new rahmennummer
     *
     * Die Rahmennummer des Rades
     *
     * @param string $rahmennummer
     * @return self
     */
    public function setRahmennummer($rahmennummer)
    {
        $this->rahmennummer = $rahmennummer;
        return $this;
    }

    /**
     * Gets as akkunummer
     *
     * (optional, bei e-Bikes Pflicht) Die Seriennummer des Akkus
     *
     * @return string
     */
    public function getAkkunummer()
    {
        return $this->akkunummer;
    }

    /**
     * Sets a new akkunummer
     *
     * (optional, bei e-Bikes Pflicht) Die Seriennummer des Akkus
     *
     * @param string $akkunummer
     * @return self
     */
    public function setAkkunummer($akkunummer)
    {
        $this->akkunummer = $akkunummer;
        return $this;
    }

    /**
     * Gets as kaufdatum
     *
     * Das Datum an dem das Rad gekauft wurde (Format TT.MM.JJJJ).
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
     * Das Datum an dem das Rad gekauft wurde (Format TT.MM.JJJJ).
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
     * Der Preis der beim Kauf für das Rad bezahlt wurde.
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
     * Der Preis der beim Kauf für das Rad bezahlt wurde.
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
     * (optional) Ist das Rad als gebraucht, aufbereitet oder repariert verkauft worden?
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
     * (optional) Ist das Rad als gebraucht, aufbereitet oder repariert verkauft worden?
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
     * Baujahr des Fahrrades.
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
     * Baujahr des Fahrrades.
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
     * Der aktuelle Zeitwert des Rades.
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
     * Der aktuelle Zeitwert des Rades.
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
     * Gets as risiken
     *
     * (optional) Einige Produkte erlauben es dem Kunden zusätzliche Risiken auszuwählen (z.B.: Diebstahlschutz, Sofortschutz, etc.)
     *
     * @return \Inkl\ValueCareApi\Entity\AntragRisikoType
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
     * @param \Inkl\ValueCareApi\Entity\AntragRisikoType $risiken
     * @return self
     */
    public function setRisiken(\Inkl\ValueCareApi\Entity\AntragRisikoType $risiken)
    {
        $this->risiken = $risiken;
        return $this;
    }

    /**
     * Gets as schloss
     *
     * @return \Inkl\ValueCareApi\Entity\AntragSchlossType
     */
    public function getSchloss()
    {
        return $this->schloss;
    }

    /**
     * Sets a new schloss
     *
     * @param \Inkl\ValueCareApi\Entity\AntragSchlossType $schloss
     * @return self
     */
    public function setSchloss(\Inkl\ValueCareApi\Entity\AntragSchlossType $schloss)
    {
        $this->schloss = $schloss;
        return $this;
    }

    /**
     * Gets as schlossGeprueft
     *
     * Wurde geprüft, dass das Schloss den WERTGARANTIE anforderungen entspricht? (Nur nach separater Abstimmung und Freischaltung nutzbar)
     *
     * @return bool
     */
    public function getSchlossGeprueft()
    {
        return $this->schlossGeprueft;
    }

    /**
     * Sets a new schlossGeprueft
     *
     * Wurde geprüft, dass das Schloss den WERTGARANTIE anforderungen entspricht? (Nur nach separater Abstimmung und Freischaltung nutzbar)
     *
     * @param bool $schlossGeprueft
     * @return self
     */
    public function setSchlossGeprueft($schlossGeprueft)
    {
        $this->schlossGeprueft = $schlossGeprueft;
        return $this;
    }


}

