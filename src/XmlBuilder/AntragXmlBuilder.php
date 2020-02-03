<?php

namespace Inkl\ValueCareApi\XmlBuilder;

class AntragXmlBuilder
{

	public function build(\Inkl\ValueCareApi\Entity\Antrag $antrag)
	{
        $dom = new \DomDocument('1.0', 'iso-8859-1');
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
		$antragElement->appendChild($dom->createElement('Vetragsnummer', $antrag->getVertragsnummer()));

		$kundendatenElement = $dom->createElement('Kundendaten');
		$antragElement->appendChild($kundendatenElement);

		$kundendatenElement->appendChild($dom->createElement('Anrede', $antrag->getKundeAnrede()));

		$element = $dom->createElement('Vorname');
		$element->appendChild($dom->createCDATASection(htmlentities($antrag->getKundeVorname())));
		$kundendatenElement->appendChild($element);

		$element = $dom->createElement('Nachname');
		$element->appendChild($dom->createCDATASection(htmlentities($antrag->getKundeNachname())));
		$kundendatenElement->appendChild($element);

		$element = $dom->createElement('EmailPrivat');
		$element->appendChild($dom->createCDATASection(htmlentities($antrag->getKundeEmailPrivat())));
		$kundendatenElement->appendChild($element);

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

		$geraetElement = $dom->createElement('Geraet');
		$antragElement->appendChild($geraetElement);

		$geraetElement->appendChild($dom->createElement('Position', $antrag->getGeraetPosition()));

		$element = $dom->createElement('Hersteller');
		$element->appendChild($dom->createCDATASection(htmlentities($antrag->getGeraetHersteller())));
		$geraetElement->appendChild($element);

		$geraetElement->appendChild($dom->createElement('Geraetekennzeichen', $antrag->getGeraetKennzeichen()));

		$element = $dom->createElement('Modellbezeichnung');
		$element->appendChild($dom->createCDATASection(htmlentities($antrag->getGeraetModellBezeichnung())));
		$geraetElement->appendChild($element);

		$geraetElement->appendChild($dom->createElement('Seriennummer', $antrag->getGeraetSeriennummer()));
		$geraetElement->appendChild($dom->createElement('Kaufdatum', $antrag->getGeraetKaufDatum()));
		$geraetElement->appendChild($dom->createElement('Kaufpreis', $antrag->getGeraetKaufPreis()));

		$zahlungElement = $dom->createElement('Zahlung');
		$antragElement->appendChild($zahlungElement);

		$zahlungElement->appendChild($dom->createElement('Selbstzahler', $antrag->getZahlungSelbstzahler()));
		$zahlungElement->appendChild($dom->createElement('VMRAbrechnung', $antrag->getZahlungVMRAbrechnung()));

		return $dom->saveXML();
	}

}
