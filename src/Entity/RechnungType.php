<?php

namespace Inkl\ValueCareApi\Entity;

/**
 * Class representing RechnungType
 *
 * Rechnungsdatensatz, enthält alle Datenfelder zu einer Rechnung.
 * XSD Type: Rechnung
 */
class RechnungType
{

    /**
     * Die Rechnungsnummer.
     *
     * @property string $rechnungsnummer
     */
    private $rechnungsnummer = null;

    /**
     * Das Rechnungsdatum (Format TT.MM.JJJJ).
     *
     * @property string $rechnungsdatum
     */
    private $rechnungsdatum = null;

    /**
     * Rechnungspositionsdatensatz, enthält alle Datenfelder zu einer Rechnungsposition.
     *
     * @property \Inkl\ValueCareApi\Entity\RechnungspositionType[] $rechnungsposition
     */
    private $rechnungsposition = [
        
    ];

    /**
     * Mehrwertsteuersatz für die Rechnung.
     *
     * @property string $mwstSatz
     */
    private $mwstSatz = null;

    /**
     * Der Brutto-Rechnungsbetrag inkl. Umsatzsteuer. Errechnet sich aus der Summe der Rechnungseinzelpositionen zzgl. der Umsatzsteuer gemäß MwstSatz aus der Rechnung.
     *
     * @property string $rechnungsbetrag
     */
    private $rechnungsbetrag = null;

    /**
     * (optional) Enthält diese Rechnung ausschließlich Versandkosten bei einem Versanddienstleister (z.B: DHL)? Die Verwendung dieses Feldes ist nur nach separater Freischaltung möglich.
     *
     * @property bool $versandrechnung
     */
    private $versandrechnung = null;

    /**
     * (optional) Enthält diese Rechnung ausschließlich eine Handlings- oder Überprüfungspauschale? Die Verwendung dieses Feldes ist nur nach separater Freischaltung möglich.
     *
     * @property bool $handlingrechnung
     */
    private $handlingrechnung = null;

    /**
     * (optional) Handelt es sich bei dieser Rechnung um Kosten aus einer Reklamation einer Schadenabwicklung? Die Verwendung dieses Feldes ist nur nach separater Freischaltung möglich.
     *
     * @property bool $reklamation
     */
    private $reklamation = null;

    /**
     * (optional) Wenn true wird eine evntuell anfallende SB vom System nicht von dieser Rechnung abgezogen. Die Verwendung dieses Feldes ist nur nach separater Freischaltung möglich.
     *
     * @property bool $keinSBAbzug
     */
    private $keinSBAbzug = null;

    /**
     * Gets as rechnungsnummer
     *
     * Die Rechnungsnummer.
     *
     * @return string
     */
    public function getRechnungsnummer()
    {
        return $this->rechnungsnummer;
    }

    /**
     * Sets a new rechnungsnummer
     *
     * Die Rechnungsnummer.
     *
     * @param string $rechnungsnummer
     * @return self
     */
    public function setRechnungsnummer($rechnungsnummer)
    {
        $this->rechnungsnummer = $rechnungsnummer;
        return $this;
    }

    /**
     * Gets as rechnungsdatum
     *
     * Das Rechnungsdatum (Format TT.MM.JJJJ).
     *
     * @return string
     */
    public function getRechnungsdatum()
    {
        return $this->rechnungsdatum;
    }

    /**
     * Sets a new rechnungsdatum
     *
     * Das Rechnungsdatum (Format TT.MM.JJJJ).
     *
     * @param string $rechnungsdatum
     * @return self
     */
    public function setRechnungsdatum($rechnungsdatum)
    {
        $this->rechnungsdatum = $rechnungsdatum;
        return $this;
    }

    /**
     * Adds as rechnungsposition
     *
     * Rechnungspositionsdatensatz, enthält alle Datenfelder zu einer Rechnungsposition.
     *
     * @return self
     * @param \Inkl\ValueCareApi\Entity\RechnungspositionType $rechnungsposition
     */
    public function addToRechnungsposition(\Inkl\ValueCareApi\Entity\RechnungspositionType $rechnungsposition)
    {
        $this->rechnungsposition[] = $rechnungsposition;
        return $this;
    }

    /**
     * isset rechnungsposition
     *
     * Rechnungspositionsdatensatz, enthält alle Datenfelder zu einer Rechnungsposition.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRechnungsposition($index)
    {
        return isset($this->rechnungsposition[$index]);
    }

    /**
     * unset rechnungsposition
     *
     * Rechnungspositionsdatensatz, enthält alle Datenfelder zu einer Rechnungsposition.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRechnungsposition($index)
    {
        unset($this->rechnungsposition[$index]);
    }

    /**
     * Gets as rechnungsposition
     *
     * Rechnungspositionsdatensatz, enthält alle Datenfelder zu einer Rechnungsposition.
     *
     * @return \Inkl\ValueCareApi\Entity\RechnungspositionType[]
     */
    public function getRechnungsposition()
    {
        return $this->rechnungsposition;
    }

