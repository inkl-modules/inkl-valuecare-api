<?php

namespace Inkl\ValueCareApi\Entity\Antraege;

/**
 * Class representing AntragAType
 */
class AntragAType
{

    /**
     * Die Satznummer dient der einfacheren Kommunikation mit dem Support des Liefersystems. Die Zeichenkette ist frei wählbar und muss eindeutig sein.
     *
     * @property string $satznummer
     */
    private $satznummer = null;

    /**
     * (optional) Eindeutige ID eines Vorgangs. Zu einem Vorgang können mehrere Dokumente(-nteile) gehören. Über die Vorgangsnummer werden diese als einander zugehörig erkannt.
     *
     * @property string $vorgangsnummer
     */
    private $vorgangsnummer = null;

    /**
     * (optional) Existiert ein Dokument im nScale Archiv wird hier die ArchivID hinterlegt. (Nur nach separater Abstimmung und Freischaltung nutzbar)
     *
     * @property string $archivID
     */
    private $archivID = null;

    /**
     * (Optional) Steht ein Antragsdokument zur Verfügung kann es hier übergeben werden, um später im Archiv abgelegt und mit dem Antrag verknüpft zu werden.
     *
     * @property \Inkl\ValueCareApi\Entity\Antraege\AntragAType\DokumentAType $dokument
     */
    private $dokument = null;

    /**
     * Datum der Antragsstellung durch den Kunden. (Format TT.MM.JJJJ).
     *
     * @property string $antragsdatum
     */
    private $antragsdatum = null;

    /**
     * Bei der Vermittlernummer handelt es sich um die Aktivpartner- oder Fachhändlernummer. Diese Nummern werden von der WERTGARANTIE für jeden Vermittler eindeutig vergeben. Jeder Angestellte eines Fachhandelsgeschäftes hat eine eigene, eindeutige Aktivpartnernummer, diese ist bevorzugt zu verwenden.
     *
     * @property int $vermittlernummer
     */
    private $vermittlernummer = null;

    /**
     * Besitzt der Antragsteller bereits eine Wertgarantie, kann die Vertragsnummer anstatt der Kundendaten übergeben werden.
     *
     * @property int $bestandsvertrag
     */
    private $bestandsvertrag = null;

    /**
     * Besitzt der Antragsteller bereits eine Wertgarantie, kann die zugehörige Wertgarantiekundennummer anstatt der Kundendaten übergeben werden.
     *
     * @property int $kundennummer
     */
    private $kundennummer = null;

    /**
     * Ist der Antragseteller eine Person werden die Kundendaten erwartet.
     *
     * @property \Inkl\ValueCareApi\Entity\PersonendatenType $kundendaten
     */
    private $kundendaten = null;

    /**
     * Ist der Antragsteller eine Firma, werden die Firmendaten erwartet.
     *
     * @property \Inkl\ValueCareApi\Entity\FirmendatenType $firmendaten
     */
    private $firmendaten = null;

    /**
     * @property \Inkl\ValueCareApi\Entity\AntragGeraetType[] $geraet
     */
    private $geraet = [
        
    ];

    /**
     * @property \Inkl\ValueCareApi\Entity\AntragKommunikationType[] $kommunikation
     */
    private $kommunikation = [
        
    ];

    /**
     * @property \Inkl\ValueCareApi\Entity\AntragRadType[] $rad
     */
    private $rad = [
        
    ];

    /**
     * @property \Inkl\ValueCareApi\Entity\AntragGebaeudeType[] $gebaeude
     */
    private $gebaeude = [
        
    ];

    /**
     * (optional) Vom Standard abweichender Vertragsbeginn. (Nur nach separater Abstimmung und Freischaltung nutzbar)
     *
     * @property string $abwVertragsbeginn
     */
    private $abwVertragsbeginn = null;

    /**
     * (optional) Es besteht die Möglichkeit über einen Webservice eine Vertragsnummer reservieren zu lassen und in diesem Feld zu hinterlegen. Dies bietet die Möglichkeit dem Kunden bereits bei der Antragserfassung die spätere Vertragsnummer zu nennen.
     *
     * @property int $vertragsnummer
     */
    private $vertragsnummer = null;

    /**
     * Genauere Beschreibung des abgeschlossenen Produktes
     *
     * @property \Inkl\ValueCareApi\Entity\Antraege\AntragAType\ProduktdetailsAType $produktdetails
     */
    private $produktdetails = null;

