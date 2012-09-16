<?php
/**
*
* @package Icy Phoenix
* @version $Id$
* @copyright (c) 2008 Icy Phoenix
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

if (!defined('IN_ICYPHOENIX'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// Donations - BEGIN
$lang['MG_DONATIONS'] = 'Donazioni';
$lang['MG_DONATE'] = 'Fai Una Donazione';
$lang['MUST_ENTER_DONATION'] = 'Devi compilare almeno ammontare e descrizione.';
$lang['DONATION_ADD'] = 'Aggiungi Donazione';
$lang['DONATION_ADDED'] = 'Donazione Aggiunta';
$lang['DONATION_UPDATED'] = 'Donazione Aggiornata';
$lang['DONATION_REMOVED'] = 'Donazione Rimossa';
$lang['DONATION_VIEW'] = 'Visualizza Donazione';
$lang['AMOUNT'] = 'Importo';
$lang['NO_DONATIONS'] = 'Nessuna Donazione';
$lang['CLICK_RETURN_DONATIONS'] = 'Clicca %sQUI%s per tornare alle Donazioni';
// Donations - END

$lang = array_merge($lang, array(
	'cms_page_name_donations' => 'Donazioni',

	'9000_DONATIONS' => 'Donazioni',
	'9110_DONATIONS_CONFIG' => 'Configurazione',
	'PLUGIN_DONATIONS_GENERAL' => 'Impostazioni',

	'ACP_DONATION_MOD_SETTINGS' => 'Impostazioni Donazioni',
	'ACP_DONATION_MOD_SETTINGS_EXPLAIN' => 'Gestione impostazioni donazioni',

	'CONVERT_PERCENTAGE' => 'Percentuale conversione valuta estera',
	'CONVERT_PERCENTAGE_EXPLAIN' => 'Inserisci la commissione in percentuale per la conversione in valuta (5 = 5%)',
	'COUNTRY' => 'Nazione',
	'COUNTRY_EXPLAIN' => '',
	'CURRENCY_NOT_RECOGNISED' => 'Il codice valuta: %s non &egrave; valido',

	'DEFAULT_COUNTRY' => 'Nazione Predefinita',
	'DEFAULT_CURRENCY' => 'Valuta Predefinita',
	'DONATE_AMOUNT' => 'Importo Donazione',
	'DONATE_AMOUNT_EXPLAIN' => '',
	'DONATION_CANCELED' => 'Donazione annullata',
	'DONATE_EXPLAIN' => 'Effettua una donazione tramite PayPal',
	'DONATE_MINIMUM' => 'Ammontare minimo donazione',
	'DONATE_MINIMUM_EXPLAIN' => 'Inserisci l\'ammontare minimo di donazione per la valuta predefinita',
	'DONATE_TO_SITENAME' => 'Dona a %s',
	'DONATE_TO_SITENAME_EXPLAIN' => '<b>Sostieni %1$s effettuando una donazione tramite PayPal</b><br /><br />
	La tua donazione verr&agrave; utilizzata come contributo spese per il mantenimento del server e del progetto.<br /><br />
	Se la tua donazione per <b>%1$s</b> &egrave; di almeno <b>%2$s</b>, verrai automaticamente aggiunto al gruppo <b>%3$s</b> e potrai ricevere dei privilegi speciali. Assicurati di aver effettuato il login quando effettui la donazione per poter essere identificato correttamente.<br /><br />
	Si ringrazia fin da ora coloro che ci sosterranno.',
	'DONATION_MESSAGE' => 'Messaggio Donazione (Memo)',
	'DONATION_RECEIVED_VERIFIED' => 'Donazione Ricevuta (Verificata) da %s',
	'DONATION_RECEIVED_UNVERIFIED' => 'Donazione Ricevuta (Non Verificata) da %s',
	'DONATION_RECEIVED_MSG_VERIFIED' => 'Ciao,
	Hai ricevuto una donazione da %2$s ( %1$s ) per un totale di %3$s.
	Questa transazione &egrave; stata verificata e non necessita di altri interventi.',
	'DONATION_RECEIVED_MSG_UNVERIFIED' => 'Ciao,
	hai ricevuto una donazione da %2$s ( %1$s ) per un totale di %3$s',

	'DONATION_TRANSACTION_ID' => 'ID Donazione',
	'DONATION_TXN_ID' => 'ID Transazione',
	'DONATION_TXN_TYPE' => 'Tipo Transazione',
	'DONATION_CONFIRMED' => 'Conferma',
	'DONATION_USER_ID' => 'ID Utente',
	'DONATION_USERNAME' => 'Nome Utente',
	'DONATION_ITEM_NAME' => 'Nome Elemento',
	'DONATION_ITEM_NUMBER' => 'Numero Elemento',
	'DONATION_PAYMENT_TIME' => 'Ora Pagamento',
	'DONATION_BUSINESS' => 'Business',
	'DONATION_PAYMENT_STATUS' => 'Stato Pagamento',
	'DONATION_PAYMENT_GROSS' => 'Pagamento Lordo',
	'DONATION_PAYMENT_FEE' => 'Imposta Pagamento',
	'DONATION_PAYMENT_TYPE' => 'Tipo Pagamento',
	'DONATION_MC_CURRENCY' => 'Valuta',
	'DONATION_PAYMENT_DATE' => 'Data Pagamento',
	'DONATION_PAYER_ID' => 'ID Pagante',
	'DONATION_PAYER_EMAIL' => 'Email',
	'DONATION_PAYER_WEBSITE' => 'Sito Web',
	'DONATION_PAYER_WEBSITE_TEXT' => 'Descrizione Sito Web',
	'DONATION_PAYER_WEBSITE_SPONSOR' => 'Mostra Link E Descrizione',
	'DONATION_PAYER_WEBSITE_SPONSOR_EXPLAIN' => 'Selezionando questa opzione il link verr&agrave; mostrato includendo il testo (si pu&ograve; usare questa funzione per gli sponsor)',
	'DONATION_PAYER_STATUS' => 'Stato Pagante',
	'DONATION_FIRST_NAME' => 'Nome',
	'DONATION_LAST_NAME' => 'Cognome',
	'DONATION_MEMO' => 'Memo',

	'ERROR_LOGGING' => 'Log Errori',
	'ERROR_LOGGING_EXPLAIN' => 'Gli errori verranno memorizzati nel file /logs/transactions.log',
	'ERROR_NO_EXCHANGE_DATA' => 'Errore: nessuna informazione sui tassi di cambio',

	'FOUNDER_MANAGE' => 'Gestione Riservata Ai Fondatori',
	'FOUNDER_MANAGE_EXPLAIN' => 'Se questa opzione viene attivata, solo il fondatore del sito potr&agrave; configurare le donazioni',

	'HTTP_ERROR' => 'Errore HTTP',

	'INVALID_TRANSACTION_RECORD' => 'Transazione non valida: non &egrave; stato trovato l\'ID della transazione',

	'MOD_DISABLED' => 'Questo MOD &egrave; attualmente disattivato, contatta un Amministratore',
	'MOD_INSTALLED_SUCCESSFULLY' => 'MOD installato correttamente versione: %s',
	'MOD_UPDATED_SUCCESSFULLY' => 'MOD aggiornato correttamente alla versione %s',

	'NO_SUBJECT' => 'Nessun Oggetto Specificato',
	'NOT_AUTHORIZED' => 'Non autorizzato',
	'NO_TRANSACTION_ID' => 'Nessun ID Transazione Specificato',

	'PAYPAL_ADDRESS' => 'Indirizzo PayPal',
	'PAYPAL_DEBUG' => 'Attiva Debugging',
	'PAYPAL_DEBUG_EXPLAIN' => 'I Fondatori usano sempre Paypal Sandbox e ogni dettaglio della transazione viene aggiunto ai LOG, disattivalo per l\'utilizzo standard',
	'PAYPAL_STYLE' => 'Stile PayPal',
	'PAYPAL_STYLE_EXPLAIN' => 'Inserisci il nome dello Stile PayPal (se necessario)',
	'PHP5_OR_ABOVE_REQUIRED' => 'PHP 5.0 o superiore &egrave; richiesto. PHP4 ha cessato di essere supportato dal gennaio 2008',

	'SANDBOX_ADDRESS' => 'Indirizzo PayPal Sandbox',
	'SANDBOX_TESTING' => 'Sandbox Testing',
	'SEND_CONFIRM_PM' => 'Invia PM Di Conferma',
	'SEND_CONFIRM_PM_EXPLAIN' => 'Se questa opzione viene disattivata, verr&agrave; inviata soltanto l\'email di conferma',
	'SUPPORTER_REWARDS' => 'Ricompensa Sostenitori',
	'SUPPORTERS_GROUP' => 'Gruppo Sostenitori',
	'SUPPORTERS_GROUP_EXPLAIN' => 'Seleziona il gruppo dei Sostenitori a cui chi effettuer&agrave; una donazione sar&agrave; aggiunto',
	'SUPPORTERS_GROUP_ID' => 'ID Gruppo Sostenitori',

	'THANKS_DONATION' => 'Grazie per la tua donazione',
	'TRANSACTION_ALREADY_CONFIRMED' => 'Questa transazione &egrave; stata confermata',
	'TRANSACTION_NOT_VALID' => 'Questa transazione non &egrave; valida o non &egrave; stata originata da questo sito',
	'TRANSACTION_NOT_VERIFIED' => 'Transazione non verificata. Clicca il seguente link per verificare la transazione: %s',
	'TRANSACTION_VERIFIED' => 'Transazione Verificata',
	'TRANSACTION_VERIFICATION_FAILED' => 'Verifica Transazione Fallita',

	'UPDATE_MOD_REQUIRED' => 'Devi aggiornare questo MOD per poter procedere. Clicca %sQUI%s per aggiornare',

	'currency_code' => array(
		'USD' => 'U.S. Dollars',
		'AUD' => 'Australian Dollars',
		'CAD' => 'Canadian Dollars',
		'CZK' => 'Czech Koruna',
		'DKK' => 'Danish Kroner',
		'EUR' => 'Euros',
		'HKD' => 'Hong Kong Dollars',
		'HUF' => 'Hungarian Forint',
		'NZD' => 'New Zealand Dollars',
		'NOK' => 'Norwegian Kroner',
		'PLN' => 'Polish Zlotych',
		'GBP' => 'Pounds Sterling',
		'SGD' => 'Singapore Dollars',
		'SEK' => 'Swedish Kronor',
		'CHF' => 'Swiss Francs',
		'JPY' => 'Yen',
	),

	'country_options' => array(
		'US' => 'United States',
		'AL' => 'Albania',
		'DZ' => 'Algeria',
		'AD' => 'Andorra',
		'AO' => 'Angola',
		'AI' => 'Anguilla',
		'AG' => 'Antigua and Barbuda',
		'AR' => 'Argentina',
		'AM' => 'Armenia',
		'AW' => 'Aruba',
		'AU' => 'Australia',
		'AT' => 'Austria',
		'AZ' => 'Azerbaijan Republic',
		'BS' => 'Bahamas',
		'BH' => 'Bahrain',
		'BB' => 'Barbados',
		'BE' => 'Belgium',
		'BZ' => 'Belize',
		'BJ' => 'Benin',
		'BM' => 'Bermuda',
		'BT' => 'Bhutan',
		'BO' => 'Bolivia',
		'BA' => 'Bosnia and Herzegovina',
		'BW' => 'Botswana',
		'BR' => 'Brazil',
		'VG' => 'British Virgin Islands',
		'BN' => 'Brunei',
		'BG' => 'Bulgaria',
		'BF' => 'Burkina Faso',
		'BI' => 'Burundi',
		'KH' => 'Cambodia',
		'CA' => 'Canada',
		'CV' => 'Cape Verde',
		'KY' => 'Cayman Islands',
		'TD' => 'Chad',
		'CL' => 'Chile',
		'C2' => 'China',
		'CO' => 'Colombia',
		'KM' => 'Comoros',
		'CK' => 'Cook Islands',
		'CR' => 'Costa Rica',
		'HR' => 'Croatia',
		'CY' => 'Cyprus',
		'CZ' => 'Czech Republic',
		'CD' => 'Democratic Republic of the Congo',
		'DK' => 'Denmark',
		'DJ' => 'Djibouti',
		'DM' => 'Dominica',
		'DO' => 'Dominican Republic',
		'EC' => 'Ecuador',
		'SV' => 'El Salvador',
		'ER' => 'Eritrea',
		'EE' => 'Estonia',
		'ET' => 'Ethiopia',
		'FK' => 'Falkland Islands',
		'FO' => 'Faroe Islands',
		'FM' => 'Federated States of Micronesia',
		'FJ' => 'Fiji',
		'FI' => 'Finland',
		'FR' => 'France',
		'GF' => 'French Guiana',
		'PF' => 'French Polynesia',
		'GA' => 'Gabon Republic',
		'GM' => 'Gambia',
		'DE' => 'Germany',
		'GI' => 'Gibraltar',
		'GR' => 'Greece',
		'GL' => 'Greenland',
		'GD' => 'Grenada',
		'GP' => 'Guadeloupe',
		'GT' => 'Guatemala',
		'GN' => 'Guinea',
		'GW' => 'Guinea Bissau',
		'GY' => 'Guyana',
		'HN' => 'Honduras',
		'HK' => 'Hong Kong',
		'HU' => 'Hungary',
		'IS' => 'Iceland',
		'IN' => 'India',
		'ID' => 'Indonesia',
		'IE' => 'Ireland',
		'IL' => 'Israel',
		'IT' => 'Italy',
		'JM' => 'Jamaica',
		'JP' => 'Japan',
		'JO' => 'Jordan',
		'KZ' => 'Kazakhstan',
		'KE' => 'Kenya',
		'KI' => 'Kiribati',
		'KW' => 'Kuwait',
		'KG' => 'Kyrgyzstan',
		'LA' => 'Laos',
		'LV' => 'Latvia',
		'LS' => 'Lesotho',
		'LI' => 'Liechtenstein',
		'LT' => 'Lithuania',
		'LU' => 'Luxembourg',
		'MG' => 'Madagascar',
		'MW' => 'Malawi',
		'MY' => 'Malaysia',
		'MV' => 'Maldives',
		'ML' => 'Mali',
		'MT' => 'Malta',
		'MH' => 'Marshall Islands',
		'MQ' => 'Martinique',
		'MR' => 'Mauritania',
		'MU' => 'Mauritius',
		'YT' => 'Mayotte',
		'MX' => 'Mexico',
		'MN' => 'Mongolia',
		'MS' => 'Montserrat',
		'MA' => 'Morocco',
		'MZ' => 'Mozambique',
		'NA' => 'Namibia',
		'NR' => 'Nauru',
		'NP' => 'Nepal',
		'NL' => 'Netherlands',
		'AN' => 'Netherlands Antilles',
		'NC' => 'New Caledonia',
		'NZ' => 'New Zealand',
		'NI' => 'Nicaragua',
		'NE' => 'Niger',
		'NU' => 'Niue',
		'NF' => 'Norfolk Island',
		'NO' => 'Norway',
		'OM' => 'Oman',
		'PW' => 'Palau',
		'PA' => 'Panama',
		'PG' => 'Papua New Guinea',
		'PE' => 'Peru',
		'PH' => 'Philippines',
		'PN' => 'Pitcairn Islands',
		'PL' => 'Poland',
		'PT' => 'Portugal',
		'QA' => 'Qatar',
		'CG' => 'Republic of the Congo',
		'RE' => 'Reunion',
		'RO' => 'Romania',
		'RU' => 'Russia',
		'RW' => 'Rwanda',
		'VC' => 'Saint Vincent and the Grenadines',
		'WS' => 'Samoa',
		'SM' => 'San Marino',
		'ST' => 'S„o TomÈ and PrÌncipe',
		'SA' => 'Saudi Arabia',
		'SN' => 'Senegal',
		'SC' => 'Seychelles',
		'SL' => 'Sierra Leone',
		'SG' => 'Singapore',
		'SK' => 'Slovakia',
		'SI' => 'Slovenia',
		'SB' => 'Solomon Islands',
		'SO' => 'Somalia',
		'ZA' => 'South Africa',
		'KR' => 'South Korea',
		'ES' => 'Spain',
		'LK' => 'Sri Lanka',
		'SH' => 'St. Helena',
		'KN' => 'St. Kitts and Nevis',
		'LC' => 'St. Lucia',
		'PM' => 'St. Pierre and Miquelon',
		'SR' => 'Suriname',
		'SJ' => 'Svalbard and Jan Mayen Islands',
		'SZ' => 'Swaziland',
		'SE' => 'Sweden',
		'CH' => 'Switzerland',
		'TW' => 'Taiwan',
		'TJ' => 'Tajikistan',
		'TZ' => 'Tanzania',
		'TH' => 'Thailand',
		'TG' => 'Togo',
		'TO' => 'Tonga',
		'TT' => 'Trinidad and Tobago',
		'TN' => 'Tunisia',
		'TR' => 'Turkey',
		'TM' => 'Turkmenistan',
		'TC' => 'Turks and Caicos Islands',
		'TV' => 'Tuvalu',
		'UG' => 'Uganda',
		'UA' => 'Ukraine',
		'AE' => 'United Arab Emirates',
		'GB' => 'United Kingdom',
		'UY' => 'Uruguay',
		'VU' => 'Vanuatu',
		'VA' => 'Vatican City State',
		'VE' => 'Venezuela',
		'VN' => 'Vietnam',
		'WF' => 'Wallis and Futuna Islands',
		'YE' => 'Yemen',
		'ZM' => 'Zambia',
	),
	)
);

?>