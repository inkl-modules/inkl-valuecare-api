<?php

namespace Inkl\ValueCareApi\XmlBuilder;

class AntragXmlBuilder
{

	public function build(\Inkl\ValueCareApi\Entity\Antrag $antrag)
	{
        $dom = new \DomDocument('1.0', 'utf-8');
        $dom->formatOutput = true;

		$antraegeElement = $dom->createElement('Antraege');
		$dom->appendChild($antraegeElement);

		$antraegeElement->appendChild($dom->createElement('Herkunft', $antrag->getHerkunft()));
		$antraegeElement->appendChild($dom->createElement('Vertriebskanal', $antrag->getVertriebskanal()));
		$antraegeElement->appendChild($dom->createElement('Exportdatum', $antrag->getExportdatum()));

		$antragElement = $dom->createElement('Antrag');
		$antraegeElement->appendChild($antragElement);

		$antragElement->appendChild($dom->createElement('Satznummer', $antrag->getSatznummer()));
		$antragElement->appendChild($dom->createElement('Antragsdatum', $antrag->getAntragsdatum()));
		$antragElement->appendChild($dom->createElement('Vermittlernummer', $antrag->getVermittlernummer()));

		$kundendatenElement = $dom->createElement('Kundendaten');
		$antragElement->appendChild($kundendatenElement);

		$kundendatenElement->appendChild($dom->createElement('Anrede', $antrag->getKundeAnrede()));
		$kundendatenElement->appendChild($dom->createElement('Vorname', $antrag->getKundeVorname()));
		$kundendatenElement->appendChild($dom->createElement('Nachname', $antrag->getKundeNachname()));
		$kundendatenElement->appendChild($dom->createElement('EmailPrivat', $antrag->getKundeEmailPrivat()));
		$kundendatenElement->appendChild($dom->createElement('TelefonPrivat', $antrag->getKundeTelefonPrivat()));

		$anschriftElement = $dom->createElement('Anschrift');
		$kundendatenElement->appendChild($anschriftElement);

		$anschriftElement->appendChild($dom->createElement('Strasse', $antrag->getKundeStrasse()));
		$anschriftElement->appendChild($dom->createElement('PLZ', $antrag->getKundePlz()));
		$anschriftElement->appendChild($dom->createElement('Ort', $antrag->getKundeOrt()));
		$anschriftElement->appendChild($dom->createElement('Laenderkennzeichen', $antrag->getKundeLaenderkennzeichen()));

		$produktDetailsElement = $dom->createElement('Produktdetails');
		$antragElement->appendChild($produktDetailsElement);

		$produktDetailsElement->appendChild($dom->createElement('Antragskodierung', $antrag->getProduktAntragskodierung()));
		$produktDetailsElement->appendChild($dom->createElement('Produkttyp', $antrag->getProduktTyp()));

		$zahlungElement = $dom->createElement('Zahlung');
		$antragElement->appendChild($zahlungElement);

		$zahlungElement->appendChild($dom->createElement('Selbstzahler', 0));

		return $dom->saveXML();
	}

}