    /**
     * Art der gewünschten Zahlungsweise. Die möglichen Kombinationen sind vom verkauften Produkt abhängig und vor der Einlieferung mit WERTGARANTIE abzustimmen.
     *
     * @property \Inkl\ValueCareApi\Entity\Antraege\AntragAType\ZahlungAType $zahlung
     */
    private $zahlung = null;

    /**
     * Vom Kunden eingelöster Aktionscode. Dies sind Aktionscodes aus Marketingaktionen und Kundenkampagnen.
     *
     * @property string $aktionscode
     */
    private $aktionscode = null;

    /**
     * (optional) Hier können Bemerkungen zum Antrag hinterlegt werden. Ist das Feld gefüllt fällt der Antrag in die manuelle Nachbearbeitung, so dass ein Mitarbeiter von WERTGARANTIE entsprechend der Bemerkung entscheiden kann.
     *
     * @property string $bemerkung
     */
    private $bemerkung = null;

    /**
     * Gets as satznummer
     *
     * Die Satznummer dient der einfacheren Kommunikation mit dem Support des Liefersystems. Die Zeichenkette ist frei wählbar und muss eindeutig sein.
     *
     * @return string
     */
    public function getSatznummer()
    {
        return $this->satznummer;
    }

    /**
     * Sets a new satznummer
     *
     * Die Satznummer dient der einfacheren Kommunikation mit dem Support des Liefersystems. Die Zeichenkette ist frei wählbar und muss eindeutig sein.
     *
     * @param string $satznummer
     * @return self
     */
    public function setSatznummer($satznummer)
    {
        $this->satznummer = $satznummer;
        return $this;
    }

    /**
     * Gets as vorgangsnummer
     *
     * (optional) Eindeutige ID eines Vorgangs. Zu einem Vorgang können mehrere Dokumente(-nteile) gehören. Über die Vorgangsnummer werden diese als einander zugehörig erkannt.
     *
     * @return string
     */
    public function getVorgangsnummer()
    {
        return $this->vorgangsnummer;
    }

    /**
     * Sets a new vorgangsnummer
     *
     * (optional) Eindeutige ID eines Vorgangs. Zu einem Vorgang können mehrere Dokumente(-nteile) gehören. Über die Vorgangsnummer werden diese als einander zugehörig erkannt.
     *
     * @param string $vorgangsnummer
     * @return self
     */
    public function setVorgangsnummer($vorgangsnummer)
    {
        $this->vorgangsnummer = $vorgangsnummer;
        return $this;
    }

    /**
     * Gets as archivID
     *
     * (optional) Existiert ein Dokument im nScale Archiv wird hier die ArchivID hinterlegt. (Nur nach separater Abstimmung und Freischaltung nutzbar)
     *
     * @return string
     */
    public function getArchivID()
    {
        return $this->archivID;
    }

    /**
     * Sets a new archivID
     *
     * (optional) Existiert ein Dokument im nScale Archiv wird hier die ArchivID hinterlegt. (Nur nach separater Abstimmung und Freischaltung nutzbar)
     *
     * @param string $archivID
     * @return self
     */
    public function setArchivID($archivID)
    {
        $this->archivID = $archivID;
        return $this;
    }

    /**
     * Gets as dokument
     *
     * (Optional) Steht ein Antragsdokument zur Verfügung kann es hier übergeben werden, um später im Archiv abgelegt und mit dem Antrag verknüpft zu werden.
     *
     * @return \Inkl\ValueCareApi\Entity\Antraege\AntragAType\DokumentAType
     */
    public function getDokument()
    {
        return $this->dokument;
    }

    /**
     * Sets a new dokument
     *
     * (Optional) Steht ein Antragsdokument zur Verfügung kann es hier übergeben werden, um später im Archiv abgelegt und mit dem Antrag verknüpft zu werden.
     *
     * @param \Inkl\ValueCareApi\Entity\Antraege\AntragAType\DokumentAType $dokument
     * @return self
     */
    public function setDokument(\Inkl\ValueCareApi\Entity\Antraege\AntragAType\DokumentAType $dokument)
    {
        $this->dokument = $dokument;
        return $this;
    }

    /**
     * Gets as antragsdatum
     *
     * Datum der Antragsstellung durch den Kunden. (Format TT.MM.JJJJ).
     *
     * @return string
     */
    public function getAntragsdatum()
    {
        return $this->antragsdatum;
    }

    /**
     * Sets a new antragsdatum
     *
     * Datum der Antragsstellung durch den Kunden. (Format TT.MM.JJJJ).
     *
     * @param string $antragsdatum
     * @return self
     */
    public function setAntragsdatum($antragsdatum)
    {
        $this->antragsdatum = $antragsdatum;
        return $this;
    }

