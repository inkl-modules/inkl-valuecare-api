<?php

namespace Inkl\ValueCareApi\Entity\Antraege\AntragAType;

/**
 * Class representing DokumentAType
 */
class DokumentAType
{

    /**
     * Der Dateityp des gescannten Antragsdokumentes (PDF, JPG etc.).
     *
     * @property string $dateityp
     */
    private $dateityp = null;

    /**
     * Der Inhalt der Datei als Base64 kodierte Zeichenkette.
     *
     * @property string $dateiB64
     */
    private $dateiB64 = null;

    /**
     * Gets as dateityp
     *
     * Der Dateityp des gescannten Antragsdokumentes (PDF, JPG etc.).
     *
     * @return string
     */
    public function getDateityp()
    {
        return $this->dateityp;
    }

    /**
     * Sets a new dateityp
     *
     * Der Dateityp des gescannten Antragsdokumentes (PDF, JPG etc.).
     *
     * @param string $dateityp
     * @return self
     */
    public function setDateityp($dateityp)
    {
        $this->dateityp = $dateityp;
        return $this;
    }

    /**
     * Gets as dateiB64
     *
     * Der Inhalt der Datei als Base64 kodierte Zeichenkette.
     *
     * @return string
     */
    public function getDateiB64()
    {
        return $this->dateiB64;
    }

    /**
     * Sets a new dateiB64
     *
     * Der Inhalt der Datei als Base64 kodierte Zeichenkette.
     *
     * @param string $dateiB64
     * @return self
     */
    public function setDateiB64($dateiB64)
    {
        $this->dateiB64 = $dateiB64;
        return $this;
    }


}

