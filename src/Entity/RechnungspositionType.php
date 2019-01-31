<?php

namespace Inkl\ValueCareApi\Entity;

/**
 * Class representing RechnungspositionType
 *
 * Rechnungsdatensatz, enthält alle Datenfelder zu einer Rechnung.
 * XSD Type: Rechnungsposition
 */
class RechnungspositionType
{

    /**
     * Die Position innerhalb der Rechnung.
     *
     * @property string $nummer
     */
    private $nummer = null;

    /**
     * Kategorie der Rechnungsposition.
     *  Für dieses Feld sind Schlüsselwerte vorgesehen. Eine Liste aller zugelassenen Werte sind in folgender Tabelle zu finden: http://www.wertgarantie.de/XMLSchema/internet_xsd_schluesseltabelle_DE.xls.
     *
     * @property string $kategorie
     */
    private $kategorie = null;

    /**
     * Die Bezeichnung der Rechnungsposition (Name des Ersatzteils usw.).
     *
     * @property string $bezeichnung
     */
    private $bezeichnung = null;

    /**
     * Anzahl wie oft die Leistung dieser Position erbracht wurde.
     *
     * @property int $menge
     */
    private $menge = null;

    /**
     * Einzelpreis der Leistung. (Netto ohne Umsatzsteuer)
     *
     * @property string $einzelpreis
     */
    private $einzelpreis = null;

    /**
     * Gesamtpreis dieser Rechnungsposition. (Netto ohne Umsatzsteuer)
     *
     * @property string $positionswert
     */
    private $positionswert = null;

    /**
     * Mehrwertsteuersatz für diese Einzelposition. Darf nur angegeben werden wenn für diese Position ein anderer Steuersatz gilt als den für die gesamte Rechnung engegebenen.
     *
     * @property string $mwstSatz
     */
    private $mwstSatz = null;

    /**
     * Gets as nummer
     *
     * Die Position innerhalb der Rechnung.
     *
     * @return string
     */
    public function getNummer()
    {
        return $this->nummer;
    }

    /**
     * Sets a new nummer
     *
     * Die Position innerhalb der Rechnung.
     *
     * @param string $nummer
     * @return self
     */
    public function setNummer($nummer)
    {
        $this->nummer = $nummer;
        return $this;
    }

    /**
     * Gets as kategorie
     *
     * Kategorie der Rechnungsposition.
     *  Für dieses Feld sind Schlüsselwerte vorgesehen. Eine Liste aller zugelassenen Werte sind in folgender Tabelle zu finden: http://www.wertgarantie.de/XMLSchema/internet_xsd_schluesseltabelle_DE.xls.
     *
     * @return string
     */
    public function getKategorie()
    {
        return $this->kategorie;
    }

    /**
     * Sets a new kategorie
     *
     * Kategorie der Rechnungsposition.
     *  Für dieses Feld sind Schlüsselwerte vorgesehen. Eine Liste aller zugelassenen Werte sind in folgender Tabelle zu finden: http://www.wertgarantie.de/XMLSchema/internet_xsd_schluesseltabelle_DE.xls.
     *
     * @param string $kategorie
     * @return self
     */
    public function setKategorie($kategorie)
    {
        $this->kategorie = $kategorie;
        return $this;
    }

    /**
     * Gets as bezeichnung
     *
     * Die Bezeichnung der Rechnungsposition (Name des Ersatzteils usw.).
     *
     * @return string
     */
    public function getBezeichnung()
    {
        return $this->bezeichnung;
    }

    /**
     * Sets a new bezeichnung
     *
     * Die Bezeichnung der Rechnungsposition (Name des Ersatzteils usw.).
     *
     * @param string $bezeichnung
     * @return self
     */
    public function setBezeichnung($bezeichnung)
    {
        $this->bezeichnung = $bezeichnung;
        return $this;
    }

    /**
     * Gets as menge
     *
     * Anzahl wie oft die Leistung dieser Position erbracht wurde.
     *
     * @return int
     */
    public function getMenge()
    {
        return $this->menge;
    }

    /**
     * Sets a new menge
     *
     * Anzahl wie oft die Leistung dieser Position erbracht wurde.
     *
     * @param int $menge
     * @return self
     */
    public function setMenge($menge)
    {
        $this->menge = $menge;
        return $this;
    }

    /**
     * Gets as einzelpreis
     *
     * Einzelpreis der Leistung. (Netto ohne Umsatzsteuer)
     *
     * @return string
     */
    public function getEinzelpreis()
    {
        return $this->einzelpreis;
    }

    /**
     * Sets a new einzelpreis
     *
     * Einzelpreis der Leistung. (Netto ohne Umsatzsteuer)
     *
     * @param string $einzelpreis
     * @return self
     */
    public function setEinzelpreis($einzelpreis)
    {
        $this->einzelpreis = $einzelpreis;
        return $this;
    }

    /**
     * Gets as positionswert
     *
     * Gesamtpreis dieser Rechnungsposition. (Netto ohne Umsatzsteuer)
     *
     * @return string
     */
    public function getPositionswert()
    {
        return $this->positionswert;
    }

    /**
     * Sets a new positionswert
     *
     * Gesamtpreis dieser Rechnungsposition. (Netto ohne Umsatzsteuer)
     *
     * @param string $positionswert
     * @return self
     */
    public function setPositionswert($positionswert)
    {
        $this->positionswert = $positionswert;
        return $this;
    }

    /**
     * Gets as mwstSatz
     *
     * Mehrwertsteuersatz für diese Einzelposition. Darf nur angegeben werden wenn für diese Position ein anderer Steuersatz gilt als den für die gesamte Rechnung engegebenen.
     *
     * @return string
     */
    public function getMwstSatz()
    {
        return $this->mwstSatz;
    }

    /**
     * Sets a new mwstSatz
     *
     * Mehrwertsteuersatz für diese Einzelposition. Darf nur angegeben werden wenn für diese Position ein anderer Steuersatz gilt als den für die gesamte Rechnung engegebenen.
     *
     * @param string $mwstSatz
     * @return self
     */
    public function setMwstSatz($mwstSatz)
    {
        $this->mwstSatz = $mwstSatz;
        return $this;
    }


}