    /**
     * Gets as vermittlernummer
     *
     * Bei der Vermittlernummer handelt es sich um die Aktivpartner- oder Fachhändlernummer. Diese Nummern werden von der WERTGARANTIE für jeden Vermittler eindeutig vergeben. Jeder Angestellte eines Fachhandelsgeschäftes hat eine eigene, eindeutige Aktivpartnernummer, diese ist bevorzugt zu verwenden.
     *
     * @return int
     */
    public function getVermittlernummer()
    {
        return $this->vermittlernummer;
    }

    /**
     * Sets a new vermittlernummer
     *
     * Bei der Vermittlernummer handelt es sich um die Aktivpartner- oder Fachhändlernummer. Diese Nummern werden von der WERTGARANTIE für jeden Vermittler eindeutig vergeben. Jeder Angestellte eines Fachhandelsgeschäftes hat eine eigene, eindeutige Aktivpartnernummer, diese ist bevorzugt zu verwenden.
     *
     * @param int $vermittlernummer
     * @return self
     */
    public function setVermittlernummer($vermittlernummer)
    {
        $this->vermittlernummer = $vermittlernummer;
        return $this;
    }

    /**
     * Gets as bestandsvertrag
     *
     * Besitzt der Antragsteller bereits eine Wertgarantie, kann die Vertragsnummer anstatt der Kundendaten übergeben werden.
     *
     * @return int
     */
    public function getBestandsvertrag()
    {
        return $this->bestandsvertrag;
    }

    /**
     * Sets a new bestandsvertrag
     *
     * Besitzt der Antragsteller bereits eine Wertgarantie, kann die Vertragsnummer anstatt der Kundendaten übergeben werden.
     *
     * @param int $bestandsvertrag
     * @return self
     */
    public function setBestandsvertrag($bestandsvertrag)
    {
        $this->bestandsvertrag = $bestandsvertrag;
        return $this;
    }

    /**
     * Gets as kundennummer
     *
     * Besitzt der Antragsteller bereits eine Wertgarantie, kann die zugehörige Wertgarantiekundennummer anstatt der Kundendaten übergeben werden.
     *
     * @return int
     */
    public function getKundennummer()
    {
        return $this->kundennummer;
    }

    /**
     * Sets a new kundennummer
     *
     * Besitzt der Antragsteller bereits eine Wertgarantie, kann die zugehörige Wertgarantiekundennummer anstatt der Kundendaten übergeben werden.
     *
     * @param int $kundennummer
     * @return self
     */
    public function setKundennummer($kundennummer)
    {
        $this->kundennummer = $kundennummer;
        return $this;
    }

    /**
     * Gets as kundendaten
     *
     * Ist der Antragseteller eine Person werden die Kundendaten erwartet.
     *
     * @return \Inkl\ValueCareApi\Entity\PersonendatenType
     */
    public function getKundendaten()
    {
        return $this->kundendaten;
    }

    /**
     * Sets a new kundendaten
     *
     * Ist der Antragseteller eine Person werden die Kundendaten erwartet.
     *
     * @param \Inkl\ValueCareApi\Entity\PersonendatenType $kundendaten
     * @return self
     */
    public function setKundendaten(\Inkl\ValueCareApi\Entity\PersonendatenType $kundendaten)
    {
        $this->kundendaten = $kundendaten;
        return $this;
    }

    /**
     * Gets as firmendaten
     *
     * Ist der Antragsteller eine Firma, werden die Firmendaten erwartet.
     *
     * @return \Inkl\ValueCareApi\Entity\FirmendatenType
     */
    public function getFirmendaten()
    {
        return $this->firmendaten;
    }

    /**
     * Sets a new firmendaten
     *
     * Ist der Antragsteller eine Firma, werden die Firmendaten erwartet.
     *
     * @param \Inkl\ValueCareApi\Entity\FirmendatenType $firmendaten
     * @return self
     */
    public function setFirmendaten(\Inkl\ValueCareApi\Entity\FirmendatenType $firmendaten)
    {
        $this->firmendaten = $firmendaten;
        return $this;
    }

    /**
     * Adds as geraet
     *
     * @return self
     * @param \Inkl\ValueCareApi\Entity\AntragGeraetType $geraet
     */
    public function addToGeraet(\Inkl\ValueCareApi\Entity\AntragGeraetType $geraet)
    {
        $this->geraet[] = $geraet;
        return $this;
    }

    /**
     * isset geraet
     *
     * @param int|string $index
     * @return bool
     */
    public function issetGeraet($index)
    {
        return isset($this->geraet[$index]);
    }

