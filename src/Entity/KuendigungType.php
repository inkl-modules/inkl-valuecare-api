<?php

namespace Inkl\ValueCareApi\Entity;

/**
 * Class representing KuendigungType
 *
 * Kündigungsdatensatz, enthält alle relevanten Informationen die für eine Kündigung notwendig sind.
 * XSD Type: Kuendigung
 */
class KuendigungType
{

    /**
     * Der zu stornierende Antrag. Ein eventuell aus dem Antrag entstandener Vertrag wird gekündigt.
     *
     * @property string $antragssatznummer
     */
    private $antragssatznummer = null;

    /**
     * Der zu kündigende Vertrag.
     *
     * @property int $vertragsnummer
     */
    private $vertragsnummer = null;

    /**
     * Liste der Geräte die gekündigt werden sollen. Wird die Liste nicht angegeben, werden alle Geräte gekündigt.
     *
     * @property \Inkl\ValueCareApi\Entity\KuendigungType\GeraeteAType\GeraetAType[] $geraete
     */
    private $geraete = null;

    /**
     * Schlüssel für den Kündigungsgrund. Wird kein Grund übergeben, wird der Wert 99 (ohne Angabe eines Grundes) verwendet.
     *
     * @property int $kuendigungsgrund
     */
    private $kuendigungsgrund = null;

    /**
     * Zu wann soll die Kündigung wirksam werden (Format TT.MM.JJJJ)? Wird das Feld nicht gefüllt, so wird der nächstmögliche Kündigungstermin verwendet.
     *
     * @property string $kuendigungsdatum
     */
    private $kuendigungsdatum = null;

    /**
     * Eventuelle Anmerkungen zur Kündigung oder Hinweise für die manuelle Nachbearbeitung. Erzwingt keine manuelle Nacharbeit.
     *
     * @property string $bemerkung
     */
    private $bemerkung = null;

    /**
     * Soll dem Kunden eine Bestätigung gesendet werden?
     *
     * @property bool $kuendigungsbestaetigung
     */
    private $kuendigungsbestaetigung = null;

    /**
     * Soll die genutze BV deaktiviert werden?
     *
     * @property bool $bankkontoDeaktivieren
     */
    private $bankkontoDeaktivieren = null;

    /**
     * Soll die Kündigung auf jeden Fall in die manuelle Nachbearbeitung (Schwebe) gegeben werden?
     *
     * @property bool $nachbearbeitung
     */
    private $nachbearbeitung = null;

    /**
     * Soll für den Kunden ein Werbe-/Kontaktstopp gesetzt werden?
     *
     * @property bool $werbestopp
     */
    private $werbestopp = null;

    /**
     * Feld wird aktuell nicht berücksichtigt!
     *
     * @property string $erstattungsempfaenger
     */
    private $erstattungsempfaenger = null;

    /**
     * Gets as antragssatznummer
     *
     * Der zu stornierende Antrag. Ein eventuell aus dem Antrag entstandener Vertrag wird gekündigt.
     *
     * @return string
     */
    public function getAntragssatznummer()
    {
        return $this->antragssatznummer;
    }

    /**
     * Sets a new antragssatznummer
     *
     * Der zu stornierende Antrag. Ein eventuell aus dem Antrag entstandener Vertrag wird gekündigt.
     *
     * @param string $antragssatznummer
     * @return self
     */
    public function setAntragssatznummer($antragssatznummer)
    {
        $this->antragssatznummer = $antragssatznummer;
        return $this;
    }

    /**
     * Gets as vertragsnummer
     *
     * Der zu kündigende Vertrag.
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
     * Der zu kündigende Vertrag.
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
     * Adds as geraet
     *
     * Liste der Geräte die gekündigt werden sollen. Wird die Liste nicht angegeben, werden alle Geräte gekündigt.
     *
     * @return self
     * @param \Inkl\ValueCareApi\Entity\KuendigungType\GeraeteAType\GeraetAType $geraet
     */
    public function addToGeraete(\Inkl\ValueCareApi\Entity\KuendigungType\GeraeteAType\GeraetAType $geraet)
    {
        $this->geraete[] = $geraet;
        return $this;
    }

    /**
     * isset geraete
     *
     * Liste der Geräte die gekündigt werden sollen. Wird die Liste nicht angegeben, werden alle Geräte gekündigt.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetGeraete($index)
    {
        return isset($this->geraete[$index]);
    }

    /**
     * unset geraete
     *
     * Liste der Geräte die gekündigt werden sollen. Wird die Liste nicht angegeben, werden alle Geräte gekündigt.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetGeraete($index)
    {
        unset($this->geraete[$index]);
    }

    /**
     * Gets as geraete
     *
     * Liste der Geräte die gekündigt werden sollen. Wird die Liste nicht angegeben, werden alle Geräte gekündigt.
     *
     * @return \Inkl\ValueCareApi\Entity\KuendigungType\GeraeteAType\GeraetAType[]
     */
    public function getGeraete()
    {
        return $this->geraete;
    }

    /**
     * Sets a new geraete
     *
     * Liste der Geräte die gekündigt werden sollen. Wird die Liste nicht angegeben, werden alle Geräte gekündigt.
     *
     * @param \Inkl\ValueCareApi\Entity\KuendigungType\GeraeteAType\GeraetAType[] $geraete
     * @return self
     */
    public function setGeraete(array $geraete)
    {
        $this->geraete = $geraete;
        return $this;
    }

