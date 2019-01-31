<?php

namespace Inkl\ValueCareApi\Entity;

/**
 * Class representing GeraetType
 *
 * Gerätedatensatz, enthält alle Datenfelder zu einem Gerät.
 * XSD Type: Geraet
 */
class GeraetType
{

    /**
     * (optional, Pflicht bei defektem Gerät in einer Schadenmeldung) Diese Nummer gibt die Position des Gerätes am Vertrag an (1. Gerät 2. Gerät etc.)
     *
     * @property int $geraeteposition
     */
    private $geraeteposition = null;

    /**
     * Code für den Gerätehersteller. Wird der Name des Herstellers angegeben wird der zugehörige Code später ermittelt.
     *  Für dieses Feld sind Schlüsselwerte vorgesehen. Eine Liste aller zugelassenen Werte sind in folgender Tabelle zu finden: http://www.wertgarantie.de/XMLSchema/internet_xsd_schluesseltabelle_DE.xls.
     *
     * @property string $hersteller
     */
    private $hersteller = null;

    /**
     * Kennzeichen für die Art des Gerätes.
     *  Für dieses Feld sind Schlüsselwerte vorgesehen. Eine Liste aller zugelassenen Werte sind in folgender Tabelle zu finden: http://www.wertgarantie.de/XMLSchema/internet_xsd_schluesseltabelle_DE.xls.
     *
     * @property int $geraetekennzeichen
     */
    private $geraetekennzeichen = null;

    /**
     * (optional, Pflicht bei Gerätekennzeichen 27, 44 und 49) Diese Nummer wird zur weiteren Differenzierung der Geräteart verwendet (Fahrrad - Mountainbike usw.).
     *  Für dieses Feld sind Schlüsselwerte vorgesehen. Eine Liste aller zugelassenen Werte sind in folgender Tabelle zu finden: http://www.wertgarantie.de/XMLSchema/internet_xsd_schluesseltabelle_DE.xls.
     *
     * @property int $sondergeraet
     */
    private $sondergeraet = null;

    /**
     * Die Typen- oder Modellbezeichnung des Herstellers für das Gerät (UE58H5270, SM G-901F usw.).
     *
     * @property string $typenbezeichnung
     */
    private $typenbezeichnung = null;

    /**
     * Die Seriennummer des Gerätes (Bei Fahrrädern die Rahmennummer; Bei Mobilfunkgeräten die IMEI).
     *
     * @property string $seriennummer
     */
    private $seriennummer = null;

    /**
     * (optional) 2.Seriennummer eines Gerätes (z.B. Akkunummer eines E-Bike).
     *
     * @property string $seriennummer2
     */
    private $seriennummer2 = null;

    /**
     * (optional, Pflicht bei Neugeräten) Das Datum an dem das Gerät gekauft wurde (Format TT.MM.JJJJ).
     *
     * @property string $kaufdatum
     */
    private $kaufdatum = null;

    /**
     * (optional) Das Baujahr des Gerätes (Format JJJJ). Wird das Feld nicht gefüllt, wird das Baujahr aus dem Kaufdatum abgeleitet.
     *
     * @property string $baujahr
     */
    private $baujahr = null;

    /**
     * Der Preis der beim Kauf für das Gerät bezahlt wurde.
     *
     * @property string $kaufpreis
     */
    private $kaufpreis = null;

    /**
     * Anstatt eines konkreten Kaufpreises kann eine Kaufpreisklasse angegeben werden (z.B.: BIS_600). Die erlaubten Kaufpreisklassen sind vom Produkttyp abhängig und können mittels Webservce (get_purchase_price_classes) abgefragt werden.
     *
     * @property string $kaufpreisklasse
     */
    private $kaufpreisklasse = null;

    /**
     * (optional) Restgarantie des Herstellers für das Gerät bei Antragstellung in Monaten.
     *
     * @property int $garantie
     */
    private $garantie = null;

    /**
     * (optional) Ist ein zusätzlicher Sofortschutz (Das Gerät ist mit Antragsstellung bereits geschützt) gewünscht? Bei manchen unserer Produkte ist der Sofortschutz optional zubuchbar. Wird hier "true" angegeben, wird ein optionaler Sofortschutz dazugebucht.
     *  Für dieses Feld sind Schlüsselwerte vorgesehen. Eine Liste aller zugelassenen Werte sind in folgender Tabelle zu finden: http://www.wertgarantie.de/XMLSchema/internet_xsd_schluesseltabelle_DE.xls.
     *
     * @property bool $sofortschutz
     */
    private $sofortschutz = null;