    /**
     * Sets a new rechnungsposition
     *
     * Rechnungspositionsdatensatz, enthält alle Datenfelder zu einer Rechnungsposition.
     *
     * @param \Inkl\ValueCareApi\Entity\RechnungspositionType[] $rechnungsposition
     * @return self
     */
    public function setRechnungsposition(array $rechnungsposition)
    {
        $this->rechnungsposition = $rechnungsposition;
        return $this;
    }

    /**
     * Gets as mwstSatz
     *
     * Mehrwertsteuersatz für die Rechnung.
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
     * Mehrwertsteuersatz für die Rechnung.
     *
     * @param string $mwstSatz
     * @return self
     */
    public function setMwstSatz($mwstSatz)
    {
        $this->mwstSatz = $mwstSatz;
        return $this;
    }

    /**
     * Gets as rechnungsbetrag
     *
     * Der Brutto-Rechnungsbetrag inkl. Umsatzsteuer. Errechnet sich aus der Summe der Rechnungseinzelpositionen zzgl. der Umsatzsteuer gemäß MwstSatz aus der Rechnung.
     *
     * @return string
     */
    public function getRechnungsbetrag()
    {
        return $this->rechnungsbetrag;
    }

    /**
     * Sets a new rechnungsbetrag
     *
     * Der Brutto-Rechnungsbetrag inkl. Umsatzsteuer. Errechnet sich aus der Summe der Rechnungseinzelpositionen zzgl. der Umsatzsteuer gemäß MwstSatz aus der Rechnung.
     *
     * @param string $rechnungsbetrag
     * @return self
     */
    public function setRechnungsbetrag($rechnungsbetrag)
    {
        $this->rechnungsbetrag = $rechnungsbetrag;
        return $this;
    }

    /**
     * Gets as versandrechnung
     *
     * (optional) Enthält diese Rechnung ausschließlich Versandkosten bei einem Versanddienstleister (z.B: DHL)? Die Verwendung dieses Feldes ist nur nach separater Freischaltung möglich.
     *
     * @return bool
     */
    public function getVersandrechnung()
    {
        return $this->versandrechnung;
    }

    /**
     * Sets a new versandrechnung
     *
     * (optional) Enthält diese Rechnung ausschließlich Versandkosten bei einem Versanddienstleister (z.B: DHL)? Die Verwendung dieses Feldes ist nur nach separater Freischaltung möglich.
     *
     * @param bool $versandrechnung
     * @return self
     */
    public function setVersandrechnung($versandrechnung)
    {
        $this->versandrechnung = $versandrechnung;
        return $this;
    }

    /**
     * Gets as handlingrechnung
     *
     * (optional) Enthält diese Rechnung ausschließlich eine Handlings- oder Überprüfungspauschale? Die Verwendung dieses Feldes ist nur nach separater Freischaltung möglich.
     *
     * @return bool
     */
    public function getHandlingrechnung()
    {
        return $this->handlingrechnung;
    }

    /**
     * Sets a new handlingrechnung
     *
     * (optional) Enthält diese Rechnung ausschließlich eine Handlings- oder Überprüfungspauschale? Die Verwendung dieses Feldes ist nur nach separater Freischaltung möglich.
     *
     * @param bool $handlingrechnung
     * @return self
     */
    public function setHandlingrechnung($handlingrechnung)
    {
        $this->handlingrechnung = $handlingrechnung;
        return $this;
    }

    /**
     * Gets as reklamation
     *
     * (optional) Handelt es sich bei dieser Rechnung um Kosten aus einer Reklamation einer Schadenabwicklung? Die Verwendung dieses Feldes ist nur nach separater Freischaltung möglich.
     *
     * @return bool
     */
    public function getReklamation()
    {
        return $this->reklamation;
    }

    /**
     * Sets a new reklamation
     *
     * (optional) Handelt es sich bei dieser Rechnung um Kosten aus einer Reklamation einer Schadenabwicklung? Die Verwendung dieses Feldes ist nur nach separater Freischaltung möglich.
     *
     * @param bool $reklamation
     * @return self
     */
    public function setReklamation($reklamation)
    {
        $this->reklamation = $reklamation;
        return $this;
    }

    /**
     * Gets as keinSBAbzug
     *
     * (optional) Wenn true wird eine evntuell anfallende SB vom System nicht von dieser Rechnung abgezogen. Die Verwendung dieses Feldes ist nur nach separater Freischaltung möglich.
     *
     * @return bool
     */
    public function getKeinSBAbzug()
    {
        return $this->keinSBAbzug;
    }

    /**
     * Sets a new keinSBAbzug
     *
     * (optional) Wenn true wird eine evntuell anfallende SB vom System nicht von dieser Rechnung abgezogen. Die Verwendung dieses Feldes ist nur nach separater Freischaltung möglich.
     *
     * @param bool $keinSBAbzug
     * @return self
     */
    public function setKeinSBAbzug($keinSBAbzug)
    {
        $this->keinSBAbzug = $keinSBAbzug;
        return $this;
    }


}

