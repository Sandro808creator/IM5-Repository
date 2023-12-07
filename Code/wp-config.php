<?php
/**
 * Grundeinstellungen für WordPress
 *
 * Diese Datei wird zur Erstellung der wp-config.php verwendet.
 * Du musst aber dafür nicht das Installationsskript verwenden.
 * Stattdessen kannst du auch diese Datei als „wp-config.php“ mit
 * deinen Zugangsdaten für die Datenbank abspeichern.
 *
 * Diese Datei beinhaltet diese Einstellungen:
 *
 * * Datenbank-Zugangsdaten,
 * * Tabellenpräfix,
 * * Sicherheitsschlüssel
 * * und ABSPATH.
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Datenbank-Einstellungen - Diese Zugangsdaten bekommst du von deinem Webhoster. ** //
/**
 * Ersetze datenbankname_hier_einfuegen
 * mit dem Namen der Datenbank, die du verwenden möchtest.
 */
define( 'DB_NAME', 'detawame_wp0' );

/**
 * Ersetze benutzername_hier_einfuegen
 * mit deinem Datenbank-Benutzernamen.
 */
define( 'DB_USER', 'detawame_wp0' );

/**
 * Ersetze passwort_hier_einfuegen mit deinem Datenbank-Passwort.
 */
define( 'DB_PASSWORD', 'NnkZ9sx5RSG' );

/**
 * Ersetze localhost mit der Datenbank-Serveradresse.
 */
define( 'DB_HOST', 'detawame.mysql.db.internal' );

/**
 * Der Datenbankzeichensatz, der beim Erstellen der
 * Datenbanktabellen verwendet werden soll
 */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Der Collate-Type sollte nicht geändert werden.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Sicherheitsschlüssel
 *
 * Ändere jeden untenstehenden Platzhaltertext in eine beliebige,
 * möglichst einmalig genutzte Zeichenkette.
 * Auf der Seite {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * kannst du dir alle Schlüssel generieren lassen.
 *
 * Du kannst die Schlüssel jederzeit wieder ändern, alle angemeldeten
 * Benutzer müssen sich danach erneut anmelden.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'l*GU>)Sx9}[nw.)#PfV~Z}]kuQ m(nnYfyJ5R#&Q/ }GoQFKo]tP]iS5 :C^|(z9' );
define( 'SECURE_AUTH_KEY',  'wEv>1)xg.03LP_n@pYKc}U44CkH}EajItX;qji]4^#={AMO{^k*l,3[r]UvxpqrL' );
define( 'LOGGED_IN_KEY',    '5E<{#6_&;dLMhLSf.4)yqHZ7aVO]1PpcBN-ljq{<6T%b>{bEyRvVSn`Fj|[PSf~;' );
define( 'NONCE_KEY',        '/M#z/7p8(@=]40J~t`]7.8j92` Xn0[/VjoD.;<x~4@#A4%g5v`p#--03)lNIwVS' );
define( 'AUTH_SALT',        '<sc3_Um!HJ|qeCXRf?uf@NmY/<{}rN*BE#P*nf7rGEYeTGLtBczO0i~C)_r%$Xl~' );
define( 'SECURE_AUTH_SALT', '<naB/)@MP{$9j.{KAGSo*QMP7N>_e8S7${Oy}I9tE&3)2@;=}|>*Y@?{x&_D qI`' );
define( 'LOGGED_IN_SALT',   'aW^PY{&,;`5+O#58Ix$HT]]-#D,X`Q5G((D^}nu `,|CqR@}oJL.uBfRxrW!m6 V' );
define( 'NONCE_SALT',       '(HI;H{8USOT}0PO(|Cagj=F$cNr.{IOExLc*ab/^K:R-bk4*fRVyKMz6z[7O}~&Z' );

/**#@-*/

/**
 * WordPress Datenbanktabellen-Präfix
 *
 * Wenn du verschiedene Präfixe benutzt, kannst du innerhalb einer Datenbank
 * verschiedene WordPress-Installationen betreiben.
 * Bitte verwende nur Zahlen, Buchstaben und Unterstriche!
 */
$table_prefix = 'wp_';

/**
 * Für Entwickler: Der WordPress-Debug-Modus.
 *
 * Setze den Wert auf „true“, um bei der Entwicklung Warnungen und Fehler-Meldungen angezeigt zu bekommen.
 * Plugin- und Theme-Entwicklern wird nachdrücklich empfohlen, WP_DEBUG
 * in ihrer Entwicklungsumgebung zu verwenden.
 *
 * Besuche den Codex, um mehr Informationen über andere Konstanten zu finden,
 * die zum Debuggen genutzt werden können.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Füge individuelle Werte zwischen dieser Zeile und der „Schluss mit dem Bearbeiten“ Zeile ein. */



/* Das war’s, Schluss mit dem Bearbeiten! Viel Spaß. */
/* That's all, stop editing! Happy publishing. */

/** Der absolute Pfad zum WordPress-Verzeichnis. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Definiert WordPress-Variablen und fügt Dateien ein.  */
require_once ABSPATH . 'wp-settings.php';