    /**
     * (optional) Ist ein zusätzlicher Diebstahlschutz gewünscht? Bei manchen unserer Produkte ist der Diebstahlschutz optional zubuchbar. Wird hier "true" angegeben, wird der optionaler Diebstahlschutz dazugebucht.
     *  Für dieses Feld sind Schlüsselwerte vorgesehen. Eine Liste aller zugelassenen Werte sind in folgender Tabelle zu finden: http://www.wertgarantie.de/XMLSchema/internet_xsd_schluesseltabelle_DE.xls.
     *
     * @property bool $diebstahlschutz
     */
    private $diebstahlschutz = null;

    /**
     * (optional, Pflicht bei Fahrradprodukten mit Diebstahlschutz) Angaben zum verwendeten Schloss.
     *
     * @property \Inkl\ValueCareApi\Entity\SchlossType $schloss
     */
    private $schloss = null;

    /**
     * (optional, Pflicht bei komponentenfähigen Geräten. Höchsten 1 Komponent bei einer Schadenmeldung) Komponentendatensatz, enthält alle von komponentenfähigen Geräten, wie z.B. Kombination aus Herd und Ceranfeld oder Hifi-Anlagen.
     *
     * @property \Inkl\ValueCareApi\Entity\KomponenteType[] $komponente
     */
    private $komponente = [
        
    ];

    /**
     * Gets as geraeteposition
     *
     * (optional, Pflicht bei defektem Gerät in einer Schadenmeldung) Diese Nummer gibt die Position des Gerätes am Vertrag an (1. Gerät 2. Gerät etc.)
     *
     * @return int
     */
    public function getGeraeteposition()
    {
        return $this->geraeteposition;
    }

    /**
     * Sets a new geraeteposition
     *
     * (optional, Pflicht bei defektem Gerät in einer Schadenmeldung) Diese Nummer gibt die Position des Gerätes am Vertrag an (1. Gerät 2. Gerät etc.)
     *
     * @param int $geraeteposition
     * @return self
     */
    public function setGeraeteposition($geraeteposition)
    {
        $this->geraeteposition = $geraeteposition;
        return $this;
    }

    /**
     * Gets as hersteller
     *
     * Code für den Gerätehersteller. Wird der Name des Herstellers angegeben wird der zugehörige Code später ermittelt.
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
     * Code für den Gerätehersteller. Wird der Name des Herstellers angegeben wird der zugehörige Code später ermittelt.
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
     * Gets as geraetekennzeichen
     *
     * Kennzeichen für die Art des Gerätes.
     *  Für dieses Feld sind Schlüsselwerte vorgesehen. Eine Liste aller zugelassenen Werte sind in folgender Tabelle zu finden: http://www.wertgarantie.de/XMLSchema/internet_xsd_schluesseltabelle_DE.xls.
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
     * Kennzeichen für die Art des Gerätes.
     *  Für dieses Feld sind Schlüsselwerte vorgesehen. Eine Liste aller zugelassenen Werte sind in folgender Tabelle zu finden: http://www.wertgarantie.de/XMLSchema/internet_xsd_schluesseltabelle_DE.xls.
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
     * Gets as sondergeraet
     *
     * (optional, Pflicht bei Gerätekennzeichen 27, 44 und 49) Diese Nummer wird zur weiteren Differenzierung der Geräteart verwendet (Fahrrad - Mountainbike usw.).
     *  Für dieses Feld sind Schlüsselwerte vorgesehen. Eine Liste aller zugelassenen Werte sind in folgender Tabelle zu finden: http://www.wertgarantie.de/XMLSchema/internet_xsd_schluesseltabelle_DE.xls.
     *
     * @return int
     */
    public function getSondergeraet()
    {
        return $this->sondergeraet;
    }

    /**
     * Sets a new sondergeraet
     *
     * (optional, Pflicht bei Gerätekennzeichen 27, 44 und 49) Diese Nummer wird zur weiteren Differenzierung der Geräteart verwendet (Fahrrad - Mountainbike usw.).
     *  Für dieses Feld sind Schlüsselwerte vorgesehen. Eine Liste aller zugelassenen Werte sind in folgender Tabelle zu finden: http://www.wertgarantie.de/XMLSchema/internet_xsd_schluesseltabelle_DE.xls.
     *
     * @param int $sondergeraet
     * @return self
     */
    public function setSondergeraet($sondergeraet)
    {
        $this->sondergeraet = $sondergeraet;
        return $this;
    }

    /**
     * Gets as typenbezeichnung
     *
     * Die Typen- oder Modellbezeichnung des Herstellers für das Gerät (UE58H5270, SM G-901F usw.).
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
     * Die Typen- oder Modellbezeichnung des Herstellers für das Gerät (UE58H5270, SM G-901F usw.).
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
     * Die Seriennummer des Gerätes (Bei Fahrrädern die Rahmennummer; Bei Mobilfunkgeräten die IMEI).
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
     * Die Seriennummer des Gerätes (Bei Fahrrädern die Rahmennummer; Bei Mobilfunkgeräten die IMEI).
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
     * Gets as seriennummer2
     *
     * (optional) 2.Seriennummer eines Gerätes (z.B. Akkunummer eines E-Bike).
     *
     * @return string
     */
    public function getSeriennummer2()
    {
        return $this->seriennummer2;
    }