    /**
     * unset geraet
     *
     * @param int|string $index
     * @return void
     */
    public function unsetGeraet($index)
    {
        unset($this->geraet[$index]);
    }

    /**
     * Gets as geraet
     *
     * @return \Inkl\ValueCareApi\Entity\AntragGeraetType[]
     */
    public function getGeraet()
    {
        return $this->geraet;
    }

    /**
     * Sets a new geraet
     *
     * @param \Inkl\ValueCareApi\Entity\AntragGeraetType[] $geraet
     * @return self
     */
    public function setGeraet(array $geraet)
    {
        $this->geraet = $geraet;
        return $this;
    }

    /**
     * Adds as kommunikation
     *
     * @return self
     * @param \Inkl\ValueCareApi\Entity\AntragKommunikationType $kommunikation
     */
    public function addToKommunikation(\Inkl\ValueCareApi\Entity\AntragKommunikationType $kommunikation)
    {
        $this->kommunikation[] = $kommunikation;
        return $this;
    }

    /**
     * isset kommunikation
     *
     * @param int|string $index
     * @return bool
     */
    public function issetKommunikation($index)
    {
        return isset($this->kommunikation[$index]);
    }

    /**
     * unset kommunikation
     *
     * @param int|string $index
     * @return void
     */
    public function unsetKommunikation($index)
    {
        unset($this->kommunikation[$index]);
    }

    /**
     * Gets as kommunikation
     *
     * @return \Inkl\ValueCareApi\Entity\AntragKommunikationType[]
     */
    public function getKommunikation()
    {
        return $this->kommunikation;
    }

    /**
     * Sets a new kommunikation
     *
     * @param \Inkl\ValueCareApi\Entity\AntragKommunikationType[] $kommunikation
     * @return self
     */
    public function setKommunikation(array $kommunikation)
    {
        $this->kommunikation = $kommunikation;
        return $this;
    }

    /**
     * Adds as rad
     *
     * @return self
     * @param \Inkl\ValueCareApi\Entity\AntragRadType $rad
     */
    public function addToRad(\Inkl\ValueCareApi\Entity\AntragRadType $rad)
    {
        $this->rad[] = $rad;
        return $this;
    }

    /**
     * isset rad
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRad($index)
    {
        return isset($this->rad[$index]);
    }

    /**
     * unset rad
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRad($index)
    {
        unset($this->rad[$index]);
    }

    /**
     * Gets as rad
     *
     * @return \Inkl\ValueCareApi\Entity\AntragRadType[]
     */
    public function getRad()
    {
        return $this->rad;
    }

    /**
     * Sets a new rad
     *
     * @param \Inkl\ValueCareApi\Entity\AntragRadType[] $rad
     * @return self
     */
    public function setRad(array $rad)
    {
        $this->rad = $rad;
        return $this;
    }

    /**
     * Adds as gebaeude
     *
     * @return self
     * @param \Inkl\ValueCareApi\Entity\AntragGebaeudeType $gebaeude
     */
    public function addToGebaeude(\Inkl\ValueCareApi\Entity\AntragGebaeudeType $gebaeude)
    {
        $this->gebaeude[] = $gebaeude;
        return $this;
    }

    /**
     * isset gebaeude
     *
     * @param int|string $index
     * @return bool
     */
    public function issetGebaeude($index)
    {
        return isset($this->gebaeude[$index]);
    }

    /**
     * unset gebaeude
     *
     * @param int|string $index
     * @return void
     */
    public function unsetGebaeude($index)
    {
        unset($this->gebaeude[$index]);
    }

    /**
     * Gets as gebaeude
     *
     * @return \Inkl\ValueCareApi\Entity\AntragGebaeudeType[]
     */
    public function getGebaeude()
    {
        return $this->gebaeude;
    }

    /**
     * Sets a new gebaeude
     *
     * @param \Inkl\ValueCareApi\Entity\AntragGebaeudeType[] $gebaeude
     * @return self
     */
    public function setGebaeude(array $gebaeude)
    {
        $this->gebaeude = $gebaeude;
        return $this;
    }

    /**
     * Gets as abwVertragsbeginn
     *
     * (optional) Vom Standard abweichender Vertragsbeginn. (Nur nach separater Abstimmung und Freischaltung nutzbar)
     *
     * @return string
     */
    public function getAbwVertragsbeginn()
    {
        return $this->abwVertragsbeginn;
    }

    /**
     * Sets a new abwVertragsbeginn
     *
     * (optional) Vom Standard abweichender Vertragsbeginn. (Nur nach separater Abstimmung und Freischaltung nutzbar)
     *
     * @param string $abwVertragsbeginn
     * @return self
     */
    public function setAbwVertragsbeginn($abwVertragsbeginn)
    {
        $this->abwVertragsbeginn = $abwVertragsbeginn;
        return $this;
    }

