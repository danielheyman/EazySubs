<?php
/** 
*
* acp_profile [Croatian]
*
* @package language
* @version $Id: $
* @copyright phpBB (c) 2000-2008 phpBB Group 
* @author Ančica Sečan 2003-2008
* @author hecos 2010
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

// Custom profile fields
$lang = array_merge($lang, array(
'ADDED_PROFILE_FIELD'=> 'Prilagođeno korisničko polje je dodano.',
'ALPHA_ONLY'=> 'Alfanumerički znakovi',
'ALPHA_SPACERS'=> 'Alfanumerički znakovi i razmaknice',
'ALWAYS_TODAY'=> 'Uvijek trenutan datum',

'BOOL_ENTRIES_EXPLAIN'=> 'Unesi opcije.',
'BOOL_TYPE_EXPLAIN'=> 'Definiraj tip za odabir: ili kvadratići [checkbox] ili kružići [radio buttons].<br />Kvadratić će biti prikazan samo ako je označen za korisnika/cu u  slučaju čega će <strong>druga</strong> jezična opcija biti korištena. Kružići će biti prikazani bez obzira na njihovu vrijednost.',

'CHANGED_PROFILE_FIELD'=> 'Korisničko polje je izmijenjeno.',
'CHARS_ANY'=> 'Bilo koji znak',
'CHECKBOX'=> 'Kvadratić(i) za odabir [checkbox]',
'COLUMNS'=> 'Stupci',
'CP_LANG_DEFAULT_VALUE'=> 'Zadana vrijednost',
'CP_LANG_EXPLAIN'=> 'Opis polja',
'CP_LANG_EXPLAIN_EXPLAIN'=> 'Objašnjenje (ovog) polja koje će biti vidljivo korisniku/ci.',
'CP_LANG_NAME'=> 'Naziv/naslov polja koje će biti vidljivo korisniku/ci',
'CP_LANG_OPTIONS'=> 'Opcije',
'CREATE_NEW_FIELD'=> 'Kreiraj novo polje',
'CUSTOM_FIELDS_NOT_TRANSLATED'=> 'Najmanje jedno prilagođeno korisničko polje nije prevedeno.<br />Unesi tražene informacije klikom na <em>“Prevedi”</em> link.',

'DEFAULT_ISO_LANGUAGE'=> 'Zadani jezik [%s]',
'DEFAULT_LANGUAGE_NOT_FILLED'=> 'Jezični unosi zadanog jezika nisu ispunjeni za (ovo) korisničko polje.',
'DEFAULT_VALUE'=> 'Zadana vrijednost',
'DELETE_PROFILE_FIELD'=> 'Izbriši korisničko polje',
'DELETE_PROFILE_FIELD_CONFIRM'=> 'Jesi li siguran/na da želiš izbrisati (ovo) korisničko polje?',
'DISPLAY_AT_PROFILE'=> 'Prikaži u korisničkom Profilu/Postavkama',
'DISPLAY_AT_PROFILE_EXPLAIN'=> 'Korisnik/ca može mijenjati ovo korisničko polje u korisničkom Profilu/Postavkama.',
'DISPLAY_AT_REGISTER'=> 'Prikaži prilikom registracije',
'DISPLAY_AT_REGISTER_EXPLAIN'=> 'Korisničko polje bit će prikazano prilikom registracije te će ga biti moguće mijenjati u korisničkom Profilu/Postavkama.',
'DISPLAY_ON_VT'=> 'Prikaži na viewtopic stranici',
'DISPLAY_ON_VT_EXPLAIN'=> 'Ukoliko je ova opcija omogućena, polje će biti prikazano u mini-profilu unutar tema.',
'DISPLAY_PROFILE_FIELD'=> 'Prikaži korisničko polje',
'DISPLAY_PROFILE_FIELD_EXPLAIN'=> 'Korisničko polje bit će prikazano na svim dopuštenim mjestima, ukoliko (će biti) je omogućeno u <em>Ostalim postavkama</em>.<br />Postavljanje opcije na "Ne" rezultirat će skrivanjem polja na stranicama tema, korisničkim profilima i popisu Članstva.',

'DROPDOWN_ENTRIES_EXPLAIN'=> 'Unesi opcije, svaku u novi redak.',

'EDIT_DROPDOWN_LANG_EXPLAIN'=> 'Možeš mijenjati opcije te dodavati nove.<br />Prilikom dodavanja novih opcija, nije preporučljivo umetati ih između već postojećih već, dodavati ih na kraj kako ne bi došlo do netočnog opcioniranja kod korisnika/ca [isto vrijedi i za izbrisivanje opcija (s time da kod izbrisivanja treba obratiti pažnju na to da će korisniku/ci, ukoliko je izbrisana opcija koju je izabrao/la, “izabranom” opcijom postati zadana opcija)].',
'EMPTY_FIELD_IDENT'=> 'Prazno (isprazni) polje identifikacije',
'EMPTY_USER_FIELD_NAME'=> 'Unesi naziv/naslov polja',
'ENTRIES'=> 'Unosi',
'EVERYTHING_OK'=> 'Sve u redu',

'FIELD_BOOL'=> 'Boolean (Da/Ne)',
'FIELD_DATE'=> 'Datum',
'FIELD_DESCRIPTION'=> 'Opis polja',
'FIELD_DESCRIPTION_EXPLAIN'=> 'Objašnjenje (ovog) polja koje će biti vidljivo korisniku/ci.',
'FIELD_DROPDOWN'=> 'Padajući izbornik',
'FIELD_IDENT'=> 'Identifikacija polja',
'FIELD_IDENT_ALREADY_EXIST'=> 'Izabrana identifikacija polja (već) postoji.<br />Izaberi drugo ime.',
'FIELD_IDENT_EXPLAIN'=> 'Identifikacija polja je ime koje služi za identifikaciju korisničkog polja u bazi podataka i predlošcima.',
'FIELD_INT'=> 'Brojevi',
'FIELD_LENGTH'=> 'Dužina kućice za unos podataka',
'FIELD_NOT_FOUND'=> 'Korisničko polje nije (pro)nađeno.',
'FIELD_STRING'=> 'Tekstualno polje',
'FIELD_TEXT'=> 'Kućica za unos teksta',
'FIELD_TYPE'=> 'Tip polja',
'FIELD_TYPE_EXPLAIN'=> 'Tip polja nećeš moći promijeniti naknadno.',
'FIELD_VALIDATION'=> 'Provjera valjanosti polja',
'FIRST_OPTION'=> 'Prva opcija',

'HIDE_PROFILE_FIELD'=> 'Sakrij korisničko polje',
'HIDE_PROFILE_FIELD_EXPLAIN'=> 'Samo administratori(ce)/moderatori(ce) mogu vidjeti/ispun(java)iti (ovo) korisničko polje.<br />Ukoliko je polje omogućeno, bit će prikazano samo u korisničkim profilima.',

'INVALID_CHARS_FIELD_IDENT'=> 'Identifikacija polja može sadržavati samo mala slova i podvlačnik(e) (_).',
'INVALID_FIELD_IDENT_LEN'=> 'Identifikacija polja može sadržavati maksimalno 17 znakova.',
'ISO_LANGUAGE'=> 'Jezik [%s]',

'LANG_SPECIFIC_OPTIONS'=> 'Posebne postavke jezika [<strong>%s</strong>]',

'MAX_FIELD_CHARS'=> 'Maksimalan broj znakova',
'MAX_FIELD_NUMBER'=> 'Najveći dopušten broj',
'MIN_FIELD_CHARS'=> 'Minimalan broj znakova',
'MIN_FIELD_NUMBER'=> 'Najmanji dopušten broj',

'NO_FIELD_ENTRIES'=> 'Nisu definirani unosi.',
'NO_FIELD_ID'=> 'Nije određeno polje.',
'NO_FIELD_TYPE'=> 'Nije određen tip polja.',
'NO_VALUE_OPTION'=> 'Opcija jednaka ne-unesenoj vrijednosti',
'NO_VALUE_OPTION_EXPLAIN'=> 'Vrijednost za ne-uneseno.<br />Ukoliko je polje obvezno, korisnik/ca dobiva grešku ukoliko izabere ovdje izabranu opciju.',
'NUMBERS_ONLY'=> 'Samo brojevi (0-9)',

'PROFILE_BASIC_OPTIONS'=> 'Osnovne postavke',
'PROFILE_FIELD_ACTIVATED'=> 'Korisničko polje je aktivirano.',
'PROFILE_FIELD_DEACTIVATED'=> 'Korisničko polje je deaktivirano.',
'PROFILE_LANG_OPTIONS'=> 'Posebne postavke jezika',
'PROFILE_TYPE_OPTIONS'=> 'Posebne postavke korisničkog polja',

'RADIO_BUTTONS'=> 'Kružić(i) za odabir [radio buttons]',
'REMOVED_PROFILE_FIELD'=> 'Korisničko polje je izbrisano.',
'REQUIRED_FIELD'=> 'Obvezno polje',
'REQUIRED_FIELD_EXPLAIN'=> 'Korisničko polje mora biti ispunjeno ili određeno od strane korisnika/ce.<br /> Bit će prikazano prilikom registracije te u korisničkom Profilu/Postavkama.',
'ROWS'=> 'Redci',

'SAVE'=> 'Pohrani',
'SECOND_OPTION'=> 'Druga opcija',
'STEP_1_EXPLAIN_CREATE'=> 'Ovdje možeš unijeti prve osnovne parametre novog korisničkog polja.<br />Informacije su potrebne zbog drugog koraka gdje ćeš moći podesiti preostale opcije.',
'STEP_1_EXPLAIN_EDIT'=> 'Ovdje možeš promijeniti osnovne parametre polja.<br />Relevantne postavke/opcije su re-kalkulirane u sljedećem koraku.',
'STEP_1_TITLE_CREATE'=> 'Dodavanje korisničkog polja',
'STEP_1_TITLE_EDIT'=> 'Uređivanje korisničkog polja',
'STEP_2_EXPLAIN_CREATE'=> 'Ovdje možeš definirati/prilagoditi (neke) uobičajene postavke.',
'STEP_2_EXPLAIN_EDIT'=> 'Ovdje možeš promijeniti neke uobičajene postavke.<br /><strong>Promjene u korisničkim poljima neće imati efekta na korisnička polja u koja su korisnici/e već unijeli/e podatke.</strong>',
'STEP_2_TITLE_CREATE'=> 'Posebne postavke tipa',
'STEP_2_TITLE_EDIT'=> 'Posebne postavke tipa',
'STEP_3_EXPLAIN_CREATE'=> 'Kako imaš instalirano više od jednog jezičnog paketa, moraš ispuniti preostale jezične stavke.<br />Korisničko polje će raditi s omogućenim zadanim jezikom [što će reći da preostale jezične stavke možeš naknadno ispuniti].',
'STEP_3_EXPLAIN_EDIT'=> 'Kako imaš instalirano više od jednog jezičnog paketa, možeš mijenjati/dodavati (pre)ostale jezične stavke.<br />Korisničko polje će raditi s omogućenim zadanim jezikom.',
'STEP_3_TITLE_CREATE'=> 'Preostale jezične definicije',
'STEP_3_TITLE_EDIT'=> 'Jezične definicije',
'STRING_DEFAULT_VALUE_EXPLAIN'=> 'Želiš li da polje bude prikazano prazno - nemoj unijeti ništa, u protivnom - unesi ono što želiš da se prikaže prilikom prikazivanja polja.',

'TEXT_DEFAULT_VALUE_EXPLAIN'=> 'Želiš li da polje bude prikazano prazno - nemoj unijeti ništa, u protivnom - unesi ono što želiš da se prikaže prilikom prikazivanja polja.',
'TRANSLATE'=> 'Prevedi',

'USER_FIELD_NAME'=> 'Naziv/naslov polja koje će biti vidljivo korisniku/ci',

'VISIBILITY_OPTION'=> 'Gdje će polje biti prikazano',
));
?>