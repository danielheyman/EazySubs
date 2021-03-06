<?php
/**
*
* acp_styles [Dutch]
*
* @package language
* @version $Id: styles.php,v 1.0.0 2007/01/26 18:15:17 naderman Exp $
* @copyright (c) 2005 phpBB Group modified by phpBB.nl (vertaalteam@phpbb.nl) in 2007
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'ACP_IMAGESETS_EXPLAIN'	=> 'Afbeeldingensets bevatten alle niet stijlgebonden afbeeldingen die op het forum gebruikt worden. Hier kun je bestaande sets bewerken, exporteren, verwijderen, nieuwe sets invoeren en activeren.',
	'ACP_STYLES_EXPLAIN'	=> 'Hier kun je alle beschikbare stijlen beheren. Een stijl bestaat uit een template, een thema en een afbeeldingenset. Je kunt bestaande stijlen vervangen, verwijderen, deactiveren, opnieuw activeren, alsook nieuwe stijlen invoeren. Je kunt een stijl ook alvast bekijken om te zien hoe je forum eruit zal zien wanneer je hem gebruikt. De huidige standaardstijl staat met een (*) aangegeven. Er staat ook weergegeven hoeveel gebruikers welke stijl gebruiken. Gedwongen stijlen worden hierin niet meegeteld.',
	'ACP_TEMPLATES_EXPLAIN'	=> 'Een templateset bevat alle code om het uiterlijk van je forum te genereren. Hier kun je bestaande templatesets verwijderen, exporteren, nieuwe sets importeren en alvast bekijken. Je kunt ook de template-code, gebruikt voor BBCode te genereren, bewerken.',
	'ACP_THEMES_EXPLAIN'	=> 'Hier kun je thema’s maken, installeren, bewerken, verwijderen en exporteren. Een thema is de combinatie van kleuren en afbeeldingen die worden gebruik in je templates om de basisuitstraling van je forum te bepalen. Het aantal opties dat voor jou beschikbaar is, hangt af van de serverinstellingen en het type phpBB-installatie. Voor verdere details kun je het beste de gebruikersgids raadplegen. Bij het aanmaken van nieuwe thema’s is het gebruiken van een ander thema als basis slechts optioneel.',
	'ADD_IMAGESET'			=> 'Maak een afbeeldingenset',
	'ADD_IMAGESET_EXPLAIN'	=> 'Hier kun je een nieuwe afbeeldingenset aanmaken. Afhankelijk van je serverinstellingen en de bestandspermissies kun je hier extra opties beschikbaar hebben.',
	'ADD_STYLE'				=> 'Maak een stijl',
	'ADD_STYLE_EXPLAIN'		=> 'Hier kun je een nieuwe stijl aanmaken. Afhankelijk van je serverinstellingen en de bestandspermissies kun je hier extra opties beschikbaar hebben.',
	'ADD_TEMPLATE'			=> 'Maak een template',
	'ADD_TEMPLATE_EXPLAIN'	=> 'Hier kun je een nieuwe template aanmaken. Afhankelijk van je serverinstellingen en de bestandspermissies kun je hier extra opties beschikbaar hebben.',
	'ADD_THEME'				=> 'Maak een thema',
	'ADD_THEME_EXPLAIN'		=> 'Hier kun je een nieuw thema aanmaken. Afhankelijk van je serverinstellingen en de bestandspermissies kun je hier extra opties beschikbaar hebben.',
	'ARCHIVE_FORMAT'		=> 'Archief bestandstype',
	'AUTOMATIC_EXPLAIN'		=> 'Laat dit leeg om het automatisch te detecteren.',

	'BACKGROUND'			=> 'Achtergrond',
	'BACKGROUND_COLOUR'		=> 'Achtergrondkleur',
	'BACKGROUND_IMAGE'		=> 'Achtergrondafbeelding',
	'BACKGROUND_REPEAT'		=> 'Herhaal achtergrond',
	'BOLD'					=> 'Vet',

	'CACHE'							=> 'Buffer',
	'CACHE_CACHED'					=> 'In buffergeheugen',
	'CACHE_FILENAME'				=> 'Templatebestand',
	'CACHE_FILESIZE'				=> 'Bestandsgrootte',
	'CACHE_MODIFIED'				=> 'Aangepast',
	'CONFIRM_IMAGESET_REFRESH'		=> 'Weet je zeker dat je alle afbeeldingensetgegevens wilt vernieuwen? De instellingen van de afbeeldingenset zullen alle aanpassingen overschrijven die reeds met de afbeeldingensetbewerker plaatsvonden.',
	'CONFIRM_TEMPLATE_CLEAR_CACHE'	=> 'Weet je zeker dat je de gehele buffer van de templatebestanden wilt legen?',
	'CONFIRM_TEMPLATE_REFRESH'		=> 'Weet je zeker dat je alle template-gegevens wilt vernieuwen in de database met de inhoud van de template-bestanden van het bestandssysteem? Dit zal alle aanpassingen die reeds verricht zijn met de template-bewerker en in de database zijn opgeslagen, overschrijven.',
	'CONFIRM_THEME_REFRESH'			=> 'Weet je zeker dat je alle themagegevens wilt vernieuwen in de database met de inhoud van de themabestanden van het bestandssysteem? Dit zal alle aanpassingen die reeds verricht zijn met de themabewerker en in de database zijn opgeslagen, overschrijven.',
	'COPYRIGHT'						=> 'Copyright',
	'CREATE_IMAGESET'				=> 'Maak een nieuwe afbeeldingenset',
	'CREATE_STYLE'					=> 'Maak een nieuwe stijl',
	'CREATE_TEMPLATE'				=> 'Maak een nieuwe templateset',
	'CREATE_THEME'					=> 'Maak nieuw thema',
	'CURRENT_IMAGE'					=> 'Huidige afbeelding',

	'DEACTIVATE_DEFAULT'		=> 'Je kunt de standaardstijl niet deactiveren.',
	'DELETE_FROM_FS'			=> 'Verwijder uit het bestandssysteem',
	'DELETE_IMAGESET'			=> 'Verwijder afbeeldingenset',
	'DELETE_IMAGESET_EXPLAIN'	=> 'Hier kun je de geselecteerde afbeeldingenset uit de database verwijderen. Het is niet mogelijk om het verwijderen ongedaan te maken. Het is dan ook ten zeerste aan te raden om eerst de set te exporteren voor eventueel later hergebruik.',
	'DELETE_STYLE'				=> 'Verwijder stijl',
	'DELETE_STYLE_EXPLAIN'		=> 'Hier kun je de geselecteerde stijl verwijderen. Je kunt niet alle stijlelementen van hier verwijderen. Deze moeten apart via hun formulieren verwijderd worden. Hou er rekening mee dat deze acties niet ongedaan kunnen gemaakt worden.',
	'DELETE_TEMPLATE'			=> 'Verwijder template',
	'DELETE_TEMPLATE_EXPLAIN'	=> 'Hier kun je de geselecteerde templateset van de database verwijderen. Het is niet mogelijk om het verwijderen ongedaan te maken. Het is dan ook ten zeerste aan te raden om eerst de template te exporteren voor eventueel later hergebruik.',
	'DELETE_THEME'				=> 'Verwijder thema',
	'DELETE_THEME_EXPLAIN'		=> 'Hier kun je het geselecteerde thema van de database verwijderen. Het is niet mogelijk om het verwijderen ongedaan te maken. Het is dan ook ten zeerste aan te raden om eerst het thema te exporteren voor eventueel later hergebruik.',
	'DETAILS'					=> 'Details',
	'DIMENSIONS_EXPLAIN'		=> 'Door "ja" te selecteren zullen de breedte/hoogte parameters worden inbegrepen.',


	'EDIT_DETAILS_IMAGESET'				=> 'Bewerk afbeeldingenset details',
	'EDIT_DETAILS_IMAGESET_EXPLAIN'		=> 'Hier kun je de afbeeldingenset details bewerken.',
	'EDIT_DETAILS_STYLE'				=> 'Bewerk stijl',
	'EDIT_DETAILS_STYLE_EXPLAIN'		=> 'Via onderstaand formulier kun je deze bestaande stijl aanpassen. Je kunt de combinatie van template/thema en imageset vervangen door datgene wat je zelf wenst. Je kunt deze stijl ook als standaardstijl instellen.',
	'EDIT_DETAILS_TEMPLATE'				=> 'Bewerk template-details',
	'EDIT_DETAILS_TEMPLATE_EXPLAIN'		=> 'Hier kun je de template-details bewerken zoals de naam. Je kunt ook kiezen of je het stijlblad wilt opslaan in de database of in het bestandssysteem. Deze mogelijkheden hangen af van je PHP-instellingen en de schrijfpermissies van je webserver.',
	'EDIT_DETAILS_THEME'				=> 'Bewerk themadetails',
	'EDIT_DETAILS_THEME_EXPLAIN'		=> 'Hier kun je de themadetails bewerken zoals de naam. Je kunt ook kiezen of je het stijlblad wilt opslaan in de database of in het bestandssysteem. Deze mogelijkheden hangen af van je PHP-instellingen en de schrijfpermissies van je webserver.',
	'EDIT_IMAGESET'						=> 'Bewerk afbeeldingenset',
	'EDIT_IMAGESET_EXPLAIN'				=> 'Hier kun je alle afbeeldingen bewerken die in de afbeeldingenset staan. Je kunt ook de afmetingen voor de afbeelding opgeven of aanpassen.',
	'EDIT_TEMPLATE'						=> 'Bewerk template',
	'EDIT_TEMPLATE_EXPLAIN'				=> 'Hier kun je direct de templateset bewerken. Deze bewerkingen zijn permanent en kunnen niet ongedaan worden gemaakt. Als PHP direct naar de bestanden kan schrijven in je /styles/-map zal dit ook worden gedaan. Als PHP niet naar de bestanden kan schrijven, zal er voor een omleiding via de database gezorgd worden. Gelieve altijd met zorg de templates te bewerken.',
	'EDIT_TEMPLATE_STORED_DB'			=> 'Het templatebestand is niet overschrijfbaar, dus is de templateset nu in de database opgeslagen met het nieuwe - bewerkte - bestand.',
	'EDIT_THEME'						=> 'Bewerk thema',
	'EDIT_THEME_EXPLAIN'				=> 'Hier kun je het geselecteerde thema bewerken, kleuren wijzigen, afbeeldingen, enz.',
	'EDIT_THEME_STORED_DB'				=> 'Het stijlblad bestand kon niet door de server geschreven worden, waardoor het nu in je database is opgeslagen.',
	'EDIT_THEME_STORE_PARSED'			=> 'Het thema vereist dat de stylesheet wordt geparsed. Dit is alleen mogelijk als het in de database wordt ingevoerd.',
	'EDITOR_DISABLED'					=> 'De templatebewerker is uitgeschakeld.',
	'EXPORT'							=> 'Exporteer',

	'FOREGROUND'			=> 'Voorgrond',
	'FONT_COLOUR'			=> 'Letterkleur',
	'FONT_FACE'				=> 'Lettertype',
	'FONT_FACE_EXPLAIN'		=> 'Je kunt meerdere lettertypes aanduiden door deze door middel van komma’s te scheiden. Als een gebruiker het eerste lettertype niet ter beschikking heeft, zal de eerstvolgende worden gekozen.',
	'FONT_SIZE'				=> 'Lettergrootte',

	'GLOBAL_IMAGES'			=> 'Globaal',

	'HIDE_CSS'				=> 'Verberg ruwe CSS',

	'IMAGE_WIDTH'				=> 'Afbeeldingbreedte',
	'IMAGE_HEIGHT'				=> 'Afbeeldinghoogte',
	'IMAGE'						=> 'Afbeelding',
	'IMAGE_NAME'				=> 'Afbeeldingnaam',
	'IMAGE_PARAMETER'			=> 'Parameter',
	'IMAGE_VALUE'				=> 'Waarde',
	'IMAGESET_ADDED'			=> 'Nieuwe afbeeldingenset aan het bestandssysteem toegevoegd.',
	'IMAGESET_ADDED_DB'			=> 'Nieuwe afbeeldingenset aan de database toegevoegd.',
	'IMAGESET_DELETED'			=> 'Afbeeldingenset verwijderd.',
	'IMAGESET_DELETED_FS'		=> 'De afbeeldingenset is uit de database verwijderd, maar sommige bestanden kunnen nog in het bestandssysteem aanwezig zijn.',
	'IMAGESET_DETAILS_UPDATED'	=> 'De details van de afbeeldingenset zijn succesvol bijgewerkt.',
	'IMAGESET_ERR_ARCHIVE'		=> 'Gelieve een archiveringsmethode te kiezen.',
	'IMAGESET_ERR_COPY_LONG'	=> 'Het copyright mag niet langer dan 60 tekens zijn.',
	'IMAGESET_ERR_NAME_CHARS'	=> 'De naam van de afbeeldingenset mag alleen letters, cijfers, -, +, _ en spaties bevatten.',
	'IMAGESET_ERR_NAME_EXIST'	=> 'Een afbeeldingenset met deze naam bestaat reeds.',
	'IMAGESET_ERR_NAME_LONG'	=> 'De naam van de afbeeldingenset mag niet langer dan 30 tekens zijn.',
	'IMAGESET_ERR_NOT_IMAGESET'	=> 'Het archief dat je hebt gekozen bevat geen geldige afbeeldingenset.',
	'IMAGESET_ERR_STYLE_NAME'	=> 'Je dient een naam aan deze afbeeldingenset toe te kennen.',
	'IMAGESET_EXPORT'			=> 'Exporteer afbeeldingenset',
	'IMAGESET_EXPORT_EXPLAIN'	=> 'Hier kun je een afbeeldingenset exporteren in de vorm van een archief. Dit archief zal alle benodigde data bevatten om de afbeeldingenset op een ander forum te installeren. Om het bestand te verkrijgen, kun je kiezen tussen een directe download, opgeslagen in je store-map voor een download op een later moment, of via FTP.',
	'IMAGESET_EXPORTED'			=> 'Afbeeldingenset succesvol geëxporteerd en in %s opgeslagen.',
	'IMAGESET_NAME'				=> 'Naam afbeeldingenset',
	'IMAGESET_REFRESHED'		=> 'Afbeeldingenset vernieuwd.',
	'IMAGESET_UPDATED'			=> 'Afbeeldingenset bijgewerkt.',
	'ITALIC'					=> 'Schuin',

	'IMG_CAT_BUTTONS'		=> 'Aanwezige buttons',
	'IMG_CAT_CUSTOM'		=> 'Aangepaste afbeeldingen',
	'IMG_CAT_FOLDERS'		=> 'Onderwerp iconen',
	'IMG_CAT_FORUMS'		=> 'Forum iconen',
	'IMG_CAT_ICONS'			=> 'Algemene iconen',
	'IMG_CAT_LOGOS'			=> 'Logo’s',
	'IMG_CAT_POLLS'			=> 'Stemmingsafbeeldingen',
	'IMG_CAT_UI'			=> 'Algemene gebruikersinterface elementen',
	'IMG_CAT_USER'			=> 'Optionele afbeeldingen',

	'IMG_SITE_LOGO'			=> 'Hoofdlogo',
	'IMG_UPLOAD_BAR'		=> 'Laad voortgangsbalk',
	'IMG_POLL_LEFT'			=> 'Poll linkerkant',
	'IMG_POLL_CENTER'		=> 'Poll midden',
	'IMG_POLL_RIGHT'		=> 'Poll rechterkant',
	'IMG_ICON_FRIEND'		=> 'Voeg toe als vriend',
	'IMG_ICON_FOE'			=> 'Voeg toe als vijand',

	'IMG_FORUM_LINK'			=> 'Forumlink',
	'IMG_FORUM_READ'			=> 'Forum',
	'IMG_FORUM_READ_LOCKED'		=> 'Forum gesloten',
	'IMG_FORUM_READ_SUBFORUM'	=> 'Subforum',
	'IMG_FORUM_UNREAD'			=> 'Forum ongelezen berichten',
	'IMG_FORUM_UNREAD_LOCKED'	=> 'Forum ongelezen gesloten berichten',
	'IMG_FORUM_UNREAD_SUBFORUM'	=> 'Subforum ongelezen berichten',
	'IMG_SUBFORUM_READ'			=> 'Subforum',
	'IMG_SUBFORUM_UNREAD'		=> 'Subforum ongelezen berichten',

	'IMG_TOPIC_MOVED'			=> 'Onderwerp verplaatst',

	'IMG_TOPIC_READ'				=> 'Onderwerp',
	'IMG_TOPIC_READ_MINE'			=> 'Onderwerp verplaatst naar',
	'IMG_TOPIC_READ_HOT'			=> 'Populair onderwerp',
	'IMG_TOPIC_READ_HOT_MINE'		=> 'Onderwerp populair verplaatst naar',
	'IMG_TOPIC_READ_LOCKED'			=> 'Onderwerp gesloten',
	'IMG_TOPIC_READ_LOCKED_MINE'	=> 'Onderwerp gesloten verplaatst naar',

	'IMG_TOPIC_UNREAD'				=> 'Ongelezen onderwerp',
	'IMG_TOPIC_UNREAD_MINE'			=> 'Ongelezen onderwerp verplaatst naar',
	'IMG_TOPIC_UNREAD_HOT'			=> 'Ongelezen onderwerp populair',
	'IMG_TOPIC_UNREAD_HOT_MINE'		=> 'Ongelezen onderwerp populair verplaatst naar',
	'IMG_TOPIC_UNREAD_LOCKED'		=> 'Ongelezen onderwerp gesloten',
	'IMG_TOPIC_UNREAD_LOCKED_MINE'	=> 'Ongelezen onderwerp gesloten verplaatst naar',

	'IMG_STICKY_READ'				=> 'Sticky',
	'IMG_STICKY_READ_MINE'			=> 'Sticky verplaatst naar',
	'IMG_STICKY_READ_LOCKED'		=> 'Sticky gesloten',
	'IMG_STICKY_READ_LOCKED_MINE'	=> 'Sticky gesloten verplaatst naar',
	'IMG_STICKY_UNREAD'				=> 'Sticky ongelezen bericht',
	'IMG_STICKY_UNREAD_MINE'		=> 'Sticky verplaatst naar ongelezen',
	'IMG_STICKY_UNREAD_LOCKED'		=> 'Sticky gesloten ongelezen berichten',
	'IMG_STICKY_UNREAD_LOCKED_MINE'	=> 'Sticky gesloten berichten naar ongelezen',

	'IMG_ANNOUNCE_READ'					=> 'Mededeling',
	'IMG_ANNOUNCE_READ_MINE'			=> 'Mededeling verplaatst naar',
	'IMG_ANNOUNCE_READ_LOCKED'			=> 'Mededeling gesloten',
	'IMG_ANNOUNCE_READ_LOCKED_MINE'		=> 'Mededeling gesloten verplaatst naar',
	'IMG_ANNOUNCE_UNREAD'				=> 'Mededeling ongelezen bericht',
	'IMG_ANNOUNCE_UNREAD_MINE'			=> 'Mededeling verplaatst naar ongelezen',
	'IMG_ANNOUNCE_UNREAD_LOCKED'		=> 'Mededeling gesloten ongelezen berichten',
	'IMG_ANNOUNCE_UNREAD_LOCKED_MINE'	=> 'Mededeling gesloten berichten naar ongelezen',

	'IMG_GLOBAL_READ'					=> 'Globaal',
	'IMG_GLOBAL_READ_MINE'				=> 'Globaal bericht verplaatst naar',
	'IMG_GLOBAL_READ_LOCKED'			=> 'Globaal bericht gesloten',
	'IMG_GLOBAL_READ_LOCKED_MINE'		=> 'Globaal bericht gesloten verplaatst naar',
	'IMG_GLOBAL_UNREAD'					=> 'Ongelezen globaal bericht',
	'IMG_GLOBAL_UNREAD_MINE'			=> 'Globaal bericht verplaatst naar ongelezen',
	'IMG_GLOBAL_UNREAD_LOCKED'			=> 'Gesloten globale ongelezen berichten',
	'IMG_GLOBAL_UNREAD_LOCKED_MINE'		=> 'Gesloten globale berichten naar ongelezen',

	'IMG_PM_READ'		=> 'Gelezen privébericht',
	'IMG_PM_UNREAD'		=> 'Ongelezen privébericht',

	'IMG_ICON_BACK_TOP'		=> 'Top',

	'IMG_ICON_CONTACT_AIM'		=> 'AIM',
	'IMG_ICON_CONTACT_EMAIL'	=> 'E-mail',
	'IMG_ICON_CONTACT_ICQ'		=> 'ICQ',
	'IMG_ICON_CONTACT_JABBER'	=> 'Jabber',
	'IMG_ICON_CONTACT_MSNM'		=> 'MSN',
	'IMG_ICON_CONTACT_PM'		=> 'PB',
	'IMG_ICON_CONTACT_YAHOO'	=> 'YIM',
	'IMG_ICON_CONTACT_WWW'		=> 'Website',

	'IMG_ICON_POST_DELETE'			=> 'Verwijder bericht',
	'IMG_ICON_POST_EDIT'			=> 'Bewerk bericht',
	'IMG_ICON_POST_INFO'			=> 'Geef berichtdetails weer',
	'IMG_ICON_POST_QUOTE'			=> 'Citeer bericht',
	'IMG_ICON_POST_REPORT'			=> 'Meld bericht',
	'IMG_ICON_POST_TARGET'			=> 'Minibericht',
	'IMG_ICON_POST_TARGET_UNREAD'	=> 'Nieuw minibericht',


	'IMG_ICON_TOPIC_ATTACH'			=> 'Bijlage',
	'IMG_ICON_TOPIC_LATEST'			=> 'Laatste bericht',
	'IMG_ICON_TOPIC_NEWEST'			=> 'Laatste ongelezen bericht',
	'IMG_ICON_TOPIC_REPORTED'		=> 'Bericht gemeld',
	'IMG_ICON_TOPIC_UNAPPROVED'		=> 'Bericht afgekeurd',

	'IMG_ICON_USER_ONLINE'		=> 'Gebruiker online',
	'IMG_ICON_USER_OFFLINE'		=> 'Gebruiker offline',
	'IMG_ICON_USER_PROFILE'		=> 'Geef profiel weer',
	'IMG_ICON_USER_SEARCH'		=> 'Zoek berichten',
	'IMG_ICON_USER_WARN'		=> 'Waarschuw gebruiker',

	'IMG_BUTTON_PM_FORWARD'		=> 'Privébericht doorsturen',
	'IMG_BUTTON_PM_NEW'			=> 'Nieuw privébericht',
	'IMG_BUTTON_PM_REPLY'		=> 'Beantwoord privébericht',
	'IMG_BUTTON_TOPIC_LOCKED'	=> 'Onderwerp gesloten',
	'IMG_BUTTON_TOPIC_NEW'		=> 'Nieuw onderwerp',
	'IMG_BUTTON_TOPIC_REPLY'	=> 'Beantwoord onderwerp',

	'IMG_USER_ICON1'		=> 'Voorkeursafbeelding 1',
	'IMG_USER_ICON2'		=> 'Voorkeursafbeelding 2',
	'IMG_USER_ICON3'		=> 'Voorkeursafbeelding 3',
	'IMG_USER_ICON4'		=> 'Voorkeursafbeelding 4',
	'IMG_USER_ICON5'		=> 'Voorkeursafbeelding 5',
	'IMG_USER_ICON6'		=> 'Voorkeursafbeelding 6',
	'IMG_USER_ICON7'		=> 'Voorkeursafbeelding 7',
	'IMG_USER_ICON8'		=> 'Voorkeursafbeelding 8',
	'IMG_USER_ICON9'		=> 'Voorkeursafbeelding 9',
	'IMG_USER_ICON10'		=> 'Voorkeursafbeelding 10',

	'INCLUDE_DIMENSIONS'		=> 'Gebruik afmetingen',
	'INCLUDE_IMAGESET'			=> 'Gebruik afbeeldingenset',
	'INCLUDE_TEMPLATE'			=> 'Gebruik template',
	'INCLUDE_THEME'				=> 'Gebruik thema',
	'INHERITING_FROM'			=> 'Overnemen van',
	'INSTALL_IMAGESET'			=> 'Installeer afbeeldingenset',
	'INSTALL_IMAGESET_EXPLAIN'	=> 'Hier kun je een nieuwe afbeeldingenset installeren',
	'INSTALL_STYLE'				=> 'Stijl installeren',
	'INSTALL_STYLE_EXPLAIN'		=> 'Hier kun je een nieuwe stijl installeren.',
	'INSTALL_TEMPLATE'			=> 'Template installeren',
	'INSTALL_TEMPLATE_EXPLAIN'	=> 'Hier kun je een nieuwe templateset installeren.',
	'INSTALL_THEME'				=> 'Installeer thema',
	'INSTALL_THEME_EXPLAIN'		=> 'Hier kun je jouw geselecteerde thema installeren.',
	'INSTALLED_IMAGESET'		=> 'Geïnstalleerde afbeeldingensets',
	'INSTALLED_STYLE'			=> 'Geïnstalleerde stijlen',
	'INSTALLED_TEMPLATE'		=> 'Geïnstalleerde templates',
	'INSTALLED_THEME'			=> 'Geïnstalleerde thema’s',

	'LINE_SPACING'				=> 'Lijn spatie',
	'LOCALISED_IMAGES'			=> 'Gelokaliseerd',
	'LOCATION_DISABLED_EXPLAIN'	=> 'Deze instelling is overgenomen en kan niet worden gewijzigd.',


	'NO_CLASS'					=> 'Kan de klasse in het stijlblad niet vinden.',
	'NO_IMAGESET'				=> 'Kan de afbeeldingenset in het bestandssysteem niet vinden.',
	'NO_IMAGE'					=> 'Geen afbeelding',
	'NO_IMAGE_ERROR'			=> 'Kan de afbeelding in het bestandssysteem niet vinden.',
	'NO_STYLE'					=> 'Kan stijl niet vinden in het bestandssysteem.',
	'NO_TEMPLATE'				=> 'Kan de template niet vinden in het bestandssysteem.',
	'NO_THEME'					=> 'Kan het thema niet vinden in het bestandssysteem.',
	'NO_UNINSTALLED_IMAGESET'	=> 'Geen gedeïnstalleerde afbeeldingensets gevonden.',
	'NO_UNINSTALLED_STYLE'		=> 'Geen gedeïnstalleerde stijlen gevonden.',
	'NO_UNINSTALLED_TEMPLATE'	=> 'Geen gedeïnstalleerde templates gevonden.',
	'NO_UNINSTALLED_THEME'		=> 'Geen gedeïnstalleerde thema’s gevonden.',
	'NO_UNIT'					=> 'Geen',

	'ONLY_IMAGESET'			=> 'Dit is de enige overgebleven afbeeldingenset, je kunt deze niet verwijderen.',
	'ONLY_STYLE'			=> 'Dit is de enige overgebleven stijl, je kunt deze niet verwijderen.',
	'ONLY_TEMPLATE'			=> 'Dit is de enige overgebleven template, je kunt deze niet verwijderen.',
	'ONLY_THEME'			=> 'Dit is het enige overgebleven thema, je kunt deze niet verwijderen.',
	'OPTIONAL_BASIS'		=> 'Optionele basis',

	'REFRESH'					=> 'Vernieuw',
	'REPEAT_NO'					=> 'Geen',
	'REPEAT_X'					=> 'Alleen horizontaal',
	'REPEAT_Y'					=> 'Alleen verticaal',
	'REPEAT_ALL'				=> 'Beide mappen',
	'REPLACE_IMAGESET'			=> 'Vervang afbeeldingenset met',
	'REPLACE_IMAGESET_EXPLAIN'	=> 'Dit thema zal de verwijderde afbeeldingenset vervangen in alle stijlen die het gebruiken.',
	'REPLACE_STYLE'				=> 'Vervang stijl met',
	'REPLACE_STYLE_EXPLAIN'		=> 'Deze stijl zal de verwijderde stijl vervangen voor de leden die hem gebruiken.',
	'REPLACE_TEMPLATE'			=> 'Vervang template met',
	'REPLACE_TEMPLATE_EXPLAIN'	=> 'Dit thema zal de verwijderde template vervangen in alle stijlen die het gebruiken.',
	'REPLACE_THEME'				=> 'Vervang thema met',
	'REPLACE_THEME_EXPLAIN'		=> 'Dit thema zal het verwijderde thema vervangen in alle stijlen die het gebruiken.',
	'REQUIRES_IMAGESET'			=> 'Deze stijl vereist dat de afbeeldingenset %s geïnstalleerd is.',
	'REQUIRES_TEMPLATE'			=> 'Deze stijl vereist dat de template %s geïnstalleerd is.',
	'REQUIRES_THEME'			=> 'Deze stijl vereist dat het thema %s geïnstalleerd is.',

	'SELECT_IMAGE'				=> 'Selecteer afbeelding',
	'SELECT_TEMPLATE'			=> 'Selecteer templatebestand',
	'SELECT_THEME'				=> 'Selecteer themabestand',
	'SELECTED_IMAGE'			=> 'Geselecteerde afbeelding',
	'SELECTED_IMAGESET'			=> 'Geselecteerde afbeeldingenset',
	'SELECTED_TEMPLATE'			=> 'Geselecteerde template',
	'SELECTED_TEMPLATE_FILE'	=> 'Geselecteerd template bestand',
	'SELECTED_THEME'			=> 'Geselecteerd thema',
	'SELECTED_THEME_FILE'		=> 'Geselecteerd themabestand',
	'STORE_DATABASE'			=> 'Database',
	'STORE_FILESYSTEM'			=> 'bestandssysteem',
	'STYLE_ACTIVATE'			=> 'Activeer',
	'STYLE_ACTIVE'				=> 'Actief',
	'STYLE_ADDED'				=> 'Stijl succesvol toegevoegd.',
	'STYLE_DEACTIVATE'			=> 'Deactiveer',
	'STYLE_DEFAULT'				=> 'Instellen als standaardstijl',
	'STYLE_DELETED'				=> 'Stijl succesvol verwijderd.',
	'STYLE_DETAILS_UPDATED'		=> 'Stijl succesvol bewerkt.',
	'STYLE_ERR_ARCHIVE'			=> 'Selecteer een archiveringsmethode.',
	'STYLE_ERR_COPY_LONG'		=> 'Het copyright mag niet langer zijn dan 60 tekens.',
	'STYLE_ERR_MORE_ELEMENTS'	=> 'Je dient minimaal één stijlelement te selecteren.',
	'STYLE_ERR_NAME_CHARS'		=> 'De stijlnaam mag alleen letters, cijfers, -, +, _ en spaties bevatten.',
	'STYLE_ERR_NAME_EXIST'		=> 'Er bestaat reeds een stijl met deze naam.',
	'STYLE_ERR_NAME_LONG'		=> 'De stijlnaam mag niet langer zijn dan 30 tekens.',
	'STYLE_ERR_NO_IDS'			=> 'Je moet een template, thema en afbeeldingenset voor deze stijl selecteren.',
	'STYLE_ERR_NOT_STYLE'		=> 'Het bestand bevat geen geldig stijlarchief.',
	'STYLE_ERR_STYLE_NAME'		=> 'Je moet deze stijl een naam geven.',
	'STYLE_EXPORT'				=> 'Exporteer stijl',
	'STYLE_EXPORT_EXPLAIN'		=> 'Hier kun je een stijl exporteren in de vorm van een archief. Dit archief zal alle benodigde data bevatten om de stijl op een ander forum te installeren. Om het bestand te verkrijgen kun je kiezen tussen een directe download, opslaan in je store-map voor een download op een later moment, of via FTP.',
	'STYLE_EXPORTED'			=> 'Stijl succesvol geëxporteerd en in %s opgeslagen.',
	'STYLE_IMAGESET'			=> 'Afbeeldingenset',
	'STYLE_NAME'				=> 'Stijlnaam',
	'STYLE_TEMPLATE'			=> 'Template',
	'STYLE_THEME'				=> 'Thema',
	'STYLE_USED_BY'				=> 'Gebruikt door (inclusief robots)',

	'TEMPLATE_ADDED'			=> 'Templateset toegevoegd en in het bestandssysteem opgeslagen.',
	'TEMPLATE_ADDED_DB'			=> 'Templateset toegevoegd en in de database opgeslagen.',
	'TEMPLATE_CACHE'			=> 'Template buffer',
	'TEMPLATE_CACHE_EXPLAIN'	=> 'phpBB buffert standaard een gecompileerde versie van de templates. Dit reduceert de serverbelasting iedere keer wanneer een pagina wordt bekeken.',
	'TEMPLATE_CACHE_CLEARED'	=> 'Template buffer succesvol geleegd.',
	'TEMPLATE_CACHE_EMPTY'		=> 'Er zijn geen gebufferde templates.',
	'TEMPLATE_DELETED'			=> 'Templateset succesvol verwijderd.',
	'TEMPLATE_DELETE_DEPENDENT'	=> 'De templateset kan niet worden verwijderd, omdat één of meerdere templatesets hiervan afhankelijk zijn:',
	'TEMPLATE_DELETED_FS'		=> 'De templateset is uit de database verwijderd, maar sommige bestanden kunnen nog in het bestandssysteem aanwezig zijn.',
	'TEMPLATE_DETAILS_UPDATED'	=> 'De details van de template zijn bijgewerkt.',
	'TEMPLATE_EDITOR'			=> 'Ruwe HTML-templatebewerker',
	'TEMPLATE_EDITOR_HEIGHT'	=> 'Hoogte templatebewerker',
	'TEMPLATE_ERR_ARCHIVE'		=> 'Selecteer een archiveringsmethode.',
	'TEMPLATE_ERR_CACHE_READ'	=> 'De buffermap, welke wordt gebruikt om de gebufferde template bestanden in op te slaan kon niet worden geopend.',
	'TEMPLATE_ERR_COPY_LONG'	=> 'Het copyright mag niet langer dan 60 tekens zijn.',
	'TEMPLATE_ERR_NAME_CHARS'	=> 'De templatenaam mag alleen letters, cijfers, -, +, _ en spaties bevatten.',
	'TEMPLATE_ERR_NAME_EXIST'	=> 'De naam voor deze templateset bestaat al.',
	'TEMPLATE_ERR_NAME_LONG'	=> 'De naam van de template mag niet langer zijn dan 30 tekens',
	'TEMPLATE_ERR_NOT_TEMPLATE'	=> 'Het archief dat je hebt opgegeven bevat geen geldige templateset.',
	'TEMPLATE_ERR_REQUIRED_OR_INCOMPLETE'	=> 'De nieuwe templateset heeft de template %s nodig om te kunnen worden geïnstalleerd.',
	'TEMPLATE_ERR_STYLE_NAME'	=> 'Je dient een naam voor deze template op te geven.',
	'TEMPLATE_EXPORT'			=> 'Exporteer template',
	'TEMPLATE_EXPORT_EXPLAIN'	=> 'Hier kun je een templateset exporteren in de vorm van een archief. Dit archief zal alle benodigde data bevatten om de template op een ander forum te installeren. Om het bestand te verkrijgen, kun je kiezen tussen een directe download, opslaan in je store-map voor een download op een later moment, of via FTP.',
	'TEMPLATE_EXPORTED'			=> 'De template is succesvol geëxporteerd en in %s opgeslagen.',
	'TEMPLATE_FILE'				=> 'Templatebestand',
	'TEMPLATE_FILE_UPDATED'		=> 'Het templatebestand is succesvol bijgewerkt.',
	'TEMPLATE_INHERITS'			=> 'De templateset neemt instellingen over van %s en kan derhalve geen andere opslaginstelling hebben dan zijn voorgaande template.',
	'TEMPLATE_LOCATION'			=> 'Templates opslaan in',
	'TEMPLATE_LOCATION_EXPLAIN'	=> 'Afbeeldingen zijn altijd in het bestandssysteem opgeslagen.',
	'TEMPLATE_NAME'				=> 'Templatenaam',
	'TEMPLATE_FILE_NOT_WRITABLE'=> 'Het is niet mogelijk om naar het templatebestand %s te schrijven. Controleer de permissies voor de map en de bestanden.',
	'TEMPLATE_REFRESHED'		=> 'Template succesvol vernieuwd.',

	'THEME_ADDED'				=> 'Nieuw thema aan het bestandssysteem toegevoegd.',
	'THEME_ADDED_DB'			=> 'Nieuw thema aan de database toegevoegd.',
	'THEME_CLASS_ADDED'			=> 'Eigen klasse succesvol toegevoegd.',
	'THEME_DELETED'				=> 'Thema is succesvol verwijderd.',
	'THEME_DELETED_FS'			=> 'Thema is succesvol uit de database verwijderd, maar de bestanden blijven aanwezig in het bestandssysteem.',
	'THEME_DETAILS_UPDATED'		=> 'De themadetails zijn succesvol bijgewerkt.',
	'THEME_EDITOR'				=> 'Themabewerker',
	'THEME_EDITOR_HEIGHT'		=> 'Hoogte themabewerker',
	'THEME_ERR_ARCHIVE'			=> 'Selecteer een archiveringsmethode.',
	'THEME_ERR_CLASS_CHARS'		=> 'Alleen letters, cijfers, ., :, -, _ en # mogen in klassenamen gebruikt worden.',
	'THEME_ERR_COPY_LONG'		=> 'Het copyright mag niet langer dan 60 tekens zijn.',
	'THEME_ERR_NAME_CHARS'		=> 'De naam van het thema mag alleen letters, cijfers, -, +, _ en spaties bevatten.',
	'THEME_ERR_NAME_EXIST'		=> 'Er bestaat reeds een thema met deze naam.',
	'THEME_ERR_NAME_LONG'		=> 'De naam van het thema mag niet langer zijn dan 30 tekens.',
	'THEME_ERR_NOT_THEME'		=> 'Het archief dat je hebt opgegeven bevat geen geldig thema.',
	'THEME_ERR_REFRESH_FS'		=> 'Dit thema is opgeslagen in het bestandssysteem, waardoor het niet nodig is om deze te vernieuwen.',
	'THEME_ERR_STYLE_NAME'		=> 'Geef een naam aan dit thema.',
	'THEME_FILE'				=> 'Themabestand',
	'THEME_EXPORT'				=> 'Exporteer thema',
	'THEME_EXPORT_EXPLAIN'		=> 'Hier kun je een thema exporteren in de vorm van een archief. Dit archief zal alle benodigde data bevatten om het thema op een ander forum te installeren. Om het bestand te verkrijgen kun je kiezen tussen een directe download, opslaan in je store-map voor een download op een later moment, of via FTP.',
	'THEME_EXPORTED'			=> 'Thema succesvol geëxporteerd en opgeslagen in %s.',
	'THEME_LOCATION'			=> 'Het stijlblad opslaan in',
	'THEME_LOCATION_EXPLAIN'	=> 'Afbeeldingen staan reeds opgeslagen in het bestandssysteem.',
	'THEME_NAME'				=> 'Themanaam',
	'THEME_REFRESHED'			=> 'Themavernieuwing succesvol uitgevoerd.',
	'THEME_UPDATED'				=> 'Thema succesvol bijgewerkt.',

	'UNDERLINE'				=> 'Onderstreept',
	'UNINSTALLED_IMAGESET'	=> 'Niet geïnstalleerde afbeeldingensets',
	'UNINSTALLED_STYLE'		=> 'Niet geïnstalleerde stijlen',
	'UNINSTALLED_TEMPLATE'	=> 'Niet geïnstalleerde templates',
	'UNINSTALLED_THEME'		=> 'Niet geïnstalleerde thema’s',
	'UNSET'					=> 'Niet aangegeven',

));

?>