    /**
     * Gets as vertragsnummer
     *
     * (optional) Es besteht die Möglichkeit über einen Webservice eine Vertragsnummer reservieren zu lassen und in diesem Feld zu hinterlegen. Dies bietet die Möglichkeit dem Kunden bereits bei der Antragserfassung die spätere Vertragsnummer zu nennen.
     *
     * @return int
     */
    public function getVertragsnummer()
    {
        return $this->vertragsnummer;
    }

    /**
     * Sets a new vertragsnummer
     *
     * (optional) Es besteht die Möglichkeit über einen Webservice eine Vertragsnummer reservieren zu lassen und in diesem Feld zu hinterlegen. Dies bietet die Möglichkeit dem Kunden bereits bei der Antragserfassung die spätere Vertragsnummer zu nennen.
     *
     * @param int $vertragsnummer
     * @return self
     */
    public function setVertragsnummer($vertragsnummer)
    {
        $this->vertragsnummer = $vertragsnummer;
        return $this;
    }

    /**
     * Gets as produktdetails
     *
     * Genauere Beschreibung des abgeschlossenen Produktes
     *
     * @return \Inkl\ValueCareApi\Entity\Antraege\AntragAType\ProduktdetailsAType
     */
    public function getProduktdetails()
    {
        return $this->produktdetails;
    }

    /**
     * Sets a new produktdetails
     *
     * Genauere Beschreibung des abgeschlossenen Produktes
     *
     * @param \Inkl\ValueCareApi\Entity\Antraege\AntragAType\ProduktdetailsAType $produktdetails
     * @return self
     */
    public function setProduktdetails(\Inkl\ValueCareApi\Entity\Antraege\AntragAType\ProduktdetailsAType $produktdetails)
    {
        $this->produktdetails = $produktdetails;
        return $this;
    }

    /**
     * Gets as zahlung
     *
     * Art der gewünschten Zahlungsweise. Die möglichen Kombinationen sind vom verkauften Produkt abhängig und vor der Einlieferung mit WERTGARANTIE abzustimmen.
     *
     * @return \Inkl\ValueCareApi\Entity\Antraege\AntragAType\ZahlungAType
     */
    public function getZahlung()
    {
        return $this->zahlung;
    }

    /**
     * Sets a new zahlung
     *
     * Art der gewünschten Zahlungsweise. Die möglichen Kombinationen sind vom verkauften Produkt abhängig und vor der Einlieferung mit WERTGARANTIE abzustimmen.
     *
     * @param \Inkl\ValueCareApi\Entity\Antraege\AntragAType\ZahlungAType $zahlung
     * @return self
     */
    public function setZahlung(\Inkl\ValueCareApi\Entity\Antraege\AntragAType\ZahlungAType $zahlung)
    {
        $this->zahlung = $zahlung;
        return $this;
    }

    /**
     * Gets as aktionscode
     *
     * Vom Kunden eingelöster Aktionscode. Dies sind Aktionscodes aus Marketingaktionen und Kundenkampagnen.
     *
     * @return string
     */
    public function getAktionscode()
    {
        return $this->aktionscode;
    }

    /**
     * Sets a new aktionscode
     *
     * Vom Kunden eingelöster Aktionscode. Dies sind Aktionscodes aus Marketingaktionen und Kundenkampagnen.
     *
     * @param string $aktionscode
     * @return self
     */
    public function setAktionscode($aktionscode)
    {
        $this->aktionscode = $aktionscode;
        return $this;
    }

    /**
     * Gets as bemerkung
     *
     * (optional) Hier können Bemerkungen zum Antrag hinterlegt werden. Ist das Feld gefüllt fällt der Antrag in die manuelle Nachbearbeitung, so dass ein Mitarbeiter von WERTGARANTIE entsprechend der Bemerkung entscheiden kann.
     *
     * @return string
     */
    public function getBemerkung()
    {
        return $this->bemerkung;
    }

    /**
     * Sets a new bemerkung
     *
     * (optional) Hier können Bemerkungen zum Antrag hinterlegt werden. Ist das Feld gefüllt fällt der Antrag in die manuelle Nachbearbeitung, so dass ein Mitarbeiter von WERTGARANTIE entsprechend der Bemerkung entscheiden kann.
     *
     * @param string $bemerkung
     * @return self
     */
    public function setBemerkung($bemerkung)
    {
        $this->bemerkung = $bemerkung;
        return $this;
    }


}