    /**
     * Sets a new seriennummer2
     *
     * (optional) 2.Seriennummer eines Gerätes (z.B. Akkunummer eines E-Bike).
     *
     * @param string $seriennummer2
     * @return self
     */
    public function setSeriennummer2($seriennummer2)
    {
        $this->seriennummer2 = $seriennummer2;
        return $this;
    }

    /**
     * Gets as kaufdatum
     *
     * (optional, Pflicht bei Neugeräten) Das Datum an dem das Gerät gekauft wurde (Format TT.MM.JJJJ).
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
     * (optional, Pflicht bei Neugeräten) Das Datum an dem das Gerät gekauft wurde (Format TT.MM.JJJJ).
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
     * (optional) Das Baujahr des Gerätes (Format JJJJ). Wird das Feld nicht gefüllt, wird das Baujahr aus dem Kaufdatum abgeleitet.
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
     * (optional) Das Baujahr des Gerätes (Format JJJJ). Wird das Feld nicht gefüllt, wird das Baujahr aus dem Kaufdatum abgeleitet.
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
     * Der Preis der beim Kauf für das Gerät bezahlt wurde.
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
     * Der Preis der beim Kauf für das Gerät bezahlt wurde.
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
     * Gets as kaufpreisklasse
     *
     * Anstatt eines konkreten Kaufpreises kann eine Kaufpreisklasse angegeben werden (z.B.: BIS_600). Die erlaubten Kaufpreisklassen sind vom Produkttyp abhängig und können mittels Webservce (get_purchase_price_classes) abgefragt werden.
     *
     * @return string
     */
    public function getKaufpreisklasse()
    {
        return $this->kaufpreisklasse;
    }

    /**
     * Sets a new kaufpreisklasse
     *
     * Anstatt eines konkreten Kaufpreises kann eine Kaufpreisklasse angegeben werden (z.B.: BIS_600). Die erlaubten Kaufpreisklassen sind vom Produkttyp abhängig und können mittels Webservce (get_purchase_price_classes) abgefragt werden.
     *
     * @param string $kaufpreisklasse
     * @return self
     */
    public function setKaufpreisklasse($kaufpreisklasse)
    {
        $this->kaufpreisklasse = $kaufpreisklasse;
        return $this;
    }

    /**
     * Gets as garantie
     *
     * (optional) Restgarantie des Herstellers für das Gerät bei Antragstellung in Monaten.
     *
     * @return int
     */
    public function getGarantie()
    {
        return $this->garantie;
    }

    /**
     * Sets a new garantie
     *
     * (optional) Restgarantie des Herstellers für das Gerät bei Antragstellung in Monaten.
     *
     * @param int $garantie
     * @return self
     */
    public function setGarantie($garantie)
    {
        $this->garantie = $garantie;
        return $this;
    }

    /**
     * Gets as sofortschutz
     *
     * (optional) Ist ein zusätzlicher Sofortschutz (Das Gerät ist mit Antragsstellung bereits geschützt) gewünscht? Bei manchen unserer Produkte ist der Sofortschutz optional zubuchbar. Wird hier "true" angegeben, wird ein optionaler Sofortschutz dazugebucht.
     *  Für dieses Feld sind Schlüsselwerte vorgesehen. Eine Liste aller zugelassenen Werte sind in folgender Tabelle zu finden: http://www.wertgarantie.de/XMLSchema/internet_xsd_schluesseltabelle_DE.xls.
     *
     * @return bool
     */
    public function getSofortschutz()
    {
        return $this->sofortschutz;
    }

    /**
     * Sets a new sofortschutz
     *
     * (optional) Ist ein zusätzlicher Sofortschutz (Das Gerät ist mit Antragsstellung bereits geschützt) gewünscht? Bei manchen unserer Produkte ist der Sofortschutz optional zubuchbar. Wird hier "true" angegeben, wird ein optionaler Sofortschutz dazugebucht.
     *  Für dieses Feld sind Schlüsselwerte vorgesehen. Eine Liste aller zugelassenen Werte sind in folgender Tabelle zu finden: http://www.wertgarantie.de/XMLSchema/internet_xsd_schluesseltabelle_DE.xls.
     *
     * @param bool $sofortschutz
     * @return self
     */
    public function setSofortschutz($sofortschutz)
    {
        $this->sofortschutz = $sofortschutz;
        return $this;
    }