    /**
     * Gets as kuendigungsgrund
     *
     * Schlüssel für den Kündigungsgrund. Wird kein Grund übergeben, wird der Wert 99 (ohne Angabe eines Grundes) verwendet.
     *
     * @return int
     */
    public function getKuendigungsgrund()
    {
        return $this->kuendigungsgrund;
    }

    /**
     * Sets a new kuendigungsgrund
     *
     * Schlüssel für den Kündigungsgrund. Wird kein Grund übergeben, wird der Wert 99 (ohne Angabe eines Grundes) verwendet.
     *
     * @param int $kuendigungsgrund
     * @return self
     */
    public function setKuendigungsgrund($kuendigungsgrund)
    {
        $this->kuendigungsgrund = $kuendigungsgrund;
        return $this;
    }

    /**
     * Gets as kuendigungsdatum
     *
     * Zu wann soll die Kündigung wirksam werden (Format TT.MM.JJJJ)? Wird das Feld nicht gefüllt, so wird der nächstmögliche Kündigungstermin verwendet.
     *
     * @return string
     */
    public function getKuendigungsdatum()
    {
        return $this->kuendigungsdatum;
    }

    /**
     * Sets a new kuendigungsdatum
     *
     * Zu wann soll die Kündigung wirksam werden (Format TT.MM.JJJJ)? Wird das Feld nicht gefüllt, so wird der nächstmögliche Kündigungstermin verwendet.
     *
     * @param string $kuendigungsdatum
     * @return self
     */
    public function setKuendigungsdatum($kuendigungsdatum)
    {
        $this->kuendigungsdatum = $kuendigungsdatum;
        return $this;
    }

    /**
     * Gets as bemerkung
     *
     * Eventuelle Anmerkungen zur Kündigung oder Hinweise für die manuelle Nachbearbeitung. Erzwingt keine manuelle Nacharbeit.
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
     * Eventuelle Anmerkungen zur Kündigung oder Hinweise für die manuelle Nachbearbeitung. Erzwingt keine manuelle Nacharbeit.
     *
     * @param string $bemerkung
     * @return self
     */
    public function setBemerkung($bemerkung)
    {
        $this->bemerkung = $bemerkung;
        return $this;
    }

    /**
     * Gets as kuendigungsbestaetigung
     *
     * Soll dem Kunden eine Bestätigung gesendet werden?
     *
     * @return bool
     */
    public function getKuendigungsbestaetigung()
    {
        return $this->kuendigungsbestaetigung;
    }

    /**
     * Sets a new kuendigungsbestaetigung
     *
     * Soll dem Kunden eine Bestätigung gesendet werden?
     *
     * @param bool $kuendigungsbestaetigung
     * @return self
     */
    public function setKuendigungsbestaetigung($kuendigungsbestaetigung)
    {
        $this->kuendigungsbestaetigung = $kuendigungsbestaetigung;
        return $this;
    }

    /**
     * Gets as bankkontoDeaktivieren
     *
     * Soll die genutze BV deaktiviert werden?
     *
     * @return bool
     */
    public function getBankkontoDeaktivieren()
    {
        return $this->bankkontoDeaktivieren;
    }

    /**
     * Sets a new bankkontoDeaktivieren
     *
     * Soll die genutze BV deaktiviert werden?
     *
     * @param bool $bankkontoDeaktivieren
     * @return self
     */
    public function setBankkontoDeaktivieren($bankkontoDeaktivieren)
    {
        $this->bankkontoDeaktivieren = $bankkontoDeaktivieren;
        return $this;
    }

    /**
     * Gets as nachbearbeitung
     *
     * Soll die Kündigung auf jeden Fall in die manuelle Nachbearbeitung (Schwebe) gegeben werden?
     *
     * @return bool
     */
    public function getNachbearbeitung()
    {
        return $this->nachbearbeitung;
    }

    /**
     * Sets a new nachbearbeitung
     *
     * Soll die Kündigung auf jeden Fall in die manuelle Nachbearbeitung (Schwebe) gegeben werden?
     *
     * @param bool $nachbearbeitung
     * @return self
     */
    public function setNachbearbeitung($nachbearbeitung)
    {
        $this->nachbearbeitung = $nachbearbeitung;
        return $this;
    }

    /**
     * Gets as werbestopp
     *
     * Soll für den Kunden ein Werbe-/Kontaktstopp gesetzt werden?
     *
     * @return bool
     */
    public function getWerbestopp()
    {
        return $this->werbestopp;
    }

    /**
     * Sets a new werbestopp
     *
     * Soll für den Kunden ein Werbe-/Kontaktstopp gesetzt werden?
     *
     * @param bool $werbestopp
     * @return self
     */
    public function setWerbestopp($werbestopp)
    {
        $this->werbestopp = $werbestopp;
        return $this;
    }

    /**
     * Gets as erstattungsempfaenger
     *
     * Feld wird aktuell nicht berücksichtigt!
     *
     * @return string
     */
    public function getErstattungsempfaenger()
    {
        return $this->erstattungsempfaenger;
    }

    /**
     * Sets a new erstattungsempfaenger
     *
     * Feld wird aktuell nicht berücksichtigt!
     *
     * @param string $erstattungsempfaenger
     * @return self
     */
    public function setErstattungsempfaenger($erstattungsempfaenger)
    {
        $this->erstattungsempfaenger = $erstattungsempfaenger;
        return $this;
    }


}

