<?php

namespace Inkl\ValueCareApi\Entity;

class Antrag
{

	private $herkunft;
	private $vertriebskanal;
	private $exportdatum;

	private $satznummer;
	private $antragsdatum;
	private $vermittlernummer;
	private $vertragsnummer;

	private $kundeAnrede;
	private $kundeVorname;
	private $kundeNachname;
	private $kundeEmailPrivat;
	private $kundeTelefonPrivat;
	private $kundeStrasse;
	private $kundePlz;
	private $kundeOrt;
	private $kundeLaenderkennzeichen;

	private $geraetPosition;
	private $geraetHersteller;
	private $geraetKennzeichen;
	private $geraetModellBezeichnung;
	private $geraetSeriennummer;
	private $geraetKaufDatum;
	private $geraetKaufPreis;

	private $produktAntragskodierung;
	private $produktTyp;

	private $zahlungSelbstzahler;
	private $zahlungVMRAbrechnung;

	/**
	 * @return mixed
	 */
	public function getHerkunft()
	{
		return $this->herkunft;
	}

	/**
	 * @param mixed $herkunft
	 * @return $this
	 */
	public function setHerkunft($herkunft)
	{
		$this->herkunft = $herkunft;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getVertriebskanal()
	{
		return $this->vertriebskanal;
	}

	/**
	 * @param mixed $vertriebskanal
	 * @return $this
	 */
	public function setVertriebskanal($vertriebskanal)
	{
		$this->vertriebskanal = $vertriebskanal;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getExportdatum()
	{
		return $this->exportdatum;
	}

	/**
	 * @param mixed $exportdatum
	 * @return $this
	 */
	public function setExportdatum($exportdatum)
	{
		$this->exportdatum = $exportdatum;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getSatznummer()
	{
		return $this->satznummer;
	}

	/**
	 * @param mixed $satznummer
	 * @return $this
	 */
	public function setSatznummer($satznummer)
	{
		$this->satznummer = $satznummer;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getAntragsdatum()
	{
		return $this->antragsdatum;
	}

	/**
	 * @param mixed $antragsdatum
	 * @return $this
	 */
	public function setAntragsdatum($antragsdatum)
	{
		$this->antragsdatum = $antragsdatum;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getVermittlernummer()
	{
		return $this->vermittlernummer;
	}

	/**
	 * @param mixed $vermittlernummer
	 * @return $this
	 */
	public function setVermittlernummer($vermittlernummer)
	{
		$this->vermittlernummer = $vermittlernummer;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getVertragsnummer()
	{
		return $this->vertragsnummer;
	}

	/**
	 * @param mixed $vertragsnummer
	 * @return $this
	 */
	public function setVertragsnummer($vertragsnummer)
	{
		$this->vertragsnummer = $vertragsnummer;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getKundeAnrede()
	{
		return $this->kundeAnrede;
	}

	/**
	 * @param mixed $kundeAnrede
	 * @return $this
	 */
	public function setKundeAnrede($kundeAnrede)
	{
		$this->kundeAnrede = $kundeAnrede;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getKundeVorname()
	{
		return $this->kundeVorname;
	}

	/**
	 * @param mixed $kundeVorname
	 * @return $this
	 */
	public function setKundeVorname($kundeVorname)
	{
		$this->kundeVorname = $kundeVorname;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getKundeNachname()
	{
		return $this->kundeNachname;
	}

	/**
	 * @param mixed $kundeNachname
	 * @return $this
	 */
	public function setKundeNachname($kundeNachname)
	{
		$this->kundeNachname = $kundeNachname;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getKundeEmailPrivat()
	{
		return $this->kundeEmailPrivat;
	}

	/**
	 * @param mixed $kundeEmailPrivat
	 * @return $this
	 */
	public function setKundeEmailPrivat($kundeEmailPrivat)
	{
		$this->kundeEmailPrivat = $kundeEmailPrivat;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getKundeTelefonPrivat()
	{
		return $this->kundeTelefonPrivat;
	}

	/**
	 * @param mixed $kundeTelefonPrivat
	 * @return $this
	 */
	public function setKundeTelefonPrivat($kundeTelefonPrivat)
	{
		$this->kundeTelefonPrivat = $kundeTelefonPrivat;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getKundeStrasse()
	{
		return $this->kundeStrasse;
	}

	/**
	 * @param mixed $kundeStrasse
	 * @return $this
	 */
	public function setKundeStrasse($kundeStrasse)
	{
		$this->kundeStrasse = $kundeStrasse;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getKundePlz()
	{
		return $this->kundePlz;
	}

	/**
	 * @param mixed $kundePlz
	 * @return $this
	 */
	public function setKundePlz($kundePlz)
	{
		$this->kundePlz = $kundePlz;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getKundeOrt()
	{
		return $this->kundeOrt;
	}

	/**
	 * @param mixed $kundeOrt
	 * @return $this
	 */
	public function setKundeOrt($kundeOrt)
	{
		$this->kundeOrt = $kundeOrt;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getKundeLaenderkennzeichen()
	{
		return $this->kundeLaenderkennzeichen;
	}

	/**
	 * @param mixed $kundeLaenderkennzeichen
	 * @return $this
	 */
	public function setKundeLaenderkennzeichen($kundeLaenderkennzeichen)
	{
		$this->kundeLaenderkennzeichen = $kundeLaenderkennzeichen;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getGeraetPosition()
	{
		return $this->geraetPosition;
	}

	/**
	 * @param mixed $geraetPosition
	 * @return $this
	 */
	public function setGeraetPosition($geraetPosition)
	{
		$this->geraetPosition = $geraetPosition;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getGeraetHersteller()
	{
		return $this->geraetHersteller;
	}

	/**
	 * @param mixed $geraetHersteller
	 * @return $this
	 */
	public function setGeraetHersteller($geraetHersteller)
	{
		$this->geraetHersteller = $geraetHersteller;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getGeraetKennzeichen()
	{
		return $this->geraetKennzeichen;
	}

	/**
	 * @param mixed $geraetKennzeichen
	 * @return $this
	 */
	public function setGeraetKennzeichen($geraetKennzeichen)
	{
		$this->geraetKennzeichen = $geraetKennzeichen;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getGeraetModellBezeichnung()
	{
		return $this->geraetModellBezeichnung;
	}

	/**
	 * @param mixed $geraetModellBezeichnung
	 * @return $this
	 */
	public function setGeraetModellBezeichnung($geraetModellBezeichnung)
	{
		$this->geraetModellBezeichnung = $geraetModellBezeichnung;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getGeraetSeriennummer()
	{
		return $this->geraetSeriennummer;
	}

	/**
	 * @param mixed $geraetSeriennummer
	 * @return $this
	 */
	public function setGeraetSeriennummer($geraetSeriennummer)
	{
		$this->geraetSeriennummer = $geraetSeriennummer;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getGeraetKaufDatum()
	{
		return $this->geraetKaufDatum;
	}

	/**
	 * @param mixed $geraetKaufDatum
	 * @return $this
	 */
	public function setGeraetKaufDatum($geraetKaufDatum)
	{
		$this->geraetKaufDatum = $geraetKaufDatum;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getGeraetKaufPreis()
	{
		return $this->geraetKaufPreis;
	}

	/**
	 * @param mixed $geraetKaufPreis
	 * @return $this
	 */
	public function setGeraetKaufPreis($geraetKaufPreis)
	{
		$this->geraetKaufPreis = $geraetKaufPreis;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getProduktAntragskodierung()
	{
		return $this->produktAntragskodierung;
	}

	/**
	 * @param mixed $produktAntragskodierung
	 * @return $this
	 */
	public function setProduktAntragskodierung($produktAntragskodierung)
	{
		$this->produktAntragskodierung = $produktAntragskodierung;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getProduktTyp()
	{
		return $this->produktTyp;
	}

	/**
	 * @param mixed $produktTyp
	 * @return $this
	 */
	public function setProduktTyp($produktTyp)
	{
		$this->produktTyp = $produktTyp;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getZahlungSelbstzahler()
	{
		return $this->zahlungSelbstzahler;
	}

	/**
	 * @param mixed $zahlungSelbstzahler
	 * @return $this
	 */
	public function setZahlungSelbstzahler($zahlungSelbstzahler)
	{
		$this->zahlungSelbstzahler = $zahlungSelbstzahler;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getZahlungVMRAbrechnung()
	{
		return $this->zahlungVMRAbrechnung;
	}

	/**
	 * @param mixed $zahlungVMRAbrechnung
	 * @return $this
	 */
	public function setZahlungVMRAbrechnung($zahlungVMRAbrechnung)
	{
		$this->zahlungVMRAbrechnung = $zahlungVMRAbrechnung;
		return $this;
	}

}