    /**
     * Gets as diebstahlschutz
     *
     * (optional) Ist ein zusätzlicher Diebstahlschutz gewünscht? Bei manchen unserer Produkte ist der Diebstahlschutz optional zubuchbar. Wird hier "true" angegeben, wird der optionaler Diebstahlschutz dazugebucht.
     *  Für dieses Feld sind Schlüsselwerte vorgesehen. Eine Liste aller zugelassenen Werte sind in folgender Tabelle zu finden: http://www.wertgarantie.de/XMLSchema/internet_xsd_schluesseltabelle_DE.xls.
     *
     * @return bool
     */
    public function getDiebstahlschutz()
    {
        return $this->diebstahlschutz;
    }

    /**
     * Sets a new diebstahlschutz
     *
     * (optional) Ist ein zusätzlicher Diebstahlschutz gewünscht? Bei manchen unserer Produkte ist der Diebstahlschutz optional zubuchbar. Wird hier "true" angegeben, wird der optionaler Diebstahlschutz dazugebucht.
     *  Für dieses Feld sind Schlüsselwerte vorgesehen. Eine Liste aller zugelassenen Werte sind in folgender Tabelle zu finden: http://www.wertgarantie.de/XMLSchema/internet_xsd_schluesseltabelle_DE.xls.
     *
     * @param bool $diebstahlschutz
     * @return self
     */
    public function setDiebstahlschutz($diebstahlschutz)
    {
        $this->diebstahlschutz = $diebstahlschutz;
        return $this;
    }

    /**
     * Gets as schloss
     *
     * (optional, Pflicht bei Fahrradprodukten mit Diebstahlschutz) Angaben zum verwendeten Schloss.
     *
     * @return \Inkl\ValueCareApi\Entity\SchlossType
     */
    public function getSchloss()
    {
        return $this->schloss;
    }

    /**
     * Sets a new schloss
     *
     * (optional, Pflicht bei Fahrradprodukten mit Diebstahlschutz) Angaben zum verwendeten Schloss.
     *
     * @param \Inkl\ValueCareApi\Entity\SchlossType $schloss
     * @return self
     */
    public function setSchloss(\Inkl\ValueCareApi\Entity\SchlossType $schloss)
    {
        $this->schloss = $schloss;
        return $this;
    }

    /**
     * Adds as komponente
     *
     * (optional, Pflicht bei komponentenfähigen Geräten. Höchsten 1 Komponent bei einer Schadenmeldung) Komponentendatensatz, enthält alle von komponentenfähigen Geräten, wie z.B. Kombination aus Herd und Ceranfeld oder Hifi-Anlagen.
     *
     * @return self
     * @param \Inkl\ValueCareApi\Entity\KomponenteType $komponente
     */
    public function addToKomponente(\Inkl\ValueCareApi\Entity\KomponenteType $komponente)
    {
        $this->komponente[] = $komponente;
        return $this;
    }

    /**
     * isset komponente
     *
     * (optional, Pflicht bei komponentenfähigen Geräten. Höchsten 1 Komponent bei einer Schadenmeldung) Komponentendatensatz, enthält alle von komponentenfähigen Geräten, wie z.B. Kombination aus Herd und Ceranfeld oder Hifi-Anlagen.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetKomponente($index)
    {
        return isset($this->komponente[$index]);
    }

    /**
     * unset komponente
     *
     * (optional, Pflicht bei komponentenfähigen Geräten. Höchsten 1 Komponent bei einer Schadenmeldung) Komponentendatensatz, enthält alle von komponentenfähigen Geräten, wie z.B. Kombination aus Herd und Ceranfeld oder Hifi-Anlagen.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetKomponente($index)
    {
        unset($this->komponente[$index]);
    }

    /**
     * Gets as komponente
     *
     * (optional, Pflicht bei komponentenfähigen Geräten. Höchsten 1 Komponent bei einer Schadenmeldung) Komponentendatensatz, enthält alle von komponentenfähigen Geräten, wie z.B. Kombination aus Herd und Ceranfeld oder Hifi-Anlagen.
     *
     * @return \Inkl\ValueCareApi\Entity\KomponenteType[]
     */
    public function getKomponente()
    {
        return $this->komponente;
    }

    /**
     * Sets a new komponente
     *
     * (optional, Pflicht bei komponentenfähigen Geräten. Höchsten 1 Komponent bei einer Schadenmeldung) Komponentendatensatz, enthält alle von komponentenfähigen Geräten, wie z.B. Kombination aus Herd und Ceranfeld oder Hifi-Anlagen.
     *
     * @param \Inkl\ValueCareApi\Entity\KomponenteType[] $komponente
     * @return self
     */
    public function setKomponente(array $komponente)
    {
        $this->komponente = $komponente;
        return $this;
    }


}

