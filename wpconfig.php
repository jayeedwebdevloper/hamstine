<?php
// ** MySQL-Einstellungen ** //
/** Der Name der Datenbank für WordPress */
define('DB_NAME', 'dein_datenbankname');

/** MySQL-Datenbank-Benutzername */
define('DB_USER', 'dein_datenbankbenutzer');

/** MySQL-Datenbank-Passwort */
define('DB_PASSWORD', 'dein_datenbankpasswort');

/** MySQL-Hostname */
define('DB_HOST', 'localhost'); // Normalerweise ist 'localhost' richtig

/** Der Zeichensatz der Datenbank, der beim Erstellen der Datenbanktabellen verwendet werden soll. */
define('DB_CHARSET', 'utf8');

/** Der Collate-Typ der Datenbank. Ändere diese Einstellung nicht, wenn du dir nicht sicher bist. */
define('DB_COLLATE', '');

/** Erhöhe das PHP Memory Limit */
define('WP_MEMORY_LIMIT', '256M');

// ** Ein paar Sicherheitsschlüssel generieren ** //
define('AUTH_KEY', 'füge deinen einzigartigen Phrase hier ein');
define('SECURE_AUTH_KEY', 'füge deinen einzigartigen Phrase hier ein');
define('LOGGED_IN_KEY', 'füge deinen einzigartigen Phrase hier ein');
define('NONCE_KEY', 'füge deinen einzigartigen Phrase hier ein');
define('AUTH_SALT', 'füge deinen einzigartigen Phrase hier ein');
define('SECURE_AUTH_SALT', 'füge deinen einzigartigen Phrase hier ein');
define('LOGGED_IN_SALT', 'füge deinen einzigartigen Phrase hier ein');
define('NONCE_SALT', 'füge deinen einzigartigen Phrase hier ein');

/** Das Tabellenpräfix */
$table_prefix = 'wp_';

/* Das war's, Schluss mit dem Bearbeiten! Viel Spaß. */

/** Absolute Pfadangabe zum WordPress-Verzeichnis. */
if ( !defined('ABSPATH') )
    define('ABSPATH', dirname(__FILE__) . '/');

/** Setze WordPress-Variablen und füge Dateien ein. */
require_once(ABSPATH . 'wp-settings